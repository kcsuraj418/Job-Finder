<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="d/util.css">
	<link rel="stylesheet" type="text/css" href="d/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Email</th>
								<th class="column2">Resume</th>
							</tr>
						</thead>
							<?php
							session_start();
							$conn = mysqli_connect("localhost","root","1234","registration")	;
							if($conn-> connect_error){
								die("Connection failed:". $conn-> connect_error);
							}
							$s=$_SESSION['username'];
							$sql = "SELECT email,file from resume where companyname='$s'";
							$result= $conn-> query($sql);
							if($result==TRUE){
								while($row = $result-> fetch_assoc()){
									echo "<tr><td class=column1>". $row["email"] ."</td><td class=column2>"."<a target='_blank'href='view.php?email=".$row['email']."'>"."RESUME"."</a></td></tr>";
								}
								echo"</table";
							}
							else{
								echo "0 result";
							}
							$conn->close();
							?>	
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="e/main.js"></script>

</body>
</html>