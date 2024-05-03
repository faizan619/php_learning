<?php
$users = ["faizan","sajjad","ali","adil","abbas","ali"];
$user = ["name"=>"anil","age"=>30,"email"=>"abc@test.com"];
// if(is_array(($users))){
//     echo "it is an array";
// }
// else{
//     echo "it is not an array";
// }


// echo count($users);

// unset($users[1]);
// array_push($users,"nahi batana");
array_pop($users);

// print_r($users);
    
echo "<hr/>";
// print_r(array_keys($user));

// echo implode("<br/>",$users);

$str = "hello how are you faizan alam";
print_r(explode(" ",$str));

$data = array_merge($user,$users);
echo "<br/>";
print_r($data);
$users = ["faizan","sajjad","ali","adil","abbas","ali"];
$data = array_unique($users);
echo "<br/>";
print_r($data);


?>