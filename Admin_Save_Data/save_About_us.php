<?php

$About_us_content = urldecode($_POST['About_us_content']);
file_put_contents('About-us.php', html_entity_decode($About_us_content));

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h1>You have edit About-us.php successfully</h1>";

     ?>
     <div class="button_for_About_us">
         <button type="button" name="button"><a href="admin_Data.php">Go back</a></button>
         <button type="button" name="button"><a href="index.php">HomePage</a></button>
     </div>


  </body>
</html>
