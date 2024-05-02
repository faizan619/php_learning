<?php
echo "<body style='margin:0;padding:0;height:100vh;background-color:black;color:white'>";
echo "<div style='padding:1rem'>";

echo "<center>Variable, Constant, and Data Types in PHP</center>";

echo "<hr/>";

echo "Question 1: Write a PHP program that declares and initializes variables of different data types
(integer, float, string, boolean) and displays their values.";
$str = "faizan";
$num = 24;
$float = 24.54;
$bol = true;
$nul = null;
$arr = ['faizan','alam','science','royal','college'];
echo "<br/>";
echo "<br/>";
echo "value of string : $str";
echo "<br/>";
echo "Value of Number : $num";
echo "<br/>";
echo "Value of Float : $float";
echo "<br/>";
echo "Value of Bolean : $bol";
echo "<br/>";
echo "Value of Null : $nul";
echo "<br/>";
echo "Value of Arrays : ";
foreach($arr as $a){
    echo "$a";
    echo " , ";
}

echo "<hr/>";




echo "Question 2: Develop a PHP program that calculates the area of a triangle using length and width values";
echo "<br/>";
echo "<br/>";
$length = 10;
$breath = 15;
echo "Length : $length  | Breath : $breath";
echo "<br/>";
echo "Area Of Traingle : 1/2 * length * breath";
echo "<br/>";
echo "Area Of Traingle : 1/2 * $length * $breath";
echo "<br/>";
$res = 0.5*$length*$breath;
echo "Area of Traingle : $res";
echo "<hr/>";




echo "Question 3: Write a PHP program that checks if a given variable is of type string. If it is, echo 'Variable is a string' otherwise, echo 'Variable is not a string'.";
echo "<br/>";
echo "<br/>";
$var = "I am Variable";
// $var = 10;
echo is_string($var) ? "Variable is a stirng" :"Variable is not a string";
// echo is_string($var);

echo "<hr/>";




echo "Question 4: Write a PHP function that checks if a given variable is a number";
echo "<br/>";
echo "<br/>";
$int = 10;
echo is_int($int) ? "It is a Integer" : "it is not an integer";
echo "<hr/>";


echo "Question 5: Develop a PHP program that calculates the average of three numbers using variables and displays the result.";
echo "<br/>";
echo "<br/>";
$var1 = 10;
$var2 = 15;
$var3 = 20;
echo "Variable 1: $var1 <br/>";
echo "Variable 2: $var2 <br/>";
echo "Variable 3: $var3 <br/>";
$sum = $var1+$var2+$var3;
$avg = $sum/3;
echo "Avarage : $sum/3 <br/>";
echo "Average of three variable : $avg";
echo "<hr/>";



echo "Question 6: Write a PHP function that checks if a given variable is empty.";
echo "<br/>";
echo "<br/>";
$emp = "";
echo is_null($emp) ? "It is a Null":(is_string($emp)? "It is a String":(is_int($emp)? "it is Integer":"it is Empty Value"));
echo "<hr/>";



echo "Question 7: Create a PHP program that defines a constant representing the number of days in a week and uses this constant to calculate the number of seconds in a week.";
echo "<br/>";
echo "<br/>";
const days = 7;
echo "Number of Days in a Week : ".days;
echo "<br/>";
$second = 1;
$min = 60 * $second;
$hour = 60 * $min;
$day = 24 * $hour;
$week = 7 * $day;
$month = 4 * $week;
echo "Number of Second in a Week : $week <br/>";
echo "Number of Second in a Month i.e 4 weeks : $month";



echo "<hr/>";
echo "Question 7: Develop a PHP program that calculates the area of a circle using the radius provided by
the user and the value of pi as a constant.";
echo "<br/>";
echo "<br/>";
$pi = 3.14;
$radius = 5;
echo "Pi : $pi <br/>";
echo "Radius : $radius <br/>";
echo "Area of Circle : ".$pi*$radius*$radius;

























echo "</div>";
echo "</body>";
?>