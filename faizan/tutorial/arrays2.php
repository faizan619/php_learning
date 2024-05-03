
<?php

// echo "Showing Array Values in Table <br/>";
$users  = [
    [1, "faizan", "alamf@gmail.com"],
    [2, "Adnan", "adnan@gmail.com"],
    [3, "salman", "salman@gmail.com"],
    [4, "hasan", "hasan@gmail.com"]
];
// echo "<table style='border: 1px solid black;' border='1'>";
// echo "<tr><td>S.N</td>
// <td>Name</td>
// <td>Email</td></tr>";
// for ($i = 0; $i < count($users); $i++) {
//     echo "<tr>";
//     for ($j = 0; $j < count($users[$i]); $j++) {
//         echo "<td>".$users[$i][$j]."</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
?>


<?php 
// echo "<hr/>";
// echo "Multidimensional Associative Array!";
// echo "<br/>";
$users = [
    ["name"=>"faizan","age"=>21,"email"=>"alam@gmail.com"],
    ["name"=>"adnan","age"=>20,"email"=> "shaikh@gmail.com"],
    ["name"=>"asad","age"=>21,"email"=>"qureshi@gmail.com"],
    ["name"=>"ferhan","age"=>20,"email"=>"ansari@gmail.com"]
];
// echo $users[1]["name"];
// print_r($users);

// foreach($users as $user){
//     foreach($user as $key => $item){
//         echo $key." : ";
//         echo $item;
//         echo "<br/>";
//     }
//     echo "<br/>";
// }

?>


<?php 

echo "Remove and Add Elements in Arrays!";
echo "<hr/>";
$users = ["faizan","adnan","salman","maroof","ferhan","asad"];

echo "Array before Push <br/>";
print_r($users);
echo "<br/>";

// add the element at the last of the arrays.
array_push($users,"alam","shaikh","sayyed","baig","ansari","qureshi");
echo "<br/>";
echo "Arays after Push <br/>";
print_r($users);

echo "<br/>";
echo "<br/>";
echo "Array after pop <br/>";
array_pop($users);
// echo "<br/>";
print_r($users);


echo "<br/>";
echo "<br/>";
echo "Arrays after splice -2 <br/>";
//remove 2 item from 2 two elements.
array_splice($users,-2);
print_r($users);


?>