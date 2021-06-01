<?php

$total = $tax + $qauntity * 8;
$total = $tax + ($qauntity * 8);

$a = 2 * 4 / 2 * 5;        // Equals 20
$a = (((2 * 4) / 2) * 5);  // Also equals 20
$a = (2 * (4 / (2 * 5)));  // Equals 0.8

echo $a;

include() //genrates a warning if it canoot find a file
require() //generates an error if it cannot find a  file

?>
