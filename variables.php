<?php
// Variables are containers that store values which can be changed
// Naming Rules
/*
must start with $
followed by letter or underscore
can contain letters, numbers, underscores, or dashes
no spaces
case sensitive
can use whatever naming convention you prefer except kebab ($my-name), train case (My-Name)
*/
$item = 'pen';
$Item = 'book';

$camelCase = 1;
$PascalCase = 4;
$snake_case = 2;
$camel_Snake_Case = 3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>

<body>

</body>
<h1><?php echo '$item = ' . $item ?></h1>
<h1><?php echo '$Item = ' . $Item ?></h1>
<h1><?php echo '$camelCase = ' . $camelCase ?></h1>
<h1><?php echo '$PascalCase = ' . $PascalCase ?></h1>
<h1><?php echo '$snake_case = ' . $snake_case ?></h1>
<h1><?php echo '$camel_Snake_Case = ' . $camel_Snake_Case ?></h1>

</html>