<?php
 $conn=mysqli_connect("localhost","root","","appointment");

	if(!$conn)
	{
		echo "Error!".mysqli_connect_error();
	}
	else
	{
		echo "";
	}
$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$sql= "INSERT INTO `booking` (`name`,`email`,`phone_no`,`msgs`) VALUES('$fname', '$email', '$phone', '$msg');";
mysqli_query($conn,$sql);
mysqli_close($conn);
 header("location: index.html");
?>