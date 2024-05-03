<?php 
// $path = "result";
// $items = scandir( $path );
// $items = array_diff( $items, array(".",".."));
// echo "<pre>";
// print_r( $items );
// echo "</pre>";
// foreach ( $items as $item ) {
//     echo "<br/><a href='./result/$item'>".$item."</a><br/>";
// }
?>


<?php

echo "handling JSON data in PHP";
echo "<hr/>";
$user = ["name"=>"faizan","age"=>30,"email"=>"faizan@gmail.com"];
$userJson = json_encode($user);
// print_r($user);
// echo "<hr/>";
// echo $userJson;


$data = '{"name":"faizan","age":30,"email":"faizan@gmail.com"}';
echo $data;
echo "<hr/>";
$dataArray = json_decode($data, true);
print_r($dataArray);
echo "<hr/>";
$dataArray = json_decode($data);
print_r($dataArray);

?>