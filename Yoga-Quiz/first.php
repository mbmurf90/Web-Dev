<?php include 'db.php'; ?>
<?php
session_start();

$_SESSION['score']=0; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="first.css">

</head>
<body>

	<h1>Welcome to the Yoga Position Quiz</h1>

	<div class="credits">
	<p>With thanks to <a href="http://www.yogacards.com/vinyasa-yoga-cards.html">YogaCards.com</a> and <a href="https://www.pexels.com/photo/backlit-beach-dawn-dusk-588561/">Pexels.com</a> for use of images.</p>
	</div>
	
	<p>To start enter your name, password and click the submit button.</p>

	

	<div class="container">
		<form method="post" action="decision.php">
		<div id="div_login">
			<h2>Login/Signup</h2>
			<div>
				
				<input type="text" class="textbox" name="Name" placeholder="Name">
				<input type="password" class="textbox" name="Password" placeholder="Password">
				
			</div>
			<div>
				<button type="submit" onClick="location.href='./decision.php'">Submit</button>
			</div>
		</div>
		</form>
	</div>

	
</body>
</html>