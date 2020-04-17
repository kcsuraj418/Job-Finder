<?php
session_start();
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'registration');
$companyname=$_POST['name'];
$date=$_POST['hiredate'];
$place=$_POST['place'];
$degree=$_POST['degree'];
$salary=$_POST['salary'];
$phone=$_POST['phone'];
$s="select * from government where name='$companyname'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	echo "<script type='text/javascript'>alert('username already taken')</script>";
}else{
	$reg="insert into government (name,date,place,degree,salary,phone) values('$companyname','$date','$place','$degree','$salary','$phone')";
	mysqli_query($con,$reg);
	echo "<script type='text/javascript'>alert('Your job is uploaded')</script>";
	header('location:adminreg.php');
}
?>