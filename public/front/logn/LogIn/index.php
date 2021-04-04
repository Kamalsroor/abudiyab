<?php

session_start();
 
require '../../PHP/db.php';
require '../../PHP/views.php';
$Error = null;
$red = 'red';
$T_email = null;
$T_pas = null;

if (isset($_SESSION["id"])) {
	header("location: ../../cars/");
    exit();
}

if (isset($_POST['GO'])) {
	$email = $_POST['email'];
	$pas = $_POST['pas'];
	$T_email = $email;
    $T_pas = $pas;

	$MO_nu_ROK = "SELECT * FROM paso WHERE email = '$email'";
	if (mysqli_num_rows(mysqli_query($con, $MO_nu_ROK)) > 0) {
		$fdf453 = $con->prepare("SELECT * FROM paso WHERE email = '$email'");
        $fdf453->execute();
        $fef4 = $fdf453->get_result();
        $row = $fef4->fetch_assoc();
        if ($row['password'] == $pas) {
        	$Error = "Signed in";
        	$red = '#44bd32';
        	$_SESSION["id"] = $row['id'];
        	header("location: ../../cars/");
        	exit();
        }
        else{
        	$Error = "Password is wrong";
        }
	}
	else{
		$Error = "The email is wrong";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
	.text_f{
		font-family: 'Cairo', sans-serif !important;
	}
	
</style>
</head>
<body style="overflow: hidden;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-49 text_f">
						تسجيل الدخول
					</span>
<img class="abo-logo" src="https://media-exp1.licdn.com/dms/image/C4D03AQH_IJAaugMtkQ/profile-displayphoto-shrink_200_200/0/1517347855977?e=1614211200&v=beta&t=7OuizevtNcRFRr90rqxslZmwNJmI2Bwfeb7NTC12iTk" alt="">
					<div style="color: <?php echo $red;?>;"><?php echo $Error;?></div>

					<div dir='rtl' class="wrap-input100 Error validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100 text_f">البريد الاركتروني</span>
						<input class="input100" type="email" name="email" placeholder="Email" value="<?php echo $T_email;?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div dir='rtl' class="wrap-input100 Error validate-input" data-validate="Password is required">
						<span   class="label-input100 text_f">كلمة السر</span>
						<input class="input100" type="password" name="pas" placeholder="Password" value="<?php echo $T_pas;?>">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn text_f" name="GO">
								استمرار
							</button>
						</div>
					</div>
					<div class="txt1 text-center p-t-20">
						<span class="text_f">بالدخول الى حسابك، فإنك توافق على شروط الاستخدام وخصوصية الاستخدام.</span>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="../SignUp.php" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>