<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Browse By Category</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "css/Browse_Stores.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Image/favicon.png">
    <script type="text/javascript" src="js/cookie.js"></script>
  </head>

  <header>

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

            <li class ="Nav-item">
              <label> Browse Stores </label>
              <select id="stores" onchange="Browse_Stores(this)">
                <option value=""> -- Select -- </option>
                <option value= "br_name">By Name</option>
                <option value= "br_category">By Category</option>
              </select>
              <p style="color: red" id="show_message"></p>
            </li>

        </ul>
      </div>
  </header>
  <body>
    <div class="Browse_category">
    <label> <h3>Select The Stores By Categories </h2></label>

    <form method="POST" action="">
    <select name="categories"  onchange="this.form.submit()" style="width:300px;" >
      <option value="" disabled selected> -- Select -- </option>
      <option value= "Department stores">Department stores</option>
      <option value= "Grocery stores">Grocery stores</option>
      <option value= "Restaurants">Restaurants</option>
      <option value= "Clothing stores">Clothing stores</option>
      <option value= "Accessory stores">Accessory stores</option>
      <option value= "Pharmacies">Pharmacies</option>
      <option value= "Technology stores">Technology stores</option>
      <option value= "Pet stores">Pet stores</option>
      <option value= "Toy stores">Toy stores</option>
      <option value= "Specialty stores">Specialty stores</option>
      <option value= "Thrift stores">Thrift stores</option>
      <option value= "Services">Services</option>
      <option value= "Kiosks">Kiosks</option>
    </form>
    </select>

    </div>

    <div class="divide_place">
    <div class="small-container">
    <ul>
      <?php
        if(isset($_POST["categories"])){
        $category_name=$_POST["categories"];
        display_stores(search_category($category_name));}
      ?>
    </ul>
    </div>
    </div>




<?php

function read_all_stores() {
  $file_name = 'stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $store = [];
    foreach ($first as $col_name) {
      $store[$col_name] =  $row[$i];
      $i++;
    }
    $stores[] = $store;
  }
  return $stores;
};


function read_all_category() {
  $file_name = 'categories.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $categories = [];
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $categorie = [];
    foreach ($first as $col_name) {
      $categorie[$col_name] =  $row[$i];
      $i++;
    }
    $categories[] = $categorie;
  }
  return $categories;
};



// display infor
function search_category($categories_name){
  $stores = read_all_stores();
  $categories = read_all_category();
  $category_id = 0;
  $result = [];

  for ($i=0; $i <count($categories); $i++) {
      if ($categories[$i]['name'] == $categories_name){
          $category_id = $categories[$i]['id'];
      }
  }
  for ($i=0; $i <count($stores) ; $i++) {
      if ($stores[$i]['category_id'] == $category_id) {
          array_push($result, $stores[$i]['name']);
    }
  }
  return $result;
};


function display_stores($array){
  $stores_logo = ['Image/adidas.png','Image/ananas.png','Image/bitis.png','Image/chanel.png','Image/gucci.png','Image/LV.png','Image/nike.png','Image/adidas.png','Image/Store logo - Copy.png','Image/nike.png',];
  for ($i=0; $i <count($array); $i++) {
    $display = $array[$i];
    echo " <li>
            <a href='Store home page.php'> <img src='$stores_logo[$i]' alt='Shoe' width='150px' height='150px'> </a>
            <div class='infor'> $display </div>
           </li>";
  }
};
?>


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
  </footer>

  <script type="text/javascript">

  function Browse_Stores(obj)
  {
      var message = document.getElementById('show_message');
      var value = obj.value;
      if (value === ''){
          message.innerHTML = "Select Again";
      }
      else if (value === 'br_name'){
          window.location.href = "Browse_Name.php";
      }
      else if (value === 'br_category'){
          window.location.href = "Browse_Category.php";
      }
  };

  </script>

</html>
