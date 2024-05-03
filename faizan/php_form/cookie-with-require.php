<form action="" method="post">
    <input type="text" name="user" id="user" placeholder="Enter User Name">
    <br>
    <br>
    <button name="button" value="set">Set Cookies</button>
    <br>
    <br>
    <button name="button" value="display">Display Cookies</button>
    <br>
    <br>
    <button name="button" value="delete">Delete Cookies</button>
</form>
<?php

if (isset($_POST['button'])) {
    if ($_POST['button'] == "set") {
        if ($_POST['user'] == null) {
            echo "Please Enter a value to save it as cookie!";
        } else {

            $val = $_POST['user'];
            // echo $val;
            setcookie('user', $val, time() + (864000));
            echo "Cookie is set";
        }
    }
    if ($_POST["button"] == "display") {
        if (isset($_COOKIE['user'])) {
            echo "Cookie Available is : " . $_COOKIE['user'];
        } else {
            echo "No COOKIE Available";
        }
    }
    if ($_POST['button'] == "delete") {
        if (isset($_COOKIE['user'])) {
            if(setcookie("user", null, -1)){
                echo "Cookie is Deleted Successfully!";
            }
            else{
                echo "Cookie is not deleted!";
            }
        }
    }
}

?>