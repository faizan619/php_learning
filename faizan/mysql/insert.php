<form action="" method="post">
    <input type="text" placeholder="Enter Name" name="name" autofocus>
    <br>
    <br>
    <input type="text" placeholder="Enter Course" name="course">
    <br>
    <br>
    <input type="text" placeholder="Enter Batch" name="batch">
    <br>
    <br>
    <input type="text" placeholder="Enter city" name="city">
    <br>
    <br>
    <input type="text" placeholder="Enter Year" name="year">
    <br>
    <br>
    <button name="btn">Add New Student</button>

</form>


<?php 

if(isset($_POST["btn"])){
    $name=$_POST['name'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    $city=$_POST['city'];
    $year=$_POST['year'];
    include("./config.php");
    $student= $conn->prepare("
    INSERT INTO `students` (`id`,`name`,`course`,`batch`,`city`,`year`) VALUES (NULL,'$name','$course','$batch','$city','$year')
    ");
    $result = $student->execute();
    if($result){
        echo "<br/>Data Inserted Successfully<br/>";
    }
    else{
        echo "<br/>Error While Inserting Data!";
    }
}



// include("./config.php");
// $student= $conn->prepare("
// INSERT INTO `students` (`id`,`name`,`course`,`batch`,`city`,`year`) VALUES (NULL,'tauxif','computer science','morning','lodha','3rd year')
// ");
// $result = $student->execute();
// if($result){
//     echo "<br/>Data Inserted Successfully<br/>";
// }
// else{
//     echo "<br/>Error While Inserting Data!";
// }

?>