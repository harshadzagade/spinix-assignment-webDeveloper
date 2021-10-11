<?php
/* Database connection start */
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "finstreet";

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
