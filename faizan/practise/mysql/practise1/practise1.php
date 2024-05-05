<?php
require("./config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession</title>
</head>

<body>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center">
        <h1>
            <center>Confession WebApp</center>
        </h1>
        <form style="display:flex;flex-direction:column;background-color:black;color:white;width:50%;padding:1rem 2rem;border-radius:1rem;font-size:1.2rem" method="post">
            <label>
                <p>Name:</p>
                <input type="text" name="name" placeholder="john doe" style="width:100%;padding:.5rem .2rem" autofocus>
            </label>
            <label>
                <p>Message:</p>
                <textarea type="text" name="msg" placeholder="This is my first Confess" style="width:100%;padding:.5rem .2rem;height:6rem"></textarea>
            </label>
            
            <p>Gender</p>
            <div style="display:flex;justify-content:space-around;font-size:1.2rem">
                <label>
                    <input type="radio" value="male" name="gender">
                    <span>Male</span>
                </label>

                <label>
                    <input type="radio" value="female" name="gender">
                    <span>Female</span>
                </label>
            </div>
            <br>
            <button name="submit" style="padding:.5rem 0">Submit</button>
        </form>
    </div>
</body>
</html>

<?php 

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $confess = $_POST["msg"];
    $gender = $_POST["gender"];
    $confession = $conn->prepare("
    INSERT INTO `confession` (`id`,`name`,`confess`,`gender`,`date`) VALUES (NULL,'$name','$confess','$gender',current_timestamp())
    ");
    $result = $confession->execute();
    if($result){
        echo "Confession Posted!";
    }
    else{
        echo "Failed to Post! Server Error!";
    }
}


?>



<?php

$getConfesion = $conn->prepare("SELECT * FROM confession");
$getConfesion->execute();

$confess = $getConfesion->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($confess);
// echo "</pre>";



echo "<div style='width=100vw;margin-top:1rem;display:flex;align-items:center;justify-content:center;'><table border='1'>";
echo "<thead>
    <tr style='background-color:black;color:white;'>
        <td>Name</td>
        <td>Confession</td>
        <td>Gender</td>
        <td>Date</td>
    </tr>
</thead>";
foreach ($confess as $value) {
    echo "<tbody><tr>
        <td>" . $value['name'] . "</td>
        <td>" . $value['confess'] . "</td>
        <td>" . $value['gender'] . "</td>
        <td>" . $value['date'] . "</td>
        </tbody></tr>";
}
echo "</table></div>";


?>