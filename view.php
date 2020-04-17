<?php
$conn = mysqli_connect("localhost","root","1234","registration")	;
if($conn-> connect_error){
die("Connection failed:". $conn-> connect_error);
}
$email=$_GET['email'];
$result=mysqli_query($conn,"select * from resume where email='$email'");
$row=$result->fetch_assoc();
header('Content-Type: image/jpg,image/jpeg ');
echo $row['file'];