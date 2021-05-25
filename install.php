<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function check_password(){
      $password = $_REQUEST['password'];
      $retype_password = $_REQUEST['retype_password'];
      if($password != $retype_password){
        header("Refresh:0");

      }
      else {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = $_REQUEST['username'];
          $password = $_REQUEST['password'];
          if(empty($name). empty($password)){
            echo "empty";
          }
          else{
            password_hash($password, PASSWORD_DEFAULT);
            echo "name and pass";
            // unlink("install.php");
        }
    }
      }
    }

check_password();
     ?>

     <div class="">
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        Retype-Password: <input type="password" name="retype_password"><br>
         <input type="submit" value="Submit" name="submit">

     </div>

 </form>
  </body>
</html>
