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


// $sql = "INSERT INTO eBook_MetaData (creator,title,type,identifier,date,language,description) VALUES ('JK Rowling','Lord of the Rings', 'Fantasy','9788373191723','1954-07-29', 'en-us','The future of civilization rests in the fate of the One Ring.')";

$creator=$_POST['creator'];
$title=$_POST['title'];
$type=$_POST['type'];
$identifier=$_POST['identifier'];
$dates=$_POST['dates'];
$language=$_POST['language'];
$description=$_POST['description'];



$sql="INSERT INTO eBook_MetaData (creator,title,type,identifier,dates,language,description) VALUES ('$creator','$title','$type','$identifier','$dates','$language','$description')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>