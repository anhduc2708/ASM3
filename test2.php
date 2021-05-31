<?php
  // $filename = 'install.php';
  // if (file_exists($filename)) {
  //     echo "<h1> 404 Error Connection </h1>";
  //     exit(test.php);
  // }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


// PRODUCTS FUNCTION (IN STORES)
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


// add featured products Array (stores)
function featured_products_arr(){
  $all_products_length = count(read_all_products());
  $featured_products_arr = read_all_products();
  for ($i=0; $i < $all_products_length ; $i++) {
    if ($featured_products_arr[$i]['featured_in_store'] == 'FALSE') {
        unset($featured_products_arr[$i]);
    }
  }

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
<!-- display new product  -->
<div class="divide_place">
<div class="small-container">
<h2>New Products</h2>
    <ul>
    <?php display_product(new_product_arr()); ?>
    </ul>
</div>
</div>

<!-- display new product  -->
<div class="divide_place">
<div class="small-container">
<h2>Featured Products</h2>
    <ul>
    <?php display_product(featured_products_arr()); ?>
    </ul>
</div>
</div>





  </body>
</html>
