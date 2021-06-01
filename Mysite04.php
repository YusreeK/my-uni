<html>
 <head>
<title>My Site 04</title>
<script>
function showTime(){
    var time = newDate()
    var hour = time.

    getHours()
    var minute = time.

    getMinutes()
    var sMin = (minute<10)?"0" + minute : minute var second = time.

    getSeconds()
    var sSecs = (second<10)?"0"+ second : second var strTime = hour + ":" + sMin + ":" +SSecs document.

    getElementById
    ("clockFace").
    innerHTML = strTime;
}


</script>
<BODY bgcolor ="#<?php
 echo(dechex(rand(0,255)).
 dechex(rand(0,255)).
 dechex(rand(0,255)));?>"
 onload="setInterval(showTime, 1000)">
 </head>

 


 
 <h1>Welcome Yusree!</h1>

 <body>
 





 
 <?php
// set the default time zone
date_default_timezone_set ('Africa/Cape_Town');
// use the echo function to write the string
// Today's date
echo "Today is ";
echo date ("d F, Y");
echo " ";
?>

<span id="clockFace"><?php
 // echo a space before the current time
echo date ("G:i:s");
?></span>
 </body>
 <p>Wawasan Open University is Malaysia's first private,not-for-profit, open learning institution, a 
 lifelong learning community without borders. We use flexible approaches to make higher education
 </p>
<br>
<span style="font-size:x-small">The site is developed by <a href="mailto:fireace.yk@gmail.com">Yusree</a> 
</html>  