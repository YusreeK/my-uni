<h1>
 <?php

 // Either one is acceptable
 // if-else statement
        date_default_timezone_set('Africa/Johannesburg');
    if ((date("G") >=5) AND (date("G")<= 11))
    echo "Good Morning";
    if ((date("G") >=12) AND (date("G")<= 17))
    echo "Good Afternoon";
    if ((date ("G")>= 18) OR (date ("G")<= 4))
    echo "Good Evening";
 ?>
  
</h1>  