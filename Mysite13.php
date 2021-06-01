<html>
 
<?php


function SumNumbers($var1 = 0, $var2 = 0, $var3 = 0)
{
    $total = $var1 + $var2 + $var3;
    return $total;
}
//Call the function and print the result
$sum = SumNumbers(23, 24, 25);
echo "The sum of 23 + 24 + 25 = {$sum}";


?>