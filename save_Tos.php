<?php
  $filename = 'install.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit();
  }
?>

<?php
$ToS_content = urldecode($_POST['ToS_content']);
file_put_contents('ToS.php', html_entity_decode($ToS_content));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<h1>You have edit ToS.php successfully</h1>";

     ?>
     <div class="button_for_ToS">
         <button type="button" name="button"><a href="admin_Data.php">Go back</a></button>
         <button type="button" name="button"><a href="index.php">HomePage</a></button>
     </div>


  </body>
</html>
