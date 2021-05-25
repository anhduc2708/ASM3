
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <h1>This is Dashboard Menu</h1>

  </body>

</html>
