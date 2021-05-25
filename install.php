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

       <form method="post" action="install.php">

       <form action="admin_Data.php" method="post" >


        Username: <input type="text" name="username"><br>

        Password: <input type="password" name="password"><br>

        Retype-Password: <input type="password" name="repassword"><br>

        <input type="submit" value="Submit" name="submit">
     </div>

 </form>
  </body>
</html>
