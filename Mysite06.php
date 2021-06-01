<?php

class program            // Define a class 
{
    function do_work()
    {
        echo "An action";
    }
}

$instance = new program;  // Instantiate an object
$instance -> do_work;    //Output: An action

$var = "two four two";
$var = 242;

$var = (double)242; //$var = 242.0
$var = (int)2.8;    //$var = 2

$var = "242";   //Variable $var is assigned a string value
$a = $var + 1.1;//Addition of $var and a float value
echo $a;        //Output:243.1

?>

<?php
$a = 8;
$a++;
$sum = $value1 + $value2;

$a = 8;
echo $a++; //Output: 8
echo $a;   //Output: 9

$a = 8;
echo ++$a; //Output: 9
echo $a;   //Output: 9

$a = 8;
echo $a--; //Output: 8
echo $a;   //Output: 7

$a = 8;
echo $--a; //Output: 7
echo $a;   //Output: 7















?>