<<<<<<< HEAD

<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
  }
=======
<?php
$adUser = $_POST["username"];
$cookie_value = $_POST["password"];
$adPass = password_hash($cookie_value, PASSWORD_DEFAULT);
setcookie($adUser, $adPass, time() + (86400 * 30), "/"); // 86400 = 1 day
            // unlink("install.php");
>>>>>>> 9c0f7f45c06762bdbbb84acb400e357c96df65c8
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

<<<<<<< HEAD
    <h1>This is Dashboard Menu</h1>
=======
    <?php
    function check_password(){

      if($password != $retype_password){
        header("Refresh:0");
      }
      else {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = $_REQUEST['username'];
          $password = $_REQUEST['password'];
          if(empty($name).empty($password)){
            echo "empty";
          }
          else{
            password_hash($password, PASSWORD_DEFAULT);
            echo "name and pass";

        }
    }
      }
    }

    check_password();

    // $filename = 'install.php';
    // $closeSystem = 'CLOSE';
    //
    // if (file_exists($filename)) {
    //     echo "The file $filename exists";
    //
    // } else {
    //     echo "The file $filename does not exist";
    // }


     ?>

    Welcome <?php echo $_POST["username"]; ?><br>
    Your name is: <?php echo $_POST["username"];?>
    Your password is: <?php echo $_POST["password"];?>
>>>>>>> 9c0f7f45c06762bdbbb84acb400e357c96df65c8

  </body>

</html>
