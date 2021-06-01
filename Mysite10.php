<html>
 
<?php

$amount = 10.00;
$tax = 0.05;
function NewTaxAmount(&$amount ,$tax)
{
    // Change the $amount variable
    $amount += $amount * $tax;
    // Add 1% to $tax variable
    $tax += 0.01;
}
NewTaxAmount ($amount, $tax);
echo "Tax is $tax <br />";          // Tax is 0.05
echo "Amount is $$amount <br />";  // Amount is $10.5

?>

  
</html>  