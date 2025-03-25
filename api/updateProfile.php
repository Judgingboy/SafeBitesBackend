<?php

include("connection.php");

if(isset($_POST['image'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $uid = $_POST['uid'];
   $email = $_POST['email'];
   $image = $_POST['image'];

   $fileName = "image".$uid.".jpg";
   $path = "../user_tbl/uploads/$fileName";

   $sql = "UPDATE user_tbl SET name='$name',number='$number',email='$email',image = '$fileName' WHERE id = '$uid'";

   if(mysqli_query($con,$sql)){
       file_put_contents($path,base64_decode($image));

       echo "Successfully Uploaded";
   }

}else{

   $uid = $_POST['uid'];
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];


   $sql = "UPDATE user_tbl SET name='$name',email='$email',number='$number' WHERE id='$uid'";
        
    if(mysqli_query($con,$sql)){

       echo "Successfully Updated";

   }else{

   	echo"Failed to Update Profile";

   }
}



?>