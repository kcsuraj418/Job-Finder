<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cs/util.css">
	<link rel="stylesheet" type="text/css" href="cs/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/nie.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="validation.php" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Job Finder
					</span>
       
					
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>
                     </form>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="reg.php" class="txt2 bo1">
							Sign up now
						</a>
					</div>
			</div>
		</div>
	</div>
</form>
	

	<div id="dropDownSelect1"></div>
	<script src="js/main.js"></script>

</body>
</html>