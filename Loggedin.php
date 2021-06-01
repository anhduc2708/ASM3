<?php
  $filename = 'install.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit();
  }
?>



<?php 

//read file and add to array
function read_array(){
$filearray = [];
$file_to_read= fopen("Member_data.txt","r");
$count=0;
while(!feof($file_to_read)){
  $first= fgets($file_to_read);
  if(feof($file_to_read)){
   break; 
  }
  array_push($filearray,$first);
}

return $filearray;
};

// echo "<pre>";
// var_dump(read_array());
// echo "</pre>";

// split lines
function take_line(){
$file_arr = read_array();
$first_var = [];
$count= 0;
foreach ($file_arr as $key) {
  $line_split= explode(",",$key);
  $first_var[$count++]=$line_split[0];
}
return $first_var;
};

// echo "<pre>";
// var_dump(take_line());
// echo "</pre>";

// // Valid user
function check(){
  $user = take_line();
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['username'];
    $pass = $_POST['password'];
    $user_cook="user";
    
    for ($i=0; $i < count($user); $i++) { 
      if (empty($id).empty($pass).($id != $user[$i])){
        $result= 2;
        
      } else{
        $result= 0;
        setcookie($user_cook, $id, time() + (86400 * 30), "/");
        break;
      }
    }

    if($result == 2){
      header('location: Login.php');
    }
    else{
    
    // }
   
    // return $user;
}
};
}
check();


function compare(){
  if(!isset($_COOKIE["user"])){
    header("location: Login.php");
  }
};
compare();

// add all data to arr split
function data_arr(){
  $file_arr = read_array();
  $data_arr = [];
  $count= 0;
  foreach (read_array() as $key) {
    $line_split= explode(",",$key);
    $data_arr[$count++] = [$line_split[0], $line_split[1] , $line_split[2], $line_split[3], $line_split[4], $line_split[5], $line_split[6], $line_split[7], $line_split[8] ];
  }
  return $data_arr;
};

// echo "<pre>";
// var_dump(data_arr());
// echo "</pre>";




// display information
function display_arr(){
  $user = $_COOKIE['user'];
  $data_arr = data_arr();
  $result = [];
  for ($i=0; $i < count($data_arr) ; $i++) { 
      if ($data_arr[$i][0] === $user) {
        $result = $data_arr[$i];
      }
  }
  return $result;
  // return $data_arr[0][1];
}
// echo "<pre>";
// var_dump(display_arr());
// echo "</pre>";


?>

<!DOCTYPE html>
<html>
<head>
<title>Logged In</title>
<link rel="icon" type="image/png" href="Image/favicon.png">
<style>
  * {
    margin: 0;
  }
header{
  top: 0;
  position: sticky;
  clear: both;
  background-color: whitesmoke ;
  margin-bottom:20px;
}

footer{
  background-color: black;
  height: 100px;
  clear:both;
  margin-top:20px;
}

  .bottom-nav {
    max-width: 1600px;
    padding-left: 25px;
    padding-right: 25px;
  }

  .footer-content{
    display: flex ;
    justify-content: center;


  }

  .footer-item{
    font-size: 20px;
   list-style: none;
   margin: 0 8px;
   display: inline-block;
   transition: transform 0.5s;
   padding-top: 40px;
  }
  .footer-item a{
    text-decoration: none;
    color:white;
    }
  .footer-item:hover{
    transform: translateY(-5px);
  }
  .footer-descript{
    color: white;
   }

  main{
    margin-top:10px;
    background-color: white ;
    float:left;
    width: calc(100% - 40%);
    margin-bottom:10px;
    }

/* Navbar css */
 .nav{
   max-width: 1600px;
   display: flex;
   align-items: center;
   padding-left: 25px;
   padding-right: 25px;
 }

 .logo{
   padding-left: 0;
   margin: auto 16px;
 }

 .Nav-item{
   font-size: 20px;
   list-style: none;
   margin: 0 8px;
   display: inline-block;
   transition: transform 0.5s;
 }
 .Nav-item:hover{
  transform: translateY(-5px);
 }
 .Nav-item a{
  text-decoration: none;
  color:#555;
 }

 .Searchbar{
   flex: 1;
 }

 #left{
 float:left;

 width: 30%;

 }

 #left img {
	height: 250px;
	width:250px;
	border-radius: 50%;
	float:left;
	margin-left:50px;



 }
 #right{
 	margin-top:10px;
        width: 20%;
        float: right;
		margin-bottom:10px;
		height:100%;
		text-align:center;
 }
 main {
        background-color: white;
        width: calc(100% - 20% - 30%);
        float: left;
		margin-bottom:10px;
		margin-top:10px;
		}

 .information{

 padding-top:10px;
 float:left;
 margin-left:50px;
 padding-bottom:175px;

 }
 .nameid{

 padding-top:20px;
 }
 .mainarea{


 padding-bottom:100px;

 }
 .button2{
  background-color: black;
  color: white
}


.button2 {
  display: inline-block;
  padding: 20px 40px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: black;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-bottom:75px;

}
.button2:hover {background-color:gray;}

.button2:active {
  background-color: gray;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.borderfooter{
border-style: solid;
border-color: black;
border-width: 10px 10px;
background-color:white;
color:black;
padding-right:30px;


}
a{
text-decoration: none;
color:white;

}
/* Cookie */
#consent-popup{
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem;
  background: radial-gradient(#fff, #ffd6d6) ;
  opacity: 1;
  transition: opacity .8s ease;
  max-height: 200px;
}

      #accept{
      color: black;
      padding: 8px 30px;
      margin: 30px 0;
      border-radius: 15px;
      text-decoration: none;
      background-color: yellow;
      }
      
      .interaction{
        display: inline-flex;
        align-items: center;
        max-height: fit-content;
      
      }
      
      .interaction a{
        color: black;
        padding-left: 50px;
      }

</style>
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
<aside id= "left">
<img src="Image/Nickprofile.jpg"></img>


</aside>
<main>

 
<div class="mainarea">
<h2>Personal Information</h2>
<div class="information">
<div class="nameid">
<p><strong>Full Name:</strong> <?php echo display_arr()[2]; ?> </p>
<br>
</div>
<p><strong>Username:</strong> <?php echo display_arr()[0]; ?></p>
<br>
<p><strong>Role:</strong> User</p>
<br>
<p><strong>Email:</strong> <?php echo display_arr()[1]; ?></p>
<br>
<p><strong>Phone Number:</strong> <?php echo display_arr()[4]; ?></p>
<br>
<p><strong>Address:</strong> <?php echo display_arr()[5]; ?></p>
<br>
<p><strong>Website:</strong> personal.com</p>

</div>
</div>
</main>

<aside id="right">
<button class="button2"><a href="Forgotpsw.php">Change My Password</a></button>
<div class="borderfooter">
<h2>Checkout Defaut</h2>
<br>
<p>Shipping medthod: Flycam</p>
<br>
<p>Shipping address: 703 Nguyen Van Linh</p>
<br>
<p>Creadit card: 123456 - ATM banking</p>
<br>
<button class="button2">Edit</button>


</div>
</aside>
<div id="consent-popup" class="cookies">
  <H1>I uses Cookie</H1>
  <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of
    cookies and other technologies.</h3>
  <div class="interaction">
    <input type="button" value="I understand" class="popup" id="accept">
    <a href="private.php">Learn more</a>
  </div>
</div>
</body>

  <footer>

    <!-- Bottom nav menu -->
    <div class="Bottom-nav">
      <div class = "footer-content">
        <ul>
          <li class="footer-item">
            <a href = "Homepage.php" title = "Home"> Home</a>
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
</html>
