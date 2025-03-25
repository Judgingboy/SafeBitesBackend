<?php

include("connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user_tbl(name,email,number,image,username,password)VALUES('$name','$email','$number','no image','$username','$password')"; 

if(mysqli_query($con,$sql)){

	echo "success";
}else{

	echo "failed";
}

?>