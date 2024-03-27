<?php
// Strings
$myName = 'Patrick Njiru';
// The use of double quotes enables you to add dynamic strings
$greeting = "Hello $myName, how are you?";
$errorGreeting = "Hello $myName_how are you?";
// $myNamehow does not exist. To avoid the above error, enclose variables in curly braces
$errorGreeting = "Hello {$myName}_how are you?";

$firstName = 'Patrick';
$lastName = 'Njiru';


$first = 'The quick brown fox';
$second = ' jumped over the lazy dog';
$third = $first;
$third .= $second;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>

<body>
  <?php echo $greeting ?>
  <hr>
  <?php echo $errorGreeting ?>
  <hr>
  <?php
  // concatenation
  echo $firstName . " " . $lastName;
  ?>
  <hr>
  <?php echo $third ?>
  <hr>
  <h3>String Functions</h3>
  <?php
  // String functions
  echo "Lowercase: strtolower() - " . strtolower($firstName);
  echo "<hr>";
  echo "Uppercase: strtoupper() - " . strtoupper($firstName);
  echo "<hr>";
  echo "Length: strlen() - " . strlen($firstName);
  echo "<hr>";
  echo "Capitalize words:  ucwords() - " . ucwords($first);
  echo "<hr>";
  echo "Capitalize first word only:  ucfirst() - " . ucfirst($first);
  echo "<hr>";
  echo "Remove leading and trailing white spaces:  trim() - " . "A" . trim(" B C D ") . "E";
  echo "<hr>";
  echo "Remove leading and trailing white spaces:  trim() - " . "A" . trim(" B C D ") . "E";
  echo "<hr>";
  echo "Find a string within a subject and return the remaining part of the subject starting from that string onwards:  strstr(haystack, needle) - " . strstr($third, "jumped");
  echo "<hr>";
  echo "Find and Replace:  strstr(search, replace, subject) - " . str_replace("jumped", "hopped", $third);
  echo "<hr>";
  echo "Repeat:  str_repeat(subject, repeat count) - " . str_repeat($third, 2);
  echo "<hr>";
  echo "Get substring:  substr(subject, start position, end position) - " . substr($third, 0, 2);
  echo "<hr>";
  echo "String position:  strpos(subject, string) - " . strpos($third, 'fox');
  echo "<hr>";
  echo "Finds the first instance of a character. Works similar to strstr():  strchr(haystack, needle) - " . strchr($third, 'o');
  echo "<hr>";
  ?>
</body>

</html>