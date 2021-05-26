<?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST['username'];
      $pass = $_POST['password'];
      $repass = $_POST['repassword'];
      if (empty($id).empty($pass).($pass != $repass)) {
          header('location: install.php');
      } else {
        $adPass = password_hash($pass, PASSWORD_DEFAULT);
        setcookie($id, $adPass, time() + (86400 * 30), "/");
        // unlink("install.php");
      }
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
