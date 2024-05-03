<?php
echo date_default_timezone_get();
echo "<br/>";
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();
echo "<hr/>";
echo "Date and Time in PHP";
echo "<hr/>";

echo "Date";
echo "<br/>";
echo date("d m y");
echo "<hr/>";
echo date("D");
echo date("d");
echo "<br/>";
echo date("M");
echo date("m");
echo "<br/>";
echo date("Y");
echo date("y");
echo "<hr/>";
echo date("D M Y");



echo "<hr/>";
echo "Time";
echo "<br/>";
echo date("h"); //12 hour time
echo "<br/>";
echo date("H"); // 24 hour time
echo "<br/>";
echo date("h:i:s a");
echo "<br/>";
echo date("H:I:S A");



echo "<hr/>";
echo date("l");
echo "<br/>";
echo date('l jS \of F Y h:i:s A');
echo "<br/>";
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo $today;
echo "<br/>";

$today = date("m.d.y");                         // 03.10.01
echo $today;
echo "<br/>";
$today = date("j, n, Y");                       // 10, 3, 2001
echo $today;
echo "<br/>";
$today = date("Ymd");                           // 20010310
echo $today;
echo "<br/>";
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today;
echo "<br/>";
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today;
echo "<br/>";
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo $today;
echo "<br/>";
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo $today;
echo "<br/>";
$today = date("H:i:s");                         // 17:16:18
echo $today;
echo "<br/>";
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
echo $today;
echo "<br/>";
?>