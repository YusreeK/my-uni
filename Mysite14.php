<html>
 
<?php


function Divide($number ,$divider)
{
    if ($divider ==0) {
        //Checking to avoid division by 0.
        return false;
    }
    $result = $number/$divider;
    return $result;
}

?>