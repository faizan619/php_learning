<?php
echo "<body style='margin:0;padding:0;height:100vh;background-color:black;color:white'>";
echo "<div style='padding:1rem'>";

echo "<center>Conditional Statement and Loops in PHP</center>";

echo "<hr/>";
echo "Question 1: Write a PHP program that checks if a given number is positive, negative, or zero.";
echo "<br/>";
echo "<br/>";
$num = 10;
echo "Number : $num <br/>";
if($num<0){
    echo "It is a Negative Number";
}
elseif($num>0){
    echo "It is a Positive Number";
}
else{
    echo "It is zero";
}



echo "<hr/>";
echo "Question 2: Create a PHP program that determines the largest of three numbers";
echo "<br/>";
echo "<br/>";
$num1 = 10;
$num2 = 20;
$num3 = 5;
echo "Num1 : $num1 <br/>";
echo "Num2 : $num2 <br/>";
echo "Num3 : $num3 <br/>";
if($num1>$num2 && $num1>$num3){
    echo "num1 value is greater among all other values";
    echo "<br/>";
}
elseif($num1<$num2 && $num2>$num3){
    echo "num2 value is greater among all other values";
    echo "<br/>";
}
else{
    echo "num3 value is greater among all other values";
    echo "<br/>";
}




echo "<hr/>";
echo "Question 3: Write a PHP function that checks if a given number is divisible by 3 and 5.";
echo "<br/>";
$num = 32;
$num = 15;
echo "Number :  $num";
echo "<br/>";
if(($num%3 && $num%5) == 0){
    echo "Given Number is Divisible by both 3 and 5";
}
else{
    echo "Given number is not divisible by 3 and 5";
}



echo "<hr/>";
echo "Question 4: Write a PHP function that checks if a given string starts with g.";
echo "<br/>";
echo "<br/>";
$str = "faizan";
echo "String : $str <br/>";
if(str_starts_with($str,"g")){
    echo "Given String start with g";
}else{
    echo "It doesn't start with g";
}



echo "<hr/>";
echo "Question 5: Develop a PHP program that displays all even numbers between 1 and 50 using a for loop.";
echo "<br/>";
echo "<br/>";
echo "Even Number from 1 - 50 : ";
for($i=1;$i<=50;$i++){
    if($i%2!==0){
        continue;
    }
    echo " ".$i." ";
}


echo "<hr/>";
echo "Question 6: Create a PHP program that generates a pattern using nested for loops";
echo "<br/>";
echo "<br/>";
for($i=0;$i<=5;$i++){
    for($j=0;$j<=5;$j++){
        echo " * ";
    }
    echo "<br/>";
}





echo "<hr/>";
echo "Question 7: Create a PHP program that prints the multiplication table of a given number using a do-while loop.";
echo "<br/>";
echo "<br/>";
$num = 8;
echo "Multiplication Table of $num";
echo "<br/>";
for($i=1;$i<=10;$i++){
    echo "$num x $i = ".$num*$i;
    echo "<br/>";
}
 



echo "<hr/>";       
echo "Question 8: Develop a PHP program that calculates the sum of all even numbers between 1 and 100 using a for loop.";
echo "<br/>";
echo "<br/>";
$a = 0;
// echo "Sum + Even : Total <br/>";
for($i=1;$i<=100;$i++){
    if($i%2!== 0){
        continue;
    }
    // echo "$a + $i";
    $a = $a+$i;
    // echo " : ".$a."<br/>";
}
echo "The Sum of All Even Number from 1-100 : ".$a;























echo "</div>";
echo "</body>";
?>