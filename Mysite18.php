<HTML>
<head>
    <title>My Site 18</title>
</head>
<body>
<pre>
<form name="registration_form" method="post" action="MySite18-register.php">
Name:                <input type="text" name="Name"><br />
Email:               <input type="text" name="Email"><br />
Password:            <input type="password" name="password"><br />
Confirm Password:    <input type="password" name="password2"><br />
Mobile Phone Number: <input type="text" name="phone"><br />
<input type="submit" value="Register">
</form>
</pre>
<?php
//Trim whitespace of all items
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password2 = trim($_POST['password2']);
$password = trim($_POST['phone']);

// Make sure string length of name is > 6
if (strlen($name) < 6)
{
    echo "Invalid name";
    exit;
}

// Substring email as username
$symbolsPos = strpos($email, "@");
if ($symbolsPos == FALSE)
{
    echo "Invalid email";
    exit;
}
$username = substr($email, 0, $symbolsPos);

// Compare if two passwords are the same
if (strcmp ( $password , $password2 ) !=0)
{
    echo "Invalid passwords";
    exit;
}


// Make sure string length of phone is 12
if (strlen($phone) != 12)
{
    echo "Invalid Mobile number";
    exit;
}

// Replace 0789041287 with 27789041287
$intmobile = substr_replace($phone, "(27)", 0, 2);
$part1 = substr($intmobile, 0, 7);
$part2 = substr($intmobile, 7);
$part1 = $part1 . "-";
$intmobile = $part1 . $part2;

// logging
writeLog("**Log registration details**<br />");
writeLog("Name: ".$name."<br />");
writeLog("Email: ".$email."<br />");
writeLog("Password: ".$password."<br />");
writeLog("Username: ".$Username."<br />");
writeLog("International mobile: ".$intmobile."<br />");

echo file_get_contents('register.log');

function writeLog($message)
{
    date_default_timezone_set('Africa/Cape_Town');

    $date = date("d F, Y");
    $time = date("G:i:s");

    $handle = fopen('register.log', 'a');
    $content = $date. ','.$time.' '.$message;
    fwrite($handle, $content);
    fclose($handle);
}    
?>
</body>
</HTML>