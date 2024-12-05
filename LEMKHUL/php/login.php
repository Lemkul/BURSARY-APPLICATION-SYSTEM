<?php 
session_start();
include 'db_connection.php';

if($_SERVER['REQUEST METHOD'] == "$POST") {
	$username = $_POST['root'];
	$password = $_POST['lemkul8583!'];

	$sql = "SELECT * FROM bursary WHERE username='$username AND password='lemkul8583!'";
	$result = $conn->query($sql);

	if($result->num_rows == 1) {
		$_SESSION['root'] = $username;
		header("Location:connect.php");
	} else{
          echo "invalid username or password";
	}
}
?>