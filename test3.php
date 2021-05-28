<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameError= $emailError= $uesrnameError= "";
$phone_numberError= $passwordmemberError= $addressError "";
$cityError= $zipcodeError= $CountryCodeError= "";

$name= $email= $username "";
$phone_number= $passwordmember= $address "";
$city= $zipcode= $CountryCode= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError= "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr= "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email= test_input($_POST["email"]);
  }

  if (empty($_POST["username"])) {
    $usernameError = "Username is required";
  } else {
    $username= test_input($_POST["username"]);
  }

  if (empty($_POST["phone_number"])) {
    $phone_numberError = "Phone Number is required";
  } else {
    $phone_number= test_input($_POST["phone_number"]);
  }

  if (empty($_POST["phone_number"])) {
    $phone_numberError = "Phone Number is required";
  } else {
    $phone_number= test_input($_POST["phone_number"]);
  }

  if (empty($_POST["password_member"])) {
    $passwordmemberError = "Password is required";
  } else {
    $passwordmember= test_input($_POST["password_member"]);
  }

  if (empty($_POST["address"])) {
    $addressError = "Address is required";
  } else {
    $address= test_input($_POST["address"]);
  }

  if (empty($_POST["city"])) {
    $cityError = "city is required";
  } else {
    $city= test_input($_POST["city"]);
  }

  if (empty($_POST["zipcode"])) {
    $zipcodeError = "zipcode is required";
  } else {
    $zipcode= test_input($_POST["zipcode"]);
  }

  if (empty($_POST["countrycode"])) {
    $CountryCodeError = "countrycode is required";
  } else {
    $CountryCode= test_input($_POST["countrycode"]);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>

<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";


?>

</body>
</html>
