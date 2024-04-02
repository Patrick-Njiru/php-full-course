<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$details_arr = ['firstName' => 'John', 'lastName' => 'Doe', 'gender' => 'male', 'age' => 24];

// loop through arrays and associative arrays
foreach ($arr1 as $value) {
  // echo $value;
}

foreach ($details_arr as $details_arr => $value) {
  echo $details_arr . ': ' . $value . '<br>';
}
