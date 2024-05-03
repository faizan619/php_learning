<?php
// print_r($_REQUEST);
// print_r($_REQUEST['user_name']);


$_REQUEST['dummy'] = "testing";
foreach($_REQUEST as $key => $data){
    echo $key." is ". $data;
    echo "<br/>";
}
?>