<?php
date_default_timezone_set("Asia/Kolkata");

$host = "localhost";
$username = "root";
$password = null;

$conn = new PDO("mysql:host=$host;dbname=practise", $username, $password);
if ($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)) {
    echo "<center>" . date("l | h:i:s a") . "</center>";
} else {
    die("Failed to connect with database");
}
?>