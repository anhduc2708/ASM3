<?php
  session_start();

  if (isset($_POST['submit'])) {
    if (isset($_POST['password']) && $_POST['password'] == $_POST['repassword']) {
      $_SESSION['username'] = $_POST['username'];
      header('location: admin_Data.php');
    }
    $status = 'Invalid username/password';
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <!-- test -->
     <div class="">
<<<<<<< HEAD
       <form method="post" action="install.php">
=======
       <form action="admin_Data.php" method="post" >
>>>>>>> 9c0f7f45c06762bdbbb84acb400e357c96df65c8

        Username: <input type="text" name="username"><br>

        Password: <input type="password" name="password"><br>

<<<<<<< HEAD
        Retype-Password: <input type="password" name="repassword"><br>

=======
        Retype-Password: <input type="password" name="retype_password"><br>
        
>>>>>>> 9c0f7f45c06762bdbbb84acb400e357c96df65c8
        <input type="submit" value="Submit" name="submit">
     </div>

 </form>
  </body>
</html>
