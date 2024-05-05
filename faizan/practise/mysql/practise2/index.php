<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuniTrack</title>
</head>

<body>
    <div style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
        <h1>MuniTrack</h1>
        <p>Feeling InSecure! Enter your issue and we will look after that!</p>
        <form method="post" style="display:flex;flex-direction:column;gap:1rem;width:75%">
            <input style="padding: .5rem .2rem;" type="text" name="name" placeholder="Enter Name" autofocus>
            <input style="padding: .5rem .2rem;" type="text" name="issue" placeholder="Enter Issue">
            <div style="display:flex;justify-content:space-around">
                <label>
                    <input type="radio" name="gender" value="male"><span>Male</span>
                </label>
                <label>
                    <input type="radio" name="gender" value="female"><span>Female</span>
                </label>
            </div>
            <input style="padding: .5rem .2rem;" type="number" name="age" placeholder="Enter Age">
            <input style="padding: .5rem .2rem;" type="text" name="city" placeholder="Enter City">
            <button name="submit" style="padding:.5rem 0;background-color:green;color:white;border:none;border-radius:.5rem">Submit</button>
        </form>
    </div>
</body>

</html>

<?php

date_default_timezone_set("Asia/Kolkata");

if (isset($_POST["submit"])) {
    if (($_POST["name"] && $_POST["issue"] && $_POST["gender"] && $_POST["age"] && $_POST["city"])) {
        $name = $_POST["name"];
        $issue = $_POST["issue"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $city = $_POST["city"];
        $time = date("h:i:s a");

        $getIssue = $conn->prepare("
        INSERT INTO `problem` (`id`,`name`,`issue`,`gender`,`age`,`city`,`time`,`date`) VALUES (NULL,'$name','$issue','$gender','$age','$city','$time',current_timestamp())
        ");
        $result = $getIssue->execute();
        if ($result) {
            echo "Issue is Posted";
        } else {
            die("Problem in connecting with server");
        }
    } else {
        echo "<center style='color:red;text-decoration:underline'>Enter All the Details</center>";
    }
}

?>

<?php

$getIssue = $conn->prepare("SELECT * FROM problem");
$getIssue->execute();

$view = $getIssue->fetchAll(PDO::FETCH_ASSOC);
echo "<div style='width=100vw;margin-top:1rem;display:flex;flex-direction:column;align-items:center;justify-content:center;'><h1>View Your Issues</h1><table border='1'>";
echo "<thead>
    <tr style='background-color:black;color:white;'>
        <td style='padding:.5rem .3rem'>Name</td>
        <td style='padding:.5rem .3rem'>Issue</td>
        <td style='padding:.5rem .3rem'>Gender</td>
        <td style='padding:.5rem .3rem'>age</td>
        <td style='padding:.5rem .3rem'>city</td>
        <td style='padding:.5rem .3rem'>time</td>
        <td style='padding:.5rem .3rem'>Date</td>
        <td style='padding:.5rem .3rem'>Delete</td>
        <td style='padding:.5rem .3rem'>Edit</td>
    </tr>
</thead>";
foreach ($view as $value) {
    echo "<tbody><tr>
        <td style='padding:.5rem .3rem'>" . $value['name'] . "</td>
        <td style='padding:.5rem .3rem'>" . $value['issue'] . "</td>
        <td style='padding:.5rem .3rem'>" . $value['gender'] . "</td>
        <td style='padding:.5rem .3rem'>" . $value['age'] . "</td>
        <td style='padding:.5rem .3rem'>" . $value['city'] . "</td>
        <td style='padding:.5rem .3rem'>" . $value['time'] . "</td>
        <td style='padding:.5rem .3rem'>" . $value['date'] . "</td>
        <td style='padding:.5rem .3rem'>" . "<button style='background-color:red;color:white;padding:.5rem .2rem' name='delete'>Delete</button>" . "</td>

        <td style='padding:.5rem .3rem'>" . "<button style='background-color:red;color:white;padding:.5rem .2rem'>Edit</button>" . "</td>
        </tbody></tr>";
}
echo "</table></div>";


// "DELETE FROM problem WHERE `problem`.`id` = 2"?
?>

<?php 




?>