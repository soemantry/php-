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
				<a href="inputnama.php" >Tambah Data</a>
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
			href="delete.php?id=<?php echo $row['Id']; ?>">Hapus</a>
			<a href="edit.php?id=<?php echo $row['Id']; ?>">Edit</a>
			</td>
 		</tr>
 	<?php  
 }
?>

</table>
</form>
</body>
</html>