<?php
echo "Operators in PHP!";
echo "<hr/>";
?>
<?php
echo "<div style='display:none'>";
echo "<h3>Arithimatic Operators!</h3>";
$num1 = 2;
$num2 = 4;
echo "<div style='background-color:black;color:white;padding:1rem;border-radius:.5rem;'>";
echo "<div style='background-color:red;padding:.5rem'>";
echo "Num1  : $num1 <br/>";
echo "Num2  : $num2 <br/>";
echo "</div>";
echo "<br/>";
echo "<div style='background-color:blue;border:1px solid white;padding:1rem .5rem;border-radius:1rem'>";
echo "Additon : ";
echo $num1 + $num2;
echo "</div>";
echo "<br/>";
echo "<div style='background-color:blue;border:1px solid white;padding:1rem .5rem;border-radius:1rem'>";
echo "Subtraction : ";
echo $num1 - $num2;
echo "</div>";
echo "<br/>";
echo "<div style='background-color:blue;border:1px solid white;padding:1rem .5rem;border-radius:1rem'>";
echo "Multiplication :";
echo $num1 * $num2;
echo "</div>";
echo "<br/>";
echo "<div style='background-color:blue;border:1px solid white;padding:1rem .5rem;border-radius:1rem'>";
echo "Division : ";
echo $num1 / $num2;
echo "</div>";
echo "<br/>";
echo "<div style='background-color:blue;border:1px solid white;padding:1rem .5rem;border-radius:1rem'>";
echo "power : ";
echo $num1 ** $num2;
echo "</div>";
echo "<br/>";
echo "<div style='background-color:blue;border:1px solid white;padding:1rem .5rem;border-radius:1rem'>";
echo "Modulo : ";
echo $num1 % $num2;
echo "</div>";
echo "</div>";
echo "</div>";
?>
<?php
echo "<div style='display:none'>";
echo "<h3>Assignment Operators!</h3>";
$var1 = "faizan";
$var2 = "college";
echo "<div style='background-color:black;color:white;padding:1rem;border-radius:.5rem;'>";
echo "<div style='background-color:red;padding:.5rem'>";
echo "String1 : $var1 <br/>";
echo "String2 : $var2 <br/>";
echo "</div>";
echo "<br/>";
/*
basic assignment ( = )
subtraction assignment ( -= )
addition assignment ( += )
division assignment ( /= )
multiplication assignment ( *= )
modulo assignment ( %= 
*/
$var1 = $var2;
echo "value of num1 : $var1";
echo "<br/>";
echo $num1;
echo "<br/>";
echo $num2;
$num1 -= $num2;
echo "<br/>";
echo $num1;
$num1 += $num2;
echo "<br/>";
echo $num1;
$num1 *= $num2;
echo "<br/>";
echo $num1;
$num1 /= $num2;
echo "<br/>";
echo $num1;
$num1 %= $num2;
echo "<br/>";
echo $num1;
echo "</div>";
echo "</div>";
?>

<?php
echo "<div contenteditable style='display:none'>";
echo "<h3>Assignment Operators!</h3>";
echo "<div style='background-color:black;color:white;padding:1rem;border-radius:.5rem;'>";
echo "Comparison Operators";
$str1 = "royal";
$str2 = "college";
echo "<br/>";
echo $str1 === $str2;
echo $str1 == $str2;
echo $str1 >= $str2;
echo $str1 <= $str2;
echo $str1 !== $str2;
echo "<br/>";
echo "Increment and Decrement!";echo "<br/>";
echo $num1;
echo "<br/>";
echo ++$num1;
echo "<br/>";
echo $num1++;
echo "<br/>";
echo $num1;
echo "<br/>";
echo $num2;
echo "<br/>";
echo ++$num2;
echo "<br/>";
echo $num2++;
echo "<br/>";
echo $num2;
echo "</div>";
echo "</div>";
?>

<?php
    echo "String Operators!";
    $strA = "faizan";
    $strB = "alam";
    echo "My Name is $strA";
    echo "<br/>";
    echo 'My sirname is $strB'; // this doesn't work as expected!
    echo "<br/>";
    echo 'My sirname is '.$strB;
    echo "<br/>";
    // echo $strA $strB;    // this doesn't work as expected!
    echo "<br/>";
    echo $strA.' '. $strB;
    
?>