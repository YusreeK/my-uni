<html>
 
<?php

$amount = 10.00;
$tax = 0.05;
function NewTaxAmount($amount ,$tax=0.06)
{
    // Change the $amount variable
    $amount += $amount * $tax;
    echo "Total amount: $amount";
}
$amount = 10.00;
NewTaxAmount ($amount); //Total amount: 10.6


?>