<?php
// Indexed Arrays
$arr_1 = [1, "two", ['three', 4]];
$arr_2 = array(5, 4, 7, 8, 23, 5);
$arr_3 = array(3, 4, 6, 8, array(1, 2, 5, 7));
$arr_4 = array();
// add an item to the end of the array
$arr_4[4] = 45;
$arr_4[] = '!';

// echo $arr_1[2][0];
// echo '<br>';
// echo $arr_2[1];

// echo '<br>';
// echo $arr_3[4][3];
// echo '<pre>';
// echo print_r($arr_1);
// echo '</pre>';

// echo print_r($arr_4);
// echo $arr_4[2];
// echo $arr_4[5];

// Associative Arrays
// key-value pairs
$arr_5 = ['first_name' => 'Patrick', 'last_fname' => 'Njiru'];

// Array Functions
// echo count($arr_1);
// echo max($arr_2);
// echo min($arr_2);

// Destructive functions
sort($arr_2);
// echo print_r($arr_2);
rsort($arr_2);
// echo print_r($arr_2);

sort($arr_5);
// echo print_r($arr_5);

// Convert arr to string
$mixedArr = [1, 'helo', 2];
$numString = implode("-_ ", $mixedArr);
// echo $numString;

// convert string to Array
$sentence = 'Hi!My name is what?My Name is who?My name is Patrick';

$sentence_arr = explode('!', $sentence);
// echo print_r($sentence_arr);

// Checking for presence of a value in an array
echo in_array('Hi', $sentence_arr); // 1
// more methods in the php manual
