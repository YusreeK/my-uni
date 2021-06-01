<html>
 <head>
<title>My Site 05</title>
 </head>
 
 <body>
 <h1>
 <?php

 // Either one is acceptable
 // if-else statement

        date_default_timezone_set('Africa/Johannesburg');

    if ((date("G") >=5) AND (date("G")<= 11))
    echo "Good Morning ";

    if ((date("G") >=12) AND (date("G")<= 17))
    echo "Good Afternoon ";

    if ((date ("G")>= 18) OR (date ("G")<= 4))
    echo "Good Evening ";


// switch statement
        switch (date ("G"))
        {
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:

        echo "Good Morning,";
                    break;
            
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:

        echo "Good Afternoon,";
                    break;

            case 18:
            case 19:
            case 20:
            case 21:
            case 22:
            case 23:
            case 24:
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:

        echo "Good Evening,";
        break;
    default:
        echo "Good Day";
        break;
        
        }

        
 ?>

</h1>
        </body>
  
</html>  