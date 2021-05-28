<?php
$copyright_content = urldecode($_POST['copyright_content']);
file_put_contents('copyright.php', html_entity_decode($copyright_content));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h1>You have edit copyright.php successfully</h1>";

     ?>
     <div class="button_for_copyright">
         <button type="button" name="button"><a href="admin_Data.php">Go back</a></button>
         <button type="button" name="button"><a href="index.php">HomePage</a></button>
     </div>


  </body>
</html>
