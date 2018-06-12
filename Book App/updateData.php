<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Assignment_3";
ini_set('display_errors',1);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$creator=$_POST['creator'];
$title=$_POST['title'];
$type=$_POST['type'];
$identifier=$_POST['identifier'];
$dates=$_POST['dates'];
$language=$_POST['language'];
$description=$_POST['description'];



// $sql= "UPDATE eBook_MetaData SET creator='$creator',title='$title',type='$type',identifier='$identifier',dates='$dates',language='$language',description='$description' WHERE id=$id";

$sql = "UPDATE eBook_MetaData SET creator='$creator',title='$title',type='$type',identifier='$identifier',dates='$dates',language='$language',description='$description' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header('form.php'); exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>