<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "discuzz";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Not connected' . $conn->connect_error);
} else {
    echo ('Database connected successfully');
}
?>