<?php
// constants are unchanging.
// They are always written in capital letters
// don't start with $
// can only be set using a function 
define('MAX_WIDTH', 980);
echo MAX_WIDTH;

MAX_WIDTH -=1; // unchangable
// echo MAX_WIDTH

define("MAX_WIDTH", 40); // unredefinable
echo MAX_WIDTH;
?>
