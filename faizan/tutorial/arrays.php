<?php
echo "Arrays In PHP!";

$users = ["faizan",24,"royal",3,"computer science "];
echo "<br/>";
// echo $users[0];
// echo "<br/>";
// echo $users[1];
// echo "<br/>";
// echo $users[2];
// echo "<br/>";
// echo $users[4];

echo count($users);
echo "<br/>";
for($i=0;$i<count($users);$i++){
    echo "<h1>".$users[$i]."</h1>";
    echo "<br/>";
}

?>