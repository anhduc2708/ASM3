<?php

      // get id and pass and hassing password
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $id = $_POST['username'];
      $pass = $_POST['password'];
      $repass = $_POST['repassword'];
      if (empty($id).empty($pass).($pass != $repass)) {
          header('location: install.php');
      } else {
        $adPass = password_hash($pass, PASSWORD_DEFAULT);
        setcookie($id, $adPass, time() + (86400 * 30), "/");
        unlink("install.php");

      };
    };
    //if file exist stop run page
    // $filename = "install.php";
    // if (file_exists($filename)) {
    //     echo "<h1> 404 Error Connection </h1>";
    //     exit(admin_Data.php);}
?>

<?php
   $About_us_edit= "About-us.php";
   $About_us_html= file_get_contents($About_us_edit);
   $About_us_html= htmlentities($About_us_html, ENT_QUOTES);
   // echo $file_html;

   $Tos_edit= "ToS.php";
   $ToS_html= file_get_contents($Tos_edit);
   $ToS_html= htmlentities($ToS_html, ENT_QUOTES);

   $copyright_edit= "copyright.php";
   $copyright_html= file_get_contents($copyright_edit);
   $copyright_html= htmlentities($copyright_html, ENT_QUOTES);

   $private_edit= "private.php";
   $private_html= file_get_contents($private_edit);
   $private_html= htmlentities($private_html, ENT_QUOTES);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
    function About_us_encode_content(){
    var content = document.getElementById('About_us_content').value;
    document.getElementById('About_us_content').value = encodeURIComponent(content);
    }

    function ToS_encode_content(){
    var content = document.getElementById('ToS_content').value;
    document.getElementById('ToS_content').value = encodeURIComponent(content);
    }

    function Copyright_encode_content(){
    var content = document.getElementById('ToS_content').value;
    document.getElementById('ToS_content').value = encodeURIComponent(content);
    }

    function Private_encode_content(){
    var content = document.getElementById('private_content').value;
    document.getElementById('private_content').value = encodeURIComponent(content);
    }


  </script>
  </head>

  <body>
    <h1>This is Dashboard Menu</h1>
    <label>Click to enter the system</label>
    <button type="button" name="button"><a href="index.php">HomePage</a></button>

    <h2>About-us Editing</h2>
    <form name="edit_form" method="post" action="save_About_us.php" onsubmit="About_us_encode_content()">
    <textarea name="About_us_content" id="About_us_content" style="width:100%;" rows="20"><?php echo $About_us_html; ?></textarea>
    <input type="submit" value="Save this file">
  </form>

  <h2>ToS Editing</h2>
  <form name="edit_form" method="post" action="save_Tos.php" onsubmit="ToS_encode_content()">
  <textarea name="ToS_content" id="ToS_content" style="width:100%;" rows="20"><?php echo $ToS_html; ?></textarea>
  <input type="submit" value="Save this file">
</form>

<h2>Copyright Editing</h2>
<form name="edit_form" method="post" action="save_copyright.php" onsubmit="Copyright_encode_content()">
<textarea name="copyright_content" id="copyright_content" style="width:100%;" rows="20"><?php echo $copyright_html; ?></textarea>
<input type="submit" value="Save this file">
</form>

<h2>Private Editing</h2>
<form name="edit_form" method="post" action="save_private.php" onsubmit="Private_encode_content()">
<textarea name="private_content" id="private_content" style="width:100%;" rows="20"><?php echo $private_html; ?></textarea>
<input type="submit" value="Save this file">
</form>
<br>



  </body>

</html>
