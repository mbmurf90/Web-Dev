<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Assignment_Yoga";
ini_set('display_errors',1);

// session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>