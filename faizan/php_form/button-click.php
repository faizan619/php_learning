<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP Function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">Call Function on Post</button>
    </form>
    <form action="" method="get">
        <button name="button1" value="btn1">Call Function on Post</button>
    </form>
    <form action="" method="get">
        <button name="button2" value="btn1">Call Function on Post</button>
    </form>
</body>
</html>


<?php 
if(isset($_POST["button"])){
    btn_click_test();
}
if(isset($_GET["button1"])){
    btn_click_test();
}
if(isset($_REQUEST["button2"])){
    btn_click_test();
}

function btn_click_test(){
    echo "Function Called on Button Click!";
}
?>