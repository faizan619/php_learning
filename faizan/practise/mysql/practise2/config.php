<?php

$host = "localhost";
$username = "root";
$password = null;

$conn = new PDO("mysql:host=$host;dbname=issue",$username,$password);
if($conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION)) {
    echo "<center style='color:green;text-decoration:underline'>You Are Connected!</center>";
}
else{
    die("Failed to Connect with Database!");
}