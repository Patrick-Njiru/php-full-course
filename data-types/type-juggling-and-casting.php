<?php
// Type Juggling - examples
// php allows us to add an integer to a stringed integer as well as converting the boolean value 'true' to 1

$val = '4';
// echo gettype($val); // string
$val += 5;
// echo gettype($val); // integer
$cats = 'I have ' . $val . ' cats.';
// echo gettype($cats); // string


// Type Casting
// When we set the type ourselves

$var1 = 3;
// Casting methods
settype($var1, 'string');
echo gettype($var1);

$var2 = (array) $var1;
echo gettype($var2);
echo print_r($var2);

?>