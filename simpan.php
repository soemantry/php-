<?php
$koneksi = mysqli_connect("localhost","root","","php-api");
$id = $_POST['Id'];
$username = $_POST['Usernamse'];
$password = $_POST['Password'];
$level = $_POST['Level'];
$fullname = $_POST['Fullname'];


$query = "INSERT INTO user  SET id='$id', username='$username', password='$password', level='$level', fullname='$fullname'";

mysqli_query($koneksi, $query);
header("location:tablenama.php");
?>
