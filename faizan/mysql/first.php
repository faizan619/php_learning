<?php 
// connect with mysql using mysqli method
// $host = "localhost";
// $userName = "root";
// $password = null;
// $database = "college";

// $conn = new mysqli($host, $userName, $password, $database);
// if($conn->connect_error){
//     die("some error". $conn->$connect_error);
// }

// echo "connection successfully";
// echo "<br/>";
// $result = $conn->query("show tables")->fetch_all();
// print_r($result);

?>
<?php 
// connect with mysql using PDO method
$host = "localhost";
$userName = "root";
$password = null;
// $database = "college";
try{
    $conn = new PDO("mysql:host=$host;dbname=college",$userName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect done";
}catch(PDOException $err){
    echo "connect failed". $err->getMessage();
}
echo "<br/>";
$result = $conn->query("show tables");
while($row = $result->fetch(PDO::FETCH_NUM)){

    print_r($row);
}


?>