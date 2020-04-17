<?php
session_start();
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'registration');
$username=$_POST['name'];
$password=$_POST['password'];
$s="select * from company where username='$username' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$_POST['name'];
	$_SESSION['password']=$_POST['password'];
	header('location:adminhome.php');

}else{
	echo "<script type='text/javascript'>alert('incorrect username or password')</script>";;
}
?>