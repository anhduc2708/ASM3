<?php
  $filename = 'instal1l.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit(test.php);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">



  </head>

  <style media="screen">

    .test{

    }

  </style>
  <body>

    <div id="new">
    <p id="p1">Tutorix</p>
    <p id="p2">Tutorialspoint</p>
    </div>




    <?php

    // PRODUCTS FUNCTION
    function all_products_Function() {
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
          }
          $products[] = $product;
        }
        return $products;
      };

      function get_product($product_id) {
        $products = read_all_products();
        foreach ($products as $p) {
          if ($p['id'] == $product_id) {
            return $p;
          }
        }
        return false;
      };

      // add all data to array
      $prodcts_Array = [];
      for ($i=0; $i< count(read_all_products()) + 1; $i++) {
        $prodcts_Array[] = get_product($i);
      };

      // add featured products Array
      $prodcts_Array_length = count($prodcts_Array);
      $valid_product_array = [];
      for ($i=0; $i <$prodcts_Array_length ; $i++) {
        if ($prodcts_Array[$i]['featured_in_mall'] != 'FALSE' && $valid_product_array[$i] != $prodcts_Array[$i] ) {
            $valid_product_array[] = $prodcts_Array[$i];
        }
      };
      // // echo to test value
      // for ($i=0; $i <count($valid_product_array); $i++) {
      //     echo '<pre> ';
      //     var_dump($valid_product_array)."<br>";
      //     echo '</pre> ';
      // };

    };
    // all_products_Function();



    // STORES FUNCTION
    function all_stores_function(){
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

      // for ($i=0; $i <count(read_all_stores()); $i++) {
      //     echo '<pre> ';
      //     var_dump(read_all_stores())."<br>";
      //     echo '</pre> ';
      // };

      // echo count(read_all_stores());


      function get_stores($stores_id) {
        $stores = read_all_stores();
        foreach ($stores as $s) {
          if ($s['id'] == $stores_id) {
            return $s;
          }
        }
        return false;
      };

      // add all data to array
      $stores_Array = [];
      for ($i=0; $i< count(read_all_stores()) + 1; $i++) {
        $stores_Array[] = get_stores($i);
      };

      // add featured stores Array
      $stores_Array_length = count($stores_Array);
      $valid_stores_array = [];
      for ($i=0; $i <$stores_Array_length ; $i++) {
        if ($stores_Array[$i]['featured'] != 'FALSE' && $valid_stores_array[$i] != $stores_Array[$i] ) {
            $valid_stores_array[] = $stores_Array[$i];
        }
      };
      // echo to test value
      for ($i=0; $i <count($valid_stores_array); $i++) {
          echo '<pre> ';
          var_dump($valid_stores_array)."<br>";
          echo '</pre> ';
      };

    };

    // all_stores_function();






    ?>

  </body>
  <script src="Js/test.js"></script>

</html>
