<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

<?php
// add all product file to arr
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

// sort stores by name
    function sort_name_arr(){
      $file_arr = read_all_stores();
      $name_arr = [];
      for ($i=0; $i < count($file_arr); $i++) {
        $name_arr[$i] = $file_arr[$i]['name'];
      }
      sort($name_arr);
      return $name_arr;
      // return $file_arr;
    };

// echo "<pre>";
// var_dump(sort_name_arr());
// echo "</pre>";




    //print the stores by name
  function search_name($letters){
    $name_arr = sort_name_arr();
    $result_arr = [];
    for ($i=0; $i < count($name_arr); $i++) {
      $first_char = $name_arr[$i][0];
      if ($first_char == $letters) {
        array_push($result_arr,$name_arr[$i]);
      }
    }
    return $result_arr;
  };

  // echo "<pre>";
  // var_dump(search_name('2'));
  // echo "</pre>";

  // display # stores char
  function not_letter_stores(){
    $numbers = range(0, 9);
    $name_arr = sort_name_arr();
    $result_arr = [];
    for ($i=0; $i < count($name_arr) ; $i++) {
        $first_char = $name_arr[$i][0];
        for ($x=0; $x <count($numbers) ; $x++) {
          if ($first_char == $numbers[$x]) {
            array_push($result_arr,$name_arr[$i]);
          }
        }
    }
    return $result_arr;
  };

// echo "<pre>";
// var_dump(not_letter_stores());
// echo "</pre>";


 ?>











  </body>

</html>
