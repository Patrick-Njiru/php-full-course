<?php 
// Booleans and Null are case insesitive
$result1 = TrUe;
$result2 = fAlSe;

// echo "$result1 - true <= => $result2 - false";

$var1 = Null;
$var2 = '';

// echo is_null($var1); // 1
// echo is_null($var2); //
// echo is_null($var3); // 1 since it is undefined

// Empty
// echo isset($var1); // 
// echo isset($var2); // 1
// echo isset($var3); // 

// php considers the following values empty : null, false, "", 0, 0.0, "0", array()
echo empty(0);
echo empty(array());
?>