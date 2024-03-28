<?php
// integers
$var1 = 3;
$var2 = 4;
// floating point numbers
$var3 = 5.67;
$var4 = 5.27;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numbers</title>
</head>

<body>
  <p> Basic Math: ((1 + 2 + $var1) * $var2) / 2 - 5 = <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5 ?> </p>
  <h3>Inbuilt Functions</h3>
  <ol>
    <li>Absolute value: abs(0 - 250) = <?php echo abs(0 - 250) ?></li>
    <li>Exponential: pow(2, 3) or 2**3 = <?php echo pow(2, 3) ?></li>
    <li>Square root: sqrt(100) = <?php echo sqrt(100) ?></li>
    <li>Modulo: fmod(14, 3) = <?php echo fmod(14, 3) ?></li>
    <li>Random: rand() = <?php echo rand() ?></li>
    <li>Random no in a given range (min, max): rand(1, 10) = <?php echo rand(1, 10) ?></li>
    <li>$var1 += 2 = <?php echo $var1 += 2 ?></li>
    <li>$var1 -= 2 = <?php echo $var1 -= 2 ?></li>
    <li>$var1 *= 3 = <?php echo $var1 *= 3 ?></li>
    <li>$var1 /= 2 = <?php echo $var1 /= 2 ?></li>
    <li>Increment by 1: $var1++ = <?php $var1++;
                                  echo $var1; ?></li>
    <li>Decrement by 1: $var1-- = <?php $var1--;
                                  echo $var1; ?></li>
    <li>
      <p>php converts a number in form of a string to a number type for number operations:</p>
      <ul>
        <li>1 + "1" = <?php echo 1 + '1' ?></li>
        <li>4 - "1" = <?php echo 4 + '1' ?></li>
        <li>2*"3" = <?php echo 2 * '3' ?></li>
        <li>2**"3" = <?php echo 2 ** '3' ?></li>
        <li>9/"3" = <?php echo 9 / '3' ?></li>
      </ul>
      <p>This is not encouraged since php will sometimes cause errors as shown below</p>
      <p> "1 man" + "4 dogs" = <?php echo '1 man' + '4 dogs' ?></p>
      <p>Even if it displays a warning, it still returns the results.</p>
    </li>
  </ol>

  <h2>Floating Point Numbers</h2>
  <ol>
    <li>
      Round: round(5.67) = <?php echo round($var3)  ?>
      <br>
      Round: round(5.27) = <?php echo round($var4)  ?>
    </li>
    <li>
      Ceil: ceil(5.67) = <?php echo ceil($var3)  ?>
      <br>
      Ceil: ceil(5.27) = <?php echo ceil($var4)  ?>
    </li>
    <li>
      Floor: floor(5.67) = <?php echo floor($var3)  ?>
      <br>
      Floor: floor(5.27) = <?php echo floor($var4)  ?>
    </li>
    <li>Is 5 an interger ? <?php echo is_int(5) == 1 ? 'yes' : 'no' ?></li>
    <li>Is 5.57 an interger ? <?php echo is_int(5.57) == 1 ? 'yes' : 'no' ?></li>
    <li>Is 5 a float ? <?php echo is_float(5) == 1 ? 'yes' : 'no' ?></li>
    <li>Is 5.57 a float ? <?php echo is_float(5.57) == 1 ? 'yes' : 'no' ?></li>
    <li>Is 5 numeric ? <?php echo is_numeric(5.57) == 1 ? 'yes' : 'no' ?></li>
    <li>Is 5.57 numeric ? <?php echo is_numeric(5.57) == 1 ? 'yes' : 'no' ?></li>
    <li>Is '4p' numeric ? <?php echo is_numeric('4p') == 1 ? 'yes' : 'no' ?></li>
    <li>Is '4' numeric ? <?php echo is_numeric('4') == 1 ? 'yes' : 'no' ?></li>
  </ol>

</body>

</html>