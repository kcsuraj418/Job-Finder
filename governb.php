<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table</title>
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
								<th class="column1">Company name</th>
								<th class="column2">Date</th>
								<th class="column3">Place</th>
								<th class="column4">Degree</th>
								<th class="column5">Salary</th>
								<th class="column6">Contact</th>
								<th class="column6">Apply now</th>
							</tr>
						</thead>
							<?php
							$conn = mysqli_connect("localhost","root","1234","registration")	;
							if($conn-> connect_error){
								die("Connection failed:". $conn-> connect_error);
							}
							$sql = "SELECT * from government where degree='B.E.(E.C.)'";
							$result= $conn-> query($sql);
							if($result-> num_rows > 0){
								while($row = $result-> fetch_assoc()){
									echo "<tr><td class=column1>". $row["name"] ."</td><td class=column2>". $row["date"] ."</td><td class=column3>". $row["place"] ."</td><td class=column4>". $row["degree"] ."
									</td><td class=column5>". $row["salary"] ."</td><td class=column6>". $row["phone"] ."</td><td class=column6> <a target='_blank' href='resume.php? name=".$row['name']."'>Apply now</a></td></tr>";
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