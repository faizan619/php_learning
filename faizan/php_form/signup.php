<?php 
// print_r($_POST);
if($_POST){
    echo "user name is : ". $_POST['user_name'];
    echo "<br/>";
    echo "user Password is : ". $_POST['user_password'];
    echo "<br/>";
    echo "user Email is : ". $_POST['user_email'];
}

?>