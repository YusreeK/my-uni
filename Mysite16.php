<html>
 <head>
<title>My Site 05</title>
 </head>
 <body>

 <?php include "header.php"; 
    $items = 5;
    $count = 1;
    while ($count <= $items)
    {
        printf("Espresso Roast Grade %d earns
        %d loyalty points <br />", $count, pow($count, 2));
                    $count++;
                    
    }
      
 
 ?>

<table border="1" width="50%">
<tr>
    <th>Coffee</th>
    <th>Cost</th>
    <th>Quantity</th>
    <th>Sub Total</th>
</tr>
<?php

$pricePerOz = 10.95;

$grandTotal = 0;
$totalPoints = 0;
for($i = 1; $i <= $items; $i++)

{
   // Part d. Uncomment below to display Espresso Roast Grade 4 and above 
   // if ($i <= 3)
      //continue;
   echo "<tr>";
   echo "<td>Espresso Roast Grade ". $i . "</td>";
   $price = $pricePerOz * $i;
   printf("<td>RM%.2f</td>", $price);
   $q = $items - $i + 1;
   $p = $q * pow($i, 2);
   echo "<td>". $q . "</td>";
   printf("<td>RM%.2f</td>", $subTotal);
   echo "</tr>";
}
echo "</table>";

printf("<p> Grand total: <strong>RM%.2f</
strong></p>", $grandTotal);
printf("Total points earned: %d", $$totalPoints);
?>
 </body>
 
  
</html>  