<?php
include("./config.php");
// $getStudent = $conn->prepare("SELECT * FROM students");
// $getStudent = $conn->prepare("SELECT name FROM students");
$getStudent = $conn->prepare("SELECT id,name FROM students");
$getStudent->execute();
$student = $getStudent->fetchAll();

echo "<br><select>";
echo "<option>Select Name</option>";
foreach ($student as $row) {
    echo "<option value=" . $row["name"] . ">" . $row["name"] . "</option>";
}
echo "</select>";

// echo "<pre>";
// print_r($student);
// echo "</pre>";

// DELETE FROM students WHERE `students`.`id` = 6"
// UPDATE `students` SET `name` = 'tofee' WHERE `students`.`id` = 6;
// UPDATE `students` SET `name` = 'tuchik', `batch` = 'evening', `city` = 'naya nagar', `year` = '2nd year' WHERE `students`.`id` = 6;


// for updating part 1 code
// include("./config.php");
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $student = $conn->prepare("select * form students where id='$id'");
//     $student->execute();
//     $student = $student->fetchAll();
//     $name = $student[0]['name'];
//     $course = $student[0]['course'];
//     $city = $student[0]['city'];
//     $year = $student[0]['year'];
// }
?>

<!-- if execute is treu do this -->
<!-- header('location:delete_edit.php) -->


<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name="name" />
    <br>
    <br>
    <input type="text" value="<?php echo $course ?>" name="course" />
    <br>
    <button value="<?php echo $id ?>" name="update">Update Student</button>

</form>