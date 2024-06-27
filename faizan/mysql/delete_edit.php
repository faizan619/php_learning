<?php 

include("./config.php");
// $students = $conn->prepare("delete from students where id = '25'");
// if($students->execute()){
//     echo "Record deleted Successfully";
// }
// else{
//     echo "no delete";
// }
$students = $conn->prepare("SELECT * FROM students");
if($students->execute()){
    echo "Record Fetch Successfully!";
}
else{
    echo "Unable to fetch the records!";
}
$results = $students->fetchAll();
echo "<table border='1'>";
echo "<p>Hello World!</p>";
foreach($students as $student){
    echo "<tr>".$student['name']."</tr>
    <tr>".$student['course']."</tr>
    <tr>".$student['batch']."</tr>
    <tr>".$student['city']."</tr>
    <tr>".$student['year']."</tr>";
}
echo "</table>";

?>