<<<<<<< HEAD

<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
  }
?>
<?php
$adUser = $_POST["username"];
$cookie_value = $_POST["password"];
$adPass = password_hash($cookie_value, PASSWORD_DEFAULT);
setcookie($adUser, $adPass, time() + (86400 * 30), "/"); // 86400 = 1 day
            // unlink("install.php");
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
