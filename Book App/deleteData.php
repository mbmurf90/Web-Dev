<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Assignment_3";
ini_set('display_errors',1);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delete=$_POST["id"];

// sql to delete a record
$sql = "DELETE FROM eBook_MetaData WHERE id=$delete";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>