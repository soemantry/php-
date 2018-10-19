<!DOCTYPE html>
<html>
<head>
	<title> Table  Database </title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 1000px;
			height: 500px;
			color: #000000;
			font-family: roboto;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #000000;
			color : white;
		}
		tr{
			background-color: #588c7e
		}


	</style>

</head>
<body>
	<table>
	<tr> 
		<th>Id</th>
		<th>Usernamme</th>
		<th>Password</th>
		<th>Level</th>
		<th>Fullname</th>
	</tr>
	<?php
		$conn = mysqli_connect("localhost", "root",  "", "php-api");
		if ($conn-> connect_error) {
			die("Connection failed:" . $conn-> connect_error);
		}

		$sql = "SELECT Id, Usernamse, Password, Level, Fullname from user";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0){
			while  ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["Id"]. "</td><td>".$row["Usernamse"] . "</td><td>". $row["Password"]. "</td><td>" . $row["Level"]. "</td><td>" . $row["Fullname"]. "</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 result";
		}

		$conn-> close()
	?>

</table>
</body>
</html>