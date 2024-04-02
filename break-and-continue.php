<?php
// Continue
for ($i = 0; $i < 10; $i++) {
  // all numbers are printed except 4
  if ($i === 4) continue;
  //  echo $i;
}

$i = 0;
// while loop has a fault in this regard, the first three values 0-3 will be printed but at $i=4, the continue command will keep the $i at 4 and the while loop will continue indefinitely
// while($i<10) {
  // if($i === 4) continue;
//   echo $i;
//   $i+=1;
// }

// you can continue and break a nested list
for ($i = 0; $i < 10; $i++) {
//   echo '<hr>';
  for ($j = 0; $j < 10; $j++) {
    if ($j == 5) continue; // this will skip the inner for-loop at the point where $j = 5
//     echo $i . ' - ' . $j . '<br><br>';
  }
}

for ($i = 0; $i < 10; $i++) {
//   echo '<hr>';
  for ($j = 0; $j < 10; $j++) {
    if ($j == 5) continue (2); // this will skip the two for-loops at the point where $j = 5
//     echo $i . ' - ' . $j . '<br><br>';
  }
}

for ($i = 0; $i < 10; $i++) {
//   echo '<hr>';
  for ($j = 0; $j < 10; $j++) {
    if ($j == 5) break; // this will stop the inner for-loops at the point where $j = 5
//     echo $i . ' - ' . $j . '<br><br>';
  }
}

for ($i = 0; $i < 10; $i++) {
  // echo '<hr>';
  for ($j = 0; $j < 10; $j++) {
    if ($j == 5) break (2); // this will stop the two for-loops at the point where $j = 5
//     echo $i . ' - ' . $j . '<br><br>';
  }
}
