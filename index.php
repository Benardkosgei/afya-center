<?php 
    //------------start something called session-----------------
    session_start();
  //connection to the database--------------
  require "include/connect.php";
     //Variables used ---------------------------------------------------
		$fnameErr =""; 
		$lnameErr = "";
		$emailErr ="";
		$phoneErr ="";
	    $passErr = "";
		$fname ="";
		 $lname =""; 
		 $email =""; 
		 $phoneNo ="";
		  $password = ""; 
		  $password2 = "";
  
 if(isset($_POST['register'])){
 
	if($_POST['password']== $_POST['confirmPass']){
     $fname = $_POST['fname'];
     $lname =  $_POST['lname'];
     $email = $_POST['email'];
     $phoneNo = $_POST['phoneNo'];
    $password = md5($_POST['password']);


$query=mysqli_query($conn,"INSERT INTO tpatient VALUES ( NULL,'$fname','$lname','$email','$phoneNo','$password')");

 if ($query) {
    echo "New records created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
  }
  else{
  	$passErr ="Passwords do not Match";
  }
}
 
 //------------------------lOGIN------------------------------------------
 
 if(isset($_POST['login'])){
 	if(empty($_POST['email']) || empty($_POST['password'])){
 		$passErr  ="Email and password is empty";
 	}
 	else{
 	$email =$_POST['email'];
 	$password = md5($_POST['password']);
    $query = "SELECT email, password FROM tpatient WHERE email =? AND password =? LIMIT 1 ";

  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss",$email, $password);
  $stmt->execute();
  $stmt->bind_result($email, $password);
  $stmt->store_result();
   if($stmt->fetch()){
   	$_SESSION['email'] = $email;
   	$_SESSION['password'] = $password;

   	header('location: main.php');
     }
     else{
     	$passErr =  "Email or password is invalid";
     }
   }
    mysqli_close($conn); 
}
           
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Afya Center | Mombasa</title>
</head>
<body class="my-body animated bounceInUp contact-area">

	<div class="main-container">
	 <div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off" onsubmit="return validate()" name="register">
			<h1>Create Account</h1>
			<input type="text" name="fname" placeholder="First name"  autocomplete="off" />
				<span class="error"><?php echo $fnameErr; ?></span>
			<input type="text" name="lname" placeholder="Last name" autocomplete="off" />
				<span class="error"><?php echo $lnameErr; ?></span>
			<input type="email" name="email" placeholder="Email"  autocomplete="off"/>
				<span class="error"><?php echo $lnameErr; ?></span>
			<input type="text" name="phoneNo" placeholder="Phone number"   minlength="10" maxlength="10" autocomplete="off"/>
				<span class="error"><?php echo $phoneErr; ?></span>
			<input type="password" name="password" placeholder="Password" />
			<input type="password" name="confirmPass" placeholder="Confim Password" />
			           <span class="error"><?php echo $passErr; ?></span>
			<button type="submit" name="register">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email"  name="email" autocomplete="off"/>
			<input type="password" placeholder="Password" name="password" autocomplete="off"/>
			<span style="color: red;"> <?php echo $passErr; ?></span>
			<a href="#"  style="margin-top:10px;">Forgot your password?</a>
			<button type="submit" name="login" style="margin-top:20px;">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details to register with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
 </div>
</div>
<script src="js/login.js"></script>
</body>
</html>
 