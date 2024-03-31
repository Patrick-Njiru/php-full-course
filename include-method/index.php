<?php
include 'tools.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Include</title>
</head>

<body style="text-align: center;">
  <?php include 'header.php' ?>
  <?php
  $title = 'Explore Rooms';
  $description = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit';
  include 'heading-template.php'
  ?>
  <br>
  <form method="post">
    <input type="text" name="name" placeholder="add your name">
    <input type="submit" value="add">
  </form>
  <br>
  <?php echo sayHi() // from tools.php 
  ?>
  <?php include 'footer.php' ?>
</body>

</html>