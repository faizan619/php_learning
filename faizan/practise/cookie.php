<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie in PHP</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="key" id="key" placeholder="Enter Key">
        <br>
        <br>
        <input type="text" name="value" id="value" placeholder="Enter Value">
        <br>
        <br>
        <button name="button" value="set">Set Cookie</button>
        <button name="button" value="view">View Cookie</button>
    </form>
</body>

</html>
<?php

if (isset($_POST["button"])) {

    if ($_POST['button'] == "set") {
        if (($_POST['key'] && $_POST['value']) == null) {
            echo "Please Enter All the Input";
        } else {
            $key = $_POST["key"];
            $value = $_POST["value"];
            if(setcookie($key, $value, time() + (864000))){
                echo "Cookie is set";
            }
            else{
                die("Error while setting cookie");
            }
        }
    }

    if($_POST['button']=="view"){
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";
    }

}


// if(setcookie("user",10,time()+(864000),"/")){
//     echo "cookie is set";
// }
// else{
//     die("Error occured while setting a cookie");
// }
?>