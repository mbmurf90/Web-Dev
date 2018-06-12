<?php include 'db.php'; ?>
<?php session_start(); ?>

<?php

// $username = $_POST['username']; 
// $_SESSION['username'] = $username;


	
	$Name= $_POST['Name'];
	$Password= $_POST['Password'];

	// $result = mysqli_query("SELECT * FROM Login WHERE Name='$Name'");
 //    if(mysql_num_rows($result) == 1)
 //    {
 //    echo "User exist";
 //    }

$sql = "SELECT * FROM Login WHERE Name='$Name' and Password ='$Password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "Welcome back " .$Name;
    }
} else {
	$sql = "INSERT INTO `Login` (Name, Password)
	VALUES ('$Name', '$Password')";
	echo "Welcome " .$Name;

		if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

	  


$conn->close();
	
	// for testing 
	// var_dump($_POST);
	?>



<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="decision.css">
</head>
<body>

	<!-- <p>Welcome  <?php echo $Name;?></p> -->
	

	<div>
	<p>Please pick which Quiz you would like to take, the English version or the Sanskrit version</p>
	</div>



	<div>
		<button type="button" onClick="location.href='./Assignment_4.php?n=1'">Quiz 1: English</button>
		<button type="button" onClick="location.href='./Assignment_4Q2.php?n=1'">Quiz 2: Sanskrit</button>
	</div>

</body>
</html>