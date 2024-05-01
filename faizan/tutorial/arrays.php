<?php
echo "Arrays In PHP!";

echo "<hr/>";
$users = ["faizan", 24, "royal", 3, "computer science "];
echo "<br/>";
// echo $users[0];
// echo "<br/>";
// echo $users[1];
// echo "<br/>";
// echo $users[2];
// echo "<br/>";
// echo $users[4];

// echo count($users);
// echo "<br/>";
// for($i=0;$i<count($users);$i++){
//     echo "<h1>".$users[$i]."</h1>";
//     echo "<br/>";
// }

?>

<?php
echo "Associative Arrays";
echo "<br/>";
$userDetails = ["name" => "faizan", "age" => 21, "role" => "full stack developer", "college" => "royal college"];

echo $userDetails["name"];
echo "<br/>";
echo $userDetails["age"];
echo "<br/>";
echo $userDetails["role"];

echo "<br/>";
echo "<hr/>";

// both give same output but key also give the key of the value

echo "<br/>";
echo "array with key and value";
echo "<br/>";
foreach($userDetails as $key => $data){
    echo $key;
    echo " : ";
    echo $data;
    echo "<br/>";
    
}

echo "<br/>";
echo "array with only value not key";
echo "<br/>";
foreach($userDetails as $data){
    echo $data;
    echo "<br/>";
}


?>