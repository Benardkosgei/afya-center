<?php
   error_reporting(0);
   session_destroy();
   session_start();
   if(empty($_SESSION['email'])){
   		header("Location:index.php");
   		die();
   }

   ?>
<!DOCTYPE html>
<html>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

	<title>Afya Center</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css"> 
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="include/search.css">
	<link rel="stylesheet" type="text/css" href="include/diagnose.css">
	<link rel="stylesheet" type="text/css" href="4/w3.css">
	<script src="wow/wow.js"></script>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript"> new WOW().init();</script>
	<script src="js/loader.js"></script>
</head>
<style type="text/css">
	.top_menu > ul{
		margin-bottom: 0 !important;
	} 
	*{
	margin:0;
	list-style: none;
	padding: 0;
	text-decoration: none;
	box-sizing:border-box !important;
	font-family: sans-serif;
}
 abbr {
  text-decoration: underline blue dotted;
  color: blue;
}
abbr:hover {
  cursor: pointer;
}
 
.btncheck{
	background: linear-gradient(to right, #2af598 0%, #009efd 100%);
	width:260px;
	height: 50px;
	font-size: 18px;
	letter-spacing: 2px;
	border-radius: 4px;
	margin-top: 100px;
}
.check-service:hover{
	background: #fff;
	cursor: pointer;
	border:1px solid green; 
}


</style>
 

<body>
	<div class="wrapper">
		<div class="top_navbar" style="z-index: 20 !important;">
			<div class="hamburger">
				<div></div>
				<div></div>
				<div></div>
				
			</div>
			  <div  class="top_menu" >
		<div class="logo" >Afya Check</div>
				      
					 <ul>
					 	<li><a href="#"><i class="fas fa-asterisk fa-spin"></i></a></li>
						<li><a href="javascript:void(0);" class="profile" onclick="profile();" >
							<abbr title="My Profile"><i class="fas fa-user-md"></i></abbr></a></li>
				   <li> <abbr title="Sign-ut"><a href="logout.php" class="login-form"  >
				   	<i class="fas fa-sign-out-alt"></i></a></abbr>
				   </li>

					</ul>
					
			</div>
			
		</div>
		<!----------------END OF NAVIGATIONBAR----------------------------------------->
		<div class="sidebar">
			<ul>
				<li class="nav-item">
					<a href="javascript:void(0);" class="active dashboard" onclick="dashboard();" >
						<span class="icon"><i class="fas fa-qrcode" aria-hidden="true"></i>
						</span>
						<span class="title">Dashboard</span>
				</a></li>
				<li class="nav-item"><a href="javascript:void(0);" class="diagnose" onclick="diagnose();" >
						<span class="icon"><i class="fas fa-sliders-h" aria-hidden="true"></i>
						</span>
						<span class="title">Diagnose</span>
				</a></li>
				<li><a href="javascript:void(0);" class="profile" onclick="profile();" >
						<span class="icon"><i class="fas fa-user" aria-hidden="true"></i>	
						</span>
						<span class="title">My Profile</span>
				</a></li>
				<li><a href="javascript:void(0);" class="health" onclick="health();" >
						<span class="icon"><i class="fas fa-heartbeat" aria-hidden="true"></i></span>
						<span class="title">Health News</span>
				</a></li>
				<li><a href="javascript:void(0);" class="emergency" onclick="emergency();" >
						<span class="icon"><i class="fas fa-leaf" aria-hidden="true"></i></span>
						<span class="title">Emergency</span>
				</a></li>
				<li ><a href="javascript:void(0);" class="about" onclick="about();"  >
						<span class="icon"><i class="fas fa-question-circle" aria-hidden="true"></i>
						</span>
						<span class="title">About Us</span>
				</a></li>
				<li><a href="javascript:void(0);" class="contact" onclick="contact();" >
						<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<span class="title">Contact Us</span>
				</a></li>

			</ul>
			
		</div>
		<!-----------------------------------END OF SIDEBAR NAVIGATION------------------------------->
		<div class="main-container" id="everything" style="position: relative;" class="wow slideInLeft">

			<!-------------------------------------------->
			<div class="default" >
			 
			<div class="w3-container">
			<div class="w3-row">
				<div class="w3-col l6 s12">	
				 
				<h3>Intelligent Technology</h3>
				<h6>You can trust.</h6>
				<ul>
					<li><i class="fa fa-check fa-sm"></i>Register and Login </li>
					<li><i class="fa fa-check fa-sm"></i>Enter your symptoms</li>
					<li><i class="fa fa-check fa-sm"></i>Done! Your assessment will reveal: </li>

				</ul>
				  <div class="check-services">
					<button  class="w3-round check-service btncheck">
						<a href="javascript:void(0);" class="diagnose" onclick="diagnose();" >
					Start checkup</a></button>
				</div>
				 
			      
			 </div>
			 <div class="w3-col l6 s12 w3-padding-24">
				 
						    <img src="images/bana.png" >
					 
			   </div>
		    </div>
		    </div>		
			 
			<section class="whyarea">
				<h1>Why Afya Check ?</h1>
				<p>
					Accurate diagnosis is as important as the prescription of drugs because without correct diagnosis of the patient’s medical condition there is no chance for right prescription. 
					There is need to provide a solution to compensate for the poor statistics and to ensure that quality health-care services can be accessed by patients without the need to queue for an extended period of time to see a doctor. 
				</p>
				<p>
					With Afya Check, an online symptoms and diagnostic prediction system which provides accurate diagnosis for patients’ symptom based on the data provided.  
				</p>
				
			</section>
			 <div class="w3-container w3-border-top" style="margin-bottom:20px;" >
      <div class="w3-row-padding">
	     <div class="w3-col l3 s12 w3-border-right">
	     	 <ul class="w3-ul w3-hoverable">
			  <li><a href="">Terms and conditions</a></li>
			  <li><a href="">Privacy policy</a></li>
			  <li><a href="">Adam</a></li>
			</ul>
	     </div>
	     <div class="w3-col l2 s12 w3-border-right" > 
	     	 <ul class="w3-ul  ">
			  <li><a href="">Health Information</a></li>
			  <li><a href="">Symptom Checker</a></li>
			  <li><a href="">Read more</a></li>
			</ul>
	      </div>
	    <div class="w3-col l3 s12 w3-border-right w3-center"><p style="margin-top:3.125em"><a href="">Contact us</a> </p></div>
	    <div class="w3-col l2 s12  w3-border-right w3-center"><p style="margin-top:3.125em"><a href="">About Afya Check</a></p></div>
	    <div class="w3-col l2 s12 w3-center"><p style="margin-top:3.125em"><a href="">COVID-19 Updates</a></p></div>



   </div>
   </div>
   <footer>
   <div class="w3-footer w3-container w3-center w3-padding-24 w3-text-white w3-black">
   	<div class="w3-row ">
   		<div class="w3-col m12 ">
   			<p>&copy; Afya Check Faundation for Medical Education and Research. All rights reserved </p>
   		</div>
   		
   	</div>
   	

   </div>
</footer>
</div>


	  </div>

	</div>

  
</body>
</html>