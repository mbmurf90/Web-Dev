<?php include 'db.php'; ?>
<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
	
	$number = (int) $_GET['n'];


	//returns questions
	$query = "SELECT * FROM `Questions` WHERE q_num= $number";

	
	$result = $conn->query($query) or die ($conn->error);
	
	
	// $question = $result->fetch_assoc();

	$question= mysqli_fetch_assoc($result);



	//returns options for questions
	$query = "SELECT * FROM `Options` WHERE q_num= $number";

	
	$options = $conn->query($query) or die ($conn->error);
	




?>
<!DOCTYPE html>
<html>
<head>
	<title>Yoga Quiz 1</title>
	<link rel="stylesheet" type="text/css" href="Yoga.css">
</head>
<body>

<h1>Yoga Quiz English</h1>

<div align="center">
<?php

if ($number==1) {
	 echo '<img src="camel_flow.jpg" />';
	 
}

else if($number==2){
	echo '<img src="half-loftus.jpg" />';
}

else if($number==3){
	echo '<img src="triangle-to-warrior.jpg" />';
}

else if($number==4){
	echo '<img src="side-shoulderstand.jpg" />';
}

else if($number==5){
	echo '<img src="vinyasa-split.jpg" />';
}

else if($number==6){
	echo '<img src="hero-to-pigeon.jpg" />';
}

else if($number==7){
	echo '<img src="down-to-the-earth-hips.jpg" />';
}

else if($number==8){
	echo '<img src="groin-opening-backend-to-cat.jpg" />';
}
else if($number==9){
	echo '<img src="plough-flow.jpg" />';
}

else{
	echo '<img src="inner_groin.jpg" />';
}


?>
</div>
<div align="center">
  <p>Your current score is: <?php echo $_SESSION['score']; ?> </p>
</div>

<div align="center">
<?php echo $question['text']; ?>
</div>


<form method="post" action="process.php" name="f1">
  <ul class="options">
  	<?php while($row = mysqli_fetch_assoc($options)): ?>
  		<li><input name="option" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li>
  	<?php endwhile; ?>
  	<!-- <li><input type="radio" value="1" name="option">Camel Flow</li>
  	<li><input type="radio" value="1" name="option">Downward Dog</li>
  	<li><input type="radio" value="1" name="option">Half Loftus</li>
  	<li><input type="radio" value="1" name="option">Plough Flow</li>
  	<li><input type="radio" value="1" name="option">Vinyasa Split</li>	 -->
  </ul>
  <input type="submit" value="submit">
  <input type="hidden" name="number" value="<?php echo $number; ?>">
</form>



</body>
</html>