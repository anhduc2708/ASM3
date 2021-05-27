<?php
   $About_us_edit = "About-us.php";
   $file_html = file_get_contents($About_us_edit);
   $file_html = htmlentities($file_html, ENT_QUOTES);
   // echo $file_html;

   $Tos_edit = "ToS.php";
   $file_html1 = file_get_contents($Tos_edit);
   $file_html1 = htmlentities($file_html1, ENT_QUOTES);

   $copyright = "copyright.php";
   $file_html2 = file_get_contents($Tos_edit);
   $file_html2 = htmlentities($file_html2, ENT_QUOTES);

   $private = "private.php";
   $file_html3 = file_get_contents($private);
   $file_html3 = htmlentities($file_html3, ENT_QUOTES);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
    function encode_content(){
    var content = document.getElementById('file_content').value;
    document.getElementById('file_content').value = encodeURIComponent(content);
  }

  </script>
  </head>
  <body>
    <h2>About-us Editing</h2>
    <form name="edit_form" method="post" action="save_file.php" onsubmit="encode_content()">
    <textarea name="file_content" id="file_content" style="width:100%;" rows="20"><?php echo $file_html; ?></textarea>
    <input type="submit" value="Save this file">
  </form>

  <h2>ToS Editing</h2>
  <form name="edit_form" method="post" action="save_file.php" onsubmit="encode_content()">
  <textarea name="file_content" id="file_content" style="width:100%;" rows="20"><?php echo $file_html1; ?></textarea>
  <input type="submit" value="Save this file">
</form>

<h2>Copyright Editing</h2>
<form name="edit_form" method="post" action="save_file.php" onsubmit="encode_content()">
<textarea name="file_content" id="file_content" style="width:100%;" rows="20"><?php echo $file_html2; ?></textarea>
<input type="submit" value="Save this file">
</form>

<h2>Private Editing</h2>
<form name="edit_form" method="post" action="save_file.php" onsubmit="encode_content()">
<textarea name="file_content" id="file_content" style="width:100%;" rows="20"><?php echo $file_html3; ?></textarea>
<input type="submit" value="Save this file">
</form>
  </body>

</html>
