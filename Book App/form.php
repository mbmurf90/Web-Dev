<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form id="insert" action="insertData.php" method="post">
		<h3 align="center">Insert New Book</h3>
		Creator: <br><input type="text" name="creator">
		<br>
		Title: <br><input type="text" name="title">
		<br>
		Type: <br>
		<select id="genre" name="type">
			<option>Comedy</option>
			<option>Drama</option>
			<option>Fantasy</option>
			<option>Kids</option>
		</select>
		<br>
		Identifier: <br><input type="text" name="identifier">
		<br>
		Date: <br><input type="dates" name="dates">
		<br>
		Language: <br>
		<select id="lang" name="language">
			<option>en-ie</option>
			<option>en-gb</option>
			<option>en-us</option>
			<option>fr-ca</option>
		</select>
		<br>
		Description: <br><textarea rows="5" cols="33" name="description"> 
		</textarea> 
		<br>
		<input type="submit" value="submit">
	</form>
	
	<form id="update" action="updateData.php" method="post"> 
		<h3 align="center">Update Book</h3>
		Id: <br><input type="text" name="id">
		<br>
		Creator: <br><input type="text" name="creator">
		<br>
		Title: <br><input type="text" name="title">
		<br>
		Type: <br>
		<select id="genre" name="type">
			<option>Comedy</option>
			<option>Drama</option>
			<option>Fantasy</option>
			<option>Kids</option>
		</select>
		<br>
		Identifier: <br><input type="text" name="identifier">
		<br>
		Date: <br><input type="dates" name="dates">
		<br>
		Language: <br>
		<select id="lang" name="language">
			<option>en-ie</option>
			<option>en-gb</option>
			<option>en-us</option>
			<option>fr-ca</option>
		</select>
		<br>
		Description: <br><textarea rows="5" cols="33" name="description"> 
		</textarea> 
		<br>
		<input type="submit" value="submit">
	</form>
	<table>
		<tr>
			<th>id</th>
			<th>creator</th>
			<th>title</th>
			<th>type</th>
			<th>identifier</th>
			<th>dates</th>
			<th>language</th>
			<th>description</th>
		</tr>
		<form id="delete" action="deleteData.php" method="post">
			<h3>Delete Row</h3>
			Enter ID you want to delete: <br>
			<input type="text" name="id">
			<input type="submit" value="submit">
		</form>

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
$result = mysqli_query($conn,"SELECT * FROM eBook_MetaData;");

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['creator']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['identifier']; ?></td>
				<td><?php echo $row['dates']; ?></td>
				<td><?php echo $row['language']; ?></td>
				<td><?php echo $row['description']; ?></td>
			</tr>
		<?php }
    	 // echo "id: " . $row["id"]. " - creator: " . $row["creator"]. " " . $row["title"]. $row["type"]. $row["identifer"]. $row["date"]. $row["language"]. $row["description"]. "<br>";
    	}
    else{
    	echo "0 results";
    }
    $conn->close();
	?>
	</table>

</body>
</html>