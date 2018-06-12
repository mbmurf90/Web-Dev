<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Assignment6";
ini_set('display_errors',1);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// check connection
// else{
// 	echo "connected";
// }
if($_SERVER['REQUEST_METHOD']=='GET'){

$sql = "SELECT * FROM Customers";
$result = $conn->query($sql);

$array=array();


if($result->num_rows>0){
	//output data of each row
	while($row = mysqli_fetch_assoc($result)) {
        
        $array[] = $row;
        
    }

}

}
 
    echo json_encode($array);


?>


