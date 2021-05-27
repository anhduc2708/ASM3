<?php
   $file = "About-us.php";
   $file_html = file_get_contents($file);
   $file_html = htmlentities($file_html, ENT_QUOTES);
   // echo $file_html;

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
    <form name="edit_form" method="post" action="save_file.php" onsubmit="encode_content()">
    <textarea name="file_content" id="file_content" style="width:100%;" rows="20"><?php echo $file_html; ?></textarea>
    <input type="submit" value="Save this file">
  </form>
  </body>

</html>
