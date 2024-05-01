<?php
echo "Loops in PHP!";
?>

<?php
// echo "<hr/>";
// echo "For-Loops in PHP!";
// echo "<br/>";
// for ($start=0; $start < 10; $start++) { 
//     echo "The Value now is : $start";
//     echo "<br/>";
// }
// echo "<hr/>";
// $num = 9;
// echo "Multiplication Table of $num";
// echo "<br/>";
// for($i=1;$i<=10;$i++){
//     $res = $num*$i;
//     echo "$num * $i = $res";
// echo "<br/>";
// }

// echo "<hr/>";
?>

<?php
// echo "<hr/>";
// echo "Continue and Break Statement!";
// echo "<br/>";
// for($i=1;$i<=10;$i++){
//     if($i>=5){
//         echo "Continue $i";
//         echo "<br/>";
//         continue;
//     }
//     if($i==8){
//         echo "Break!";
//         echo "<br/>";
//         break;
//     }
//     echo $i;
//     echo "<br/>";
// }
?>

<?php
// echo "<hr/>";
// echo "Nested Loops in PHP";
// // echo "<br/>";
// // for ($i=0; $i <= 5; $i++) { 
// //     for ($j=0; $j < 5; $j++) { 
// //         echo $j;
// //     }
// //     echo "<br/>";
// // }
// echo "<br/>";
// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=5;$j++){
//         echo " * ";
//     }
//     echo "<br/>";
// }
?>

<?php
// echo "<hr/>";
// echo "While Loop in PHP!";
// echo "<br/>";
// $num1 = 1;
// while ($num1 <= 10) {
//     echo $num1;
//     $num1++;
//     echo "<br/>"; 
// }
// echo "<hr/>"; 
// $num2 = 10;
// while ($num2 >= 1) {
//     echo $num2;
//     $num2--;
//     echo "<br/>";
// }

?>

<?php
// echo "<hr/>";
// echo "Do While Loop in PHP!";
// echo "<br/>";
// $num = 0;
// do {
//     echo "Current Loop Value  is $num";
//     $num++;
//     echo "<br/>";
// } while ($num === 0);
?>

<?php

echo "Foreach loop in PHP!";
echo "<br/>";
$nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
foreach ($nums as $num) {
    echo "Current Number is : $num";
    echo "<br/>";
}
echo"<hr/>";
foreach ($nums as $num):
    echo $num;
    echo "<br/>";
endforeach

?>