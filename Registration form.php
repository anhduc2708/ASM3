<?php
// define variables and set to empty values
$nameError= $emailError= $usernameError= "";
$phone_numberError= $passwordmemberError= $addressError= "";
$cityError= $zipcodeError= $CountryCodeError= "";

$name= $email= $username= "";
$phone_number= $passwordmember= $address= "";
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
    $passwordhash= password_hash($passwordmember, PASSWORD_DEFAULT);
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
        <meta charset = "utf-8">
        <title> Sign Up </title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "css/Register form.css">
        <script src = "Js/Register.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="Image/favicon.png">

   </head>
   <header>
    <!-- Logo and navbar -->
    <div class="nav">
      <ul class="logo"><a href="index.php"><img src="Image/Malllogo.png" width="200px" ></a></ul>

      <ul class="Searchbar">
          <input type="search" id="search" placeholder="Search..." />
      </ul>

      <ul class="Nav-list">
          <li class="Nav-item">
            <a href = 'About-us.php' title = "About us"> About us</a>
          </li>
          <li class="Nav-item">
            <a href = "Fees.php" title = "Fees ">Fees</a>
          </li>
          <li class="Nav-item">
            <a href = "Contact.php" title = "Contact"> Contact</a>
          </li>
          <li class="Nav-item">
            <a href = "FAQs.php" title = "FAQs"> FAQs</a>
          </li>
          <li class="Nav-item">
            <a href = "Login.php" title = "Sign in"> Sign in</a>
          </li>
          <li class="Nav-item">
          <a href = "Registration form.php" title = "Sign up"> Sign up</a>
          </li>
      </ul>
    </div>
  </header>

<body>
  <div class="container">
    <section class="Registration">
      <div class="register-container">

        <div class="title"> Sign Up Form</div>

        <div class="content">
          <form method="post" action="Registration form.php">

            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" id="name" placeholder="Enter your name" name= "name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameError;?></span>
              </div>

              <div class="input-box">
                <span class="details">Username</span>
                <input type="text" id = "username" placeholder="Enter your username" name="username" value="<?php echo $username;?>"><span class="error">* <?php echo $usernameError;?></span>
              </div>

              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" id = "email" placeholder="Enter your email" name="email" value="<?php echo $email; ?>"><span class="error">* <?php echo $emailError;?></span>
              </div>

              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" id = "phone" placeholder="Enter your number" name="phone_number" value="<?php echo $phone_number; ?>"><span class="error">* <?php echo $phone_numberError;?></span>
              </div>

              <div class="input-box">
                <span class="details">Password</span>
                <input type="password" id = "pw" placeholder="Enter your password" name="password_member" value="<?php echo $passwordmember; ?>"><span class="error">* <?php echo $passwordmemberError;?></span>
              </div>

              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" id = "check_pw" placeholder="Confirm your password">
              </div>

              <div class = "input-box">
                <span class = "details"> Address </span>
                <input type = "text" id = "address" placeholder="Enter your address" name="address" value="<?php echo $address; ?>"><span class="error">* <?php echo $addressError;?></span>
              </div>

              <div class = "input-box">
                <span class = "details"> City </span>
                <input type = "text" id = "city" placeholder="Enter your city name" name="city" value="<?php echo $city; ?>"><span class="error">* <?php echo $cityError;?></span>
              </div>

              <div class = "input-box">
                <span class = "details"> Zipcode </span>
                <input type = "text" id = "zipcode" placeholder="Enter your zipcode (number)" name="zipcode" value="<?php echo $zipcode; ?>"><span class="error">* <?php echo $zipcodeError;?></span>
              </div>

              <div class = "input-box">
                <span class = "details"> Country Code </span>
                <input type = "text" id = "code" placeholder="Enter your country code (only 2 number)" name="countrycode" value="<?php echo $CountryCode; ?>"><span class="error">* <?php echo $CountryCodeError;?></span>
              </div>

            <!-- STORE OWNER INPUT  -->

                <div id= "opt" class = "input-box">
                  <span class = "details"> Bussiness Name (Store Owner Only) </span>
                  <input type = "text" id = "Owner_Input" placeholder="Enter your Bussiness name">
                </div>

                <div id= "opt" class = "input-box">
                  <span class = "details"> Store Name (Store Owner Only) </span>
                  <input type = "text" id = "Owner_Input" placeholder="Enter your store name">
                </div>

                <div id= "opt" class = "input-box">
                  <span class = "details"> Store Type (Store Owner Only) </span>
                  <select name = "store-list">
                    <option value = '' selected > Please select store </option>
                    <option value = '1' selected > Department Store </option>
                    <option value = '2' selected > Restaurant </option>
                    <option value = '3' selected > Grocery Store </option>
                    <option value = '4' selected > Clothing Store </option>
                    <option value = '5' selected > Accessory Store </option>
                    <option value = '6' selected > Pharmacy </option>
                    <option value = '7' selected > Technology Store </option>
                    <option value = '8' selected > Pet Store </option>
                    <option value = '9' selected > Toy Store </option>
                    <option value = '10' selected > Specialty Store </option>
                    <option value = '11' selected > Thrift Store </option>
                    <option value = '12' selected > Services </option>
                    <option value = '13' selected > Kiosks </option>
                  </select>
             </div>


            <div class="account-details">
              <input type="radio" name="account" id="dot-1" >
              <input type="radio" name="account" id="dot-2" >
              <span class="account-title">Account Type </span>

              <div class="category">

              <label for="dot-1">
                <span class="dot owner"></span>
                <span class="account" >Store Owner</span>
              </label>

              <label for="dot-2">
                <span class="dot user"></span>
                <span class="account"> User </span>
              </label>

              </div>
            </div>

            <div class="button">
              <input type="submit" value="Register" onclick="registerFunctionals()">
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <?php
  echo "<h2>Your Input:</h2>";
  echo $name. "<br>";
  echo $email. "<br>";
  echo $username. "<br>";
  echo $phone_number. "<br>";
  echo $address. "<br>";
  echo $passwordhash. "<br>";
  echo $city. "<br>";
  echo $zipcode. "<br>";
  echo $CountryCode. "<br>";

  $data_array= [$name, $email, $username, $passwordhash, $phone_number, $address, $city, $zipcode, $CountryCode];
  $memberfile= fopen("Admin_Save_Data\Member_data.txt","w");
  fwrite($memberfile, var_export($data_array, true));
  fclose($memberfile);

  ?>


  <div id="consent-popup" class="cookies">
    <H1>I uses Cookie</H1>
    <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of
      cookies and other technologies.</h3>
    <div class="interaction">
      <input type="button" value="I understand" class="popup" id="accept">
      <a href="private.php">Learn more</a>
    </div>
  </div>

</div>
</body>

  <footer>

    <!-- Bottom nav menu -->
    <div class="Bottom-nav">
      <div class = "footer-content">
        <ul>
          <li class="footer-item">
            <a href = "index.php" title = "Home"> Home</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "FAQs.php" title = "FAQs"> FAQs</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "About-us.php" title = "About"> About</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "copyright.php" title = "Copyright"> Copyright</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "ToS.php" title = "Term"> Term of Service </a>
          </li>
          <li class="footer-item">
            <a href = "private.php" title = "Privacy Policy"> Privacy Policy</a>
          </li>

        </ul>
      </div>

    <div class = "footer-descript">
      RMIT University, April 8th 2019
    </div>
  </div>
  <script type="text/javascript" src="js/cookie.js"></script>

  </footer>
</body>
</html>
