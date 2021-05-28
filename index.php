<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset = "utf-8">
    <title> Home Page</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "css/index_css.css">
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
            <li class="Nav-item">
            <a href = "Registration form.php" title = "Sign up"> Sign up</a>
            </li>
        </ul>
      </div>
  </header>


  <body>

  <div class="large-container">
    <div class="row">
      <div class="col">
        <h1>The best shopping experience that you ever have!</h1>
          <a href="#" class="button">Explore Now &#8594;</a>
      </div>
      <div class="col">
        <img src="Image/mall.png">
      </div>
    </div>

    </div>

<!-- php -->
<?php
// PRODUCTS FUNCTION
// add all product file to arr
  function read_all_products() {
    $file_name = 'products.csv';
    $fp = fopen($file_name, 'r');
    $first = fgetcsv($fp);
    $products = [];
    while ($row = fgetcsv($fp)) {
      $i = 0;
      $product = [];
      foreach ($first as $col_name) {
        $product[$col_name] =  $row[$i];
        $i++;
      };
      $products[] = $product;
    };
    return $products;
  };
// get products from file
  function get_product($product_id) {
    $products = read_all_products();
    foreach ($products as $p) {
      if ($p['id'] == $product_id) {
        return $p;
      }
    }
    return false;
  };

// add featured products Array
  function featured_products_arr(){
    $all_products_length = count(read_all_products());
    $featured_products_arr = read_all_products();
    for ($i=0; $i < $all_products_length ; $i++) {
      if ($featured_products_arr[$i]['featured_in_mall'] == 'FALSE') {
          unset($featured_products_arr[$i]);
      }
    };

    $all_products_infor = array_values($featured_products_arr);

    $result = [];
    for ($i=0; $i < 10; $i++) {
        $result[$i] = [$all_products_infor[$i]['name'],$all_products_infor[$i]['price']];
    }
    return $result;

  };
  // echo '<pre> ';
  // var_dump(featured_products_arr())."<br>";
  // echo '</pre> ';

//  function for new products
// create function with real id and caculate time
  function time_products_arr(){
    $time_arr= [];
    for ($i=0; $i < count(read_all_products()); $i++) {
      $time_selected = read_all_products()[$i]["created_time"];
      $new_time_selected = str_replace("Z","",$time_selected);
      $time_product = time() - strtotime($new_time_selected);
      $time_arr[$i] = abs($time_product);
    }
    asort($time_arr);
    return $time_arr;
  };
// create a result arr wth all new products informations
  function new_product_arr(){
    $time_arr = time_products_arr();
    $id_all_products = array_keys($time_arr);
    $all_products_arr = read_all_products();
    $result = [];
    for ($i=0; $i <10; $i++) {
      $result[$i] = [$all_products_arr[$id_all_products[$i] - 1]['name'], $all_products_arr[$id_all_products[$i] - 1]['price']];
    }
    return $result;
  };
  // echo '<pre>';
  // var_dump(new_product_arr());
  // echo '</pre>';



// STORES FUNCTION
// add all stores file to arr
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

// get stores from file
  function get_store($store_id) {
  $stores = read_all_stores();
  foreach ($stores as $s){
    if ($s['id'] == $store_id){
      return $s;
    }
  }
  return false;
  };

// function for feature stores
  function featured_stores_arr(){
    $all_stores_length = count(read_all_stores());
    $featured_stores_arr = read_all_stores();
    for ($i=0; $i < $all_stores_length ; $i++) {
      if ($featured_stores_arr[$i]['featured'] == 'FALSE') {
          unset($featured_stores_arr[$i]);
      }
    }

    $all_stores_infor = array_values($featured_stores_arr);

    $result = [];
    for ($i=0; $i < 10; $i++) {
        $result[$i] = $all_stores_infor[$i]['name'];
    }
    return $result;
  };
  // echo '<pre>';
  // var_dump(featured_stores_arr());
  // echo '</pre>';

// NEW STORES
// create function with real id and caculate time
     function time_stores_arr(){
       $time_arr= [];
       for ($i=0; $i < count(read_all_stores()); $i++) {
         $time_selected = read_all_stores()[$i]["created_time"];
         $new_time_selected = str_replace("Z","",$time_selected);
         $time_stores = time() - strtotime($new_time_selected);
         $time_arr[$i] = abs($time_stores);
       }
       asort($time_arr);
       return $time_arr;
     };

// function for new stores
  function new_stores_arr(){
    $time_arr = time_stores_arr();
    $id_all_stores = array_keys($time_arr);
    $all_stores_arr = read_all_stores();
    $result = [];
    for ($i=0; $i <10; $i++) {
      $result[$i] = $all_stores_arr[$id_all_stores[$i] - 1]['name'];
    }
    return $result;
  };

  // echo '<pre>';
  // var_dump(new_stores_arr());
  // echo '</pre>'

// final part
function display_stores($array){
  $stores_logo = ['Image/adidas.png','Image/ananas.png','Image/bitis.png','Image/chanel.png','Image/gucci.png','Image/LV.png','Image/nike.png','Image/adidas.png','Image/Store logo - Copy.png','Image/nike.png',];
  for ($i=0; $i <count($array); $i++) {
    $display = $array[$i];
    echo " <li>
            <a href='Store home page.php'> <img src='$stores_logo[$i]' alt='Shoe' width='150px' height='200px'> </a>
            <div class='infor'> $display </div>
           </li>";
  }
};

function display_product($array){
  $product_img = ['Image/cap1.png', 'Image/cap2.png', 'Image/cap3.png', 'Image/cap4.png', 'Image/footballshoes1.png', 'Image/footballshoes2.png', 'Image/footballshoes3.png', 'Image/footballshoes4.png', 'Image/shirts1.png', 'Image/shirts2.png'];
  for ($i=0; $i <count($array); $i++) {
    $display_name = $array[$i][0];
    $display_price = $array[$i][1];
    echo " <li>
            <a href='detailpage.php'> <img src='$product_img[$i]' alt='Shoe' width='150px' height='200px'> </a>
            <div class='infor'> $display_name </div>
            <div class='infor'> $display_price$</div>
           </li>";
  }
};


?>

<!-- display new stores -->
<div class="divide_place">
  <div class="small-container">
  <h2>New Stores</h2>
      <ul>
        <?php display_stores(new_stores_arr());?>
      </ul>
  </div>
</div>

<!-- display feature stores -->
<div class="divide_place">
  <div class="small-container">
  <h2>Feature Stores</h2>
      <ul>
      <?php display_stores(featured_stores_arr()); ?>
      </ul>
  </div>
</div>

<!-- display new product  -->
<div class="divide_place">
<div class="small-container">
<h2>New Products</h2>
    <ul>
    <?php display_product(new_product_arr()); ?>
    </ul>
</div>
</div>

<!-- display feature product  -->
<div class="divide_place">
<div class="small-container">
<h2>Feature Products</h2>
    <ul>
    <?php display_product(featured_products_arr());?>
    </ul>
</div>
</div>








  <div id="consent-popup" class="cookies">
        <H1>I uses Cookie</H1>
        <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies.</h3>
          <div class="interaction">

            <input type = "button" value ="I understand" class="popup" id="accept" >
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

</html>
