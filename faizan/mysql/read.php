<?php

include("./config.php");
$getStudent = $conn->prepare("SELECT * FROM students");
$getStudent->execute();
$student = $getStudent->fetchAll();

echo "<table border='1'>";
echo "<thead>
    <tr style='background-color:black;color:white;'>
        <td>Sr.No</td>
        <td>Name</td>
        <td>Course</td>
        <td>Batch</td>
        <td>City</td>
        <td>Year</td>
    </tr>
</thead>";
foreach ($student as $row) {
    echo "<tbody><tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['course'] . "</td>
        <td>" . $row['batch'] . "</td>
        <td>" . $row['city'] . "</td>
        <td>" . $row['year'] . "</td>
        </tbody></tr>";
}
echo "</table>";
