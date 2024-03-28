<?php
// Indexed Arrays
$arr_1 = [1, "two", ['three', 4]];
$arr_2 = array(3, 4, 6, 8);
$arr_3 = array(3, 4, 6, 8, array(1, 2, 5, 7));
$arr_4 = array();
// add an item to the end of the array
$arr_4[4] = 45;
$arr_4[] = '!';

echo $arr_1[2][0];
echo '<br>';
echo $arr_2[1];
echo '<br>';
echo $arr_3[4][3];
echo '<pre>';
echo print_r($arr_1);
echo '</pre>';

echo print_r($arr_4);
echo $arr_4[2];
echo $arr_4[5];

// Associative Arrays
// key-value pairs
$arr_5 = ['first_name' => 'Patrick', 'last_fname' => 'Njiru'];

?>