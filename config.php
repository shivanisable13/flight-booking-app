<?php
$host = "db";
$user = "flightuser";
$pass = "flight123";
$db   = "flightdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
?>
