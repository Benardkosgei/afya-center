<?php
   error_reporting(0);
   session_destroy();
   session_start();
     
   include("include/connect.php");
?>
	<script>
    $(document).ready(function(){
    	$( ".editprofile" ).click(function() {
        $('input[type="text"]').prop("disabled", false);
        $('input[type="file"]').show();


    alert( "You are about to change your profile?" );
});
        
      
    });
</script>


 <link rel="stylesheet" type="text/css" href="css/profile.css">
 <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
<div class="container" style="background:#fff; width: 100%;">
 	 <form class="profile-form" action="reset.php" method="POST" id="frmBox" onsubmit="formSubmit(); return false">

 	 	<fieldset style="margin:15px;">
 	 		<legend style="border:1px blue solid;padding:5px;margin-left:25px;font-size:20px;">Personalia:</legend>
 	 		<div class="content">
					<a href="javascript:void(0);" class="editprofile" onclick="editprofile();" >
						<i class="edit-icon fa fa-edit"></i></a>

 	 	   <div class="image-area w3-border">
 	 	   	
 	 	    <img src="images/pexels-secret-garden-931158.jpg" alt="No image found" class="image" style="background-color:#fff">


 	 	    <div class="media">
 	 	    	<ul>
 	 	    		<li><a href="#"><i class="fab fa-twitter"></i></a></li>
 	 	    		<li><a href="#"><i class="fab fa-facebook"></i></a></li>
 	 	    		<li><a href="#"><i class="fab fa-instagram"></i></a></li>
 	 	    		<li><a href="#"><i class="fa fa-envelope"></i></a></li>
 	 	    		<li><a href="#"><i class="fab fa-whatsApp"></i></a></li>
 	 	    	</ul>
 	 	     </div>
 	 	      <input type="file" name="file" name=" image" style="display: none;"> 
 	 	         <div class="username">
 	 	         	<?php
 	 	         	    	$email=$_SESSION['email'];
 	 	         	    	$password=$_SESSION['password'];		 
		$sel=mysqli_query($conn,"SELECT * FROM tpatient WHERE email = '$email' AND password = '$password'");
					 $fetch=mysqli_fetch_array($sel);
					    $id=$fetch['user_id'];
					    $fname=$fetch['fname'];
					    $lname=$fetch['lname'];
					    $email=$fetch['email'];
					    

 	 	         	    	$email=$_SESSION['email'];
                    
		$data = mysqli_query($conn,"SELECT * FROM patient_detail WHERE email = '$email'");
			 $fetch=mysqli_fetch_array($data);
			         $country = $fetch['country'];
			         $date_of_birth = $fetch['date_of_birth'];
			         $eye_color = $fetch['eye_color'];
			         $hair_color = $fetch['hair_color'];
			         $gender = $fetch['gender'];
			         $weight = $fetch['weight'];
			         $height = $fetch['height'];
			         $image = $fetch['image'];


 	 	         	?>
 	 	         	
 	 	         	
 	 	         </div>

 	 	       </div>

 	 	    <section class="user-detail">
 	 	    <fieldset class="basic-details"><legend >My details</legend>
 	 	    	<table>
 	 	    		<tr><th>
		 	 <label for="name">Full Name:</label></th>
		 	 <td><input type="text" value="<?php echo $fname.' '.$lname;?> " name="name" disabled="true"></td></tr>
		 	 <tr><th>
		 	<label for="email">Email Address:</label></th><td>
		 		<input type="text" value="<?php echo $email; ?>" name="email" disabled="true"></td></tr>
		 	<tr><th>
		 	<label for="country">Country:</label></th><td><input type="text" value="<?php echo $country; ?>" name="country" disabled="true"></td></tr>
		 	<tr><th>
		 	<label for="gender">Gender:</label></th><td><input type="text" value="<?php echo $gender; ?>" name="gender" disabled="true"></td></tr>
		 	<tr><th>
		 	<label for="Date of birth">Date of Birth:</label></th><td><input type="text" value="<?php echo $date_of_birth; ?>" name="date_of_birth" disabled="true"></td></tr>
		       </table>
            </fieldset>

            <fieldset class="basic-details"><legend >My details</legend>
             <table>
             	<tr><th>
		 	 <label for="height">Height:</label></th><td><input type="text" value="<?php echo $height; ?>" name="height" disabled="true"></td></tr>
		 	 <tr><th>
		 	<label for="weight">Weight:</label>
		 </th><td><input type="text" value="<?php echo $weight; ?>" name="weight" disabled="true"></td></tr>
		 	<tr><th>
		 	<label for="eyes">Eyes:</label>
		 </th><td>
		 		<input type="text" name="eyes"  disabled="true" value="<?php echo $eye_color; ?>">
		 	</td></tr>
		 	<tr><th>
		    <label for="hair">Hair:</label></th><td><input type="text" value="<?php echo $hair_color; ?>" name="hair" disabled="true"></td></tr>
		   </table>
            </fieldset>
           </section>
           <div class="save">
           	<input type="submit" class="button" name="save" value="Save" style="cursor: pointer;" />
           	
           </div>
 	 	      </div>
 	 	</fieldset>
 	 </form>
 </div>
 <script>
 	
     function formSubmit(){
     	$.ajax({
     		type:'POST',
     		url:'reset.php',
     		data:$('#frmBox').serialize(),
     		success:function(response){

     			$('#success').html(response);
     		}
     	});
     }
     

</script>