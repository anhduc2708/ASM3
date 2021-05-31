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
// echo '</pre>';

// final part
function display_information($array){
for ($i=0; $i < count($array); $i++) {
  $display = $array[$i];
  // echo $array[$i]. "<br>";
  echo "<p> $display <p>";
}
};


     ?>

  </body>
</html>
