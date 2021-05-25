<?php

    function checkFile()
    {
      $filename = 'install.php';
      if (file_exists($filename)) {
          return false;
      } else {
          return true;
      }
    };
  checkFile();
  if (checkFile() == false) {
      echo "<h1>404 Error Connection</h1>";
      exit(test.php);
  }
  else {
    echo "Hello";
  };

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<<<<<<< HEAD
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['username'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
aaa
=======

    <p>tuyet voi ong mat troi</p>

>>>>>>> 9c0f7f45c06762bdbbb84acb400e357c96df65c8
  </body>
</html>
