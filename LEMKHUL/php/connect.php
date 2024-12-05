<?php
$servernme = "localhost";
$username = "root";
$password = "lemkul8583!";
$database = "bursary";

$con = new msqli($servernme,$username,$password!,$database);

if ($conn->connect error) {
    die("connection failed: " . 
$conn->connect_error);
} else {
    echo "connected successfully";
}
?>