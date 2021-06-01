<html>
 
<?php


function InterestPayment($amount, $interest, $years)
{
    if ($years > 0) {
        echo $amount;
        echo "<br />";
        $amount = $amount + $amount * $interest;
        return(InterestPayment($amount, $interest, $years-1));
        // Here the function calls itself
    }
        return ($amount);
}
// Apply the function
echo InterestPayment (100, 0.18, 10);
// Output:
// 100 (At year 0)
// 118 ( At year 1, 100 + 100 * 18%)
// 139.24 (At year 2, 118 + 118 * 18%)
// 164.3032 (At year 3, 139.24 + 139.24 * 18%)
// 193.877776 ...
// 228.77577568 ...
// 269.9554153024 ...
// 318.54739005683 ...
// 375.88592026706 ...
// 443.54538591513 ...
// 523.38355537986 (Final payment at year 10)




?>











