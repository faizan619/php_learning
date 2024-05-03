<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="Enter User Name">
    <br>
    <br>
    <button name="button" value="set">Set Session</button>
    <br>
    <br>
    <button name="button" value="display">Display Session</button>
    <br>
    <br>
    <button name="button" value="delete">Delete Session</button>
</form>

<?php 
session_start();

if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val = $_POST['user'];
        echo $val;
        $_SESSION['user']=$val;
    }

    if($_POST['button']=="get"){
        echo $_SESSION['user'];
    }

    if($_POST['button']=="delete"){
        session_destroy();
    }
}
?>