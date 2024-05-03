<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On CLick Function in PHP</title>
</head>
<body>
    <form action="" method="get">
        <button name="button" value="btn">Get Method</button>
    </form>
    <br>
    <br>
    <br>
    <form action="" method="post">
        <button name="button" value="btn1">Post Method</button>
    </form>
</body>
</html>


<?php 

// if(isset($_POST["button1"])){
//     test();
// }

// if(isset($_GET["button"])){
//     test();
// }

if(isset($_REQUEST["button"])){
    if($_POST["button"]=="btn1"){
        echo "This is a POST Request!";
        echo "<br/>";
        test();
    }
    elseif($_GET["button"]=="btn"){
        echo "This is a GET Request!";
        echo "<br/>";
        test();
    }
}


function test(){
    echo "This is a test function!";
}
?>