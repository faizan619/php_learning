<?php
echo "Logical Operator!";
$age=18;
$class=10;
$school="royal";
echo "<br/>";
if($age>20 && $class>9 || $school==="royal"){
    echo "You are Eligible!";
}
elseif($age>=18 && $school==="baneghar"){
    echo "Please give your IDcard Detials";
}
else{
    echo"No Entry Alloowed";
}


?>