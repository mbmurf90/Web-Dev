<?php include 'db.php'; ?>
<?php 
session_start();
	
	; 
	// checking to see if score is set
	if(!isset($_SESSION['score'])){
		$_SESSION['score']=0; 
	}
	

	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['option'];

		// prints out q number and choice the user selected
		// echo $number;
		// echo $selected_choice;

		// $image = "camel_flow.png";
		// print"<img src ="$image"/>";

		$next = $number+1;



		$query = "SELECT * FROM `Questions`";
		$results = $conn->query($query);

		$total = $results->num_rows;



		$query = "SELECT * FROM `Options` WHERE q_num = $number AND is_right = 1";

		$result = $conn->query($query);

		$row = $result->fetch_assoc();

		$correct_ans = $row['id'];

		if($correct_ans == $selected_choice){
			$_SESSION['score']++;

		}

		if($number==$total){
			header("Location: result.php");
			exit();
		}
		else{
			header("Location: Assignment_4.php?n=".$next);
		}
	}

?>