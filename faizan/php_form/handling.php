<?php
// print_r($_POST);

if(isset($_POST['name'])){
    echo "User name : ". $_POST['name'];
    echo "<br/>";
    echo "User email : ". $_POST['email'];
    echo "<br/>";
    echo "User Password : ". $_POST['password'];
    echo "<br/>";
    echo "User Skills : ". implode(", ",$_POST['skills']);
    echo "<br/>";
    echo "User city : ". $_POST['city'];
    echo "<br/>";
    echo "User gender : ". $_POST['gender'];
    echo "<br/>";
    echo "User Bio : ". $_POST['bio'];
    echo "<br/>";
}

?>