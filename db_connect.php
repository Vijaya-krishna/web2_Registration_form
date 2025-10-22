<?php
$servername = "your_host_name_here";
$username = "your_username_here";
$password = "your_password_here";
$dbname = "your_database_name_here";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
