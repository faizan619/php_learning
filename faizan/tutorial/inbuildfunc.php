<?php
echo "Inbuild function in PHP!";

echo "<br/>";
$str="faizan alam";

// use to find the length of the word
echo strlen($str);
echo "<br/>";

$var=true;
// use to find the data type of the variable
var_dump($var);
echo "<br/>";

// date function in php
echo date("d");

$var = "abc";
echo "<br/>";
echo is_string($var);

$var1 = 123;
echo "<br/>";
echo is_int($var1);

echo "<br/>";
// use to create random number
echo rand();


echo "<br/>";
echo "<br/>";
echo "die and exit function!";
echo "before runing";
// die();
// exit();
//before code will not run due to die and exit function;
echo "after running";

echo "<br/>";
echo "<br/>";
$fulname = "faizan sajjad alam moinuddin shaikh";
// after 5 char it will show 
echo substr($fulname,5)

?>