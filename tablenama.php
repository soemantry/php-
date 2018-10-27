<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title> Table  Database </title>
	<link rel="stylesheet" type="text/css" href="tablenama.css">
</head>
<form method="post" action="simpan.php">
<body>
	<table id="apel" align="center">
		<tr class="b">
			<td colspan="6">
				<h3 class="a"><center>DATA SISWA</center></h3>
				<a href="inputan.php" >Tambah Data</a>
			</td> <br><br><br>
		</tr>
	<tr> 
		<th>Id</th>
		<th>Usernamme</th>
		<th>Password</th>
		<th>Level</th>
		<th>Fullname</th>
		<th>Opsi</th>
		
	</tr>
	<?php
		$conn = mysqli_connect("localhost", "root",  "", "php-api"); 
		
		$sql = "SELECT * from user";
		$result = $conn-> query($sql);
		while  ($row = $result-> fetch_assoc()) {
		
	?>	
	 	<tr>
			<td><?php echo $row['Id']; ?></td>
			<td><?php echo $row['Usernamse']; ?></td>
			<td><?php echo $row['Password']; ?></td>
			<td><?php echo $row['Level']; ?></td>
			<td><?php echo $row['Fullname']; ?></td>
			<td>
			<a onclick="return confirm('Yakin untuk menghapus ?')"
			href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
			<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
			</td>
 		</tr>
 	<?php  
 }
?>

</table>
</form>
</body>
=======
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
>>>>>>> 2c6fe15cf6bd6b306536c282c3e155d6250e7808
</html>