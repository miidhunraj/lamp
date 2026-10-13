<?php
date_default_timezone_set('Asia/Kolkata');

$time=date('G:i');
echo"current time is: $time<br>";

$a=date('G');

if($a>=0&& $a<=5)
    echo "It's Late Night";
else if($a>=6 && $a<=11)
    echo "Good Morning";
else if($a>=12 && $a<=16)
    echo "Good Afternoon";
else if($a>=17 && $a<=23)
    echo "Good Evening";
echo"<br>";

$date = date('d-m-Y');
echo "Today's Date is $date<br>";

$b=date('l');
echo"Today is $b<br>";
?>
