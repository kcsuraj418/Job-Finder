<?php
session_start();
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'registration');
$username=$_POST['name'];
$license=$_POST['user'];
$password=$_POST['password'];
$s="select * from company where username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	echo "<script type='text/javascript'>alert('username already taken')</script>";
}else{
	$reg="insert into company (username,license,password) values('$username','$license','$password')";
	mysqli_query($con,$reg);
	echo"Registration Successful";
	header('location:admin.php');
}
?>