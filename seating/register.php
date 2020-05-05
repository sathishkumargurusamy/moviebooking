<!DOCTYPE html>
<html lang="en">
<head>
	<title>ABIRAMI THEATRE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images1/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<style>
.heading{
	display:flex;
	justify-content:center;
}
.login100-form{
	display:flex !important;
	justify-content:center !important;
}
.symbol-input100{ 
bottom:5px !important;
}
</style>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images1/img-01.jpg');">
			<div class="wrap-login100 p-t-50 p-b-30">
				<form class="login100-form validate-form" action="loginck.php" method="POST">
<h1 align='center' class='heading p-b-30'>REGISTER</h1>

										<div class="wrap-input100 validate-input m-b-10 p-b-10" data-validate = "Firstname is required">
						<input class="input100" type="text" name="fname" placeholder="Firstname" id="fname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10 p-b-10" data-validate = "Lastname is required">
						<input class="input100" type="text" name="lname" placeholder="Lastname" id="lname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10 p-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="uname" placeholder="Email" id="uname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10 p-b-10" data-validate = "Phone number is required">
						<input class="input100" maxlength='10' type="text" name="phone" placeholder="phone" id="phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
				

					<!--<div class="wrap-input100 validate-input m-b-10 p-b-30" data-validate = "Address is required">
						<textarea class="input100" type="text" name="address" placeholder="address" id="uname"></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div> -->

					<div class="wrap-input100 validate-input m-b-10 p-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pwd" placeholder="Password" id="pwd">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div> 
										<div class="wrap-input100 validate-input m-b-10 p-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="cpwd" placeholder="Confirm Password" id="cpwd">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<input name='type' value='register' id='type' hidden/>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
					<b>Already have an Account?</b> &nbsp;<b> <a style='color:lightgrey;text-decoration:none' href='index.php'>Login</a></b>
				</form>
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
	<script src="js1/main.js"></script>

</body>
</html>