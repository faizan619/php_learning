<?php 
echo "<br/>";
echo "Multidimensional Array in PHP";
echo "<hr/>";

$users = [
    [1,"faizan","full stack","royal","javascript"],
    [2,"salman","backend","royal","django"],
    [3,"adnan","student","royal","computer science"],
    [4,"aneeza","android","royal","java"]
];

for($i=0;$i<count($users);$i++){
    // print_r($users[$i]);
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo "<br/>";
    }
}

echo "<pre>";
print_r($users);
echo "</pre>";

?>