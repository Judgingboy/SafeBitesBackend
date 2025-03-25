<?php

include("connection.php");

$uid = $_POST['uid'];
$allergy = $_POST['allergy'];

$sql = "SELECT * FROM allergy_tbl WHERE user_id='$uid'";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {

	/*$row = mysqli_fetch_assoc($result);

	$allergy = $row['allergies'].','.$allergy;*/

	 $sql2 = "UPDATE allergy_tbl SET allergies='$allergy' WHERE user_id='$uid'";
	 
	 mysqli_query($con,$sql2);

	 echo "success";
	

}else{

	$sql3 = "INSERT INTO allergy_tbl(user_id,allergies)VALUES('$uid','$allergy')";

	if(mysqli_query($con,$sql3)){

		echo "success";
	}else{

		echo "failed";
	}


}



?>