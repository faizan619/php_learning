<?php
// echo "Go To Statement in PHP";
// echo "<hr/>";
// $x = 10;
// echo "before condition";
// echo "<br/>";

// if($x==20){
//     echo $x;
//     echo "<br/>";
//     goto jump;
// }

// $name = "faizan";
// echo $name;
// echo "<br/>";



// jump:
// echo "statement is jumped on line 18";

?>

<?php
echo "Practise of Goto!";
echo "<hr/>";

bye:
echo "this is bye!";
goto ok;

$num=10;
if($num==10){
    goto hello;
}

hello:
echo "This statement is after hello!";
goto bye;

ok:
echo "this is ok";
?>