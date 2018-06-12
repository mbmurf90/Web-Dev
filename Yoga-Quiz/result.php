<?php include 'db.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yoga Quiz 1</title>
	<link rel="stylesheet" type="text/css" href="Yoga.css">
</head>
<body>

<h1>Yoga Quiz English</h1>

<h2>Quiz Complete!</h2>
<p>Your Final Score is: <?php echo $_SESSION['score'];?></p>
<?php session_destroy(); ?>
<a href="first.php" class="start"> Main Screen </a>



</body>
</html>