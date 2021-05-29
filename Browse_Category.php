<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

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
// echo "<pre>";
// var_dump(read_all_stores());
// echo "</pre>";


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
// echo "<pre>";
// var_dump(read_all_category());
// echo "</pre>";


// display infor
function search_category(){
  $categories_name = 'Technology stores';
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
          array_push($result, $stores[$i]);
    }
  }
  return $result;
};

// echo "<pre>";
// var_dump(search_category());
// echo "</pre>";







 ?>
  </body>
</html>
