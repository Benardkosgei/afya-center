 
<link rel="stylesheet" type="text/css" href="css/diagnose.css">
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

 

 <div class="w3-container" style="background: #fff;">
 	<strong><h2>How are you feeling today?</h2></strong>
 	<div class="contentArea w3-container">
 		<div class="w3-row-padding w3-border-top">
 			<div class="w3-col l7 s12 w3-border-right">
 				<h3>Check What you're going through:</h3>
 				<form action="diagnoseresult.php" id="frmBox" method="POST" onsubmit="formSubmit(); return false">
 			<div class="w3-row-padding">
 					<div class="w3-col l6 s12">
			    <ul class="w3-ul w3-card-4" style="width: ">
					 <li> <input type="checkbox" name="symptom[]" value="Headache"> Headache</li>
					  <li><input type="checkbox" name="symptom[]" value="dry cough"> dry cough</li>
						  <li><input type="checkbox" name="symptom[]" value="high temperature of 38"> high temperature of 38</li>
						  <li><input type="checkbox" name="symptom[]" value="muscle pains"> muscle pains</li>
						  <li><input type="checkbox" name="symptom[]" value="a severe headache">  a severe headache</li>
						  <li><input type="checkbox" name="symptom[]" value="a widespread red rash"> a widespread red rash</li>
						  <li><input type="checkbox" name="symptom[]" value="Diarrhoea"> Diarrhoea</li>
				  </ul>
				</div>
				<div class="w3-col l6 s12">
				  <ul class="w3-ul w3-card-4" style="width:">		  
						  <li><input type="checkbox" name="symptom[]" value="Skin rash"> Skin rash</li>
						  <li><input type="checkbox" name="symptom[]" value="Fever"> Fever</li>
						  <li><input type="checkbox" name="symptom[]" value="tiredness"> tiredness</li>
						  <li><input type="checkbox" name="symptom[]" value="Sneeze"> Sneeze</li>
						  <li><input type="checkbox" name="symptom[]" value="muscle and joint pains"> muscle and joint pains</li>
						  <li><input type="checkbox" name="symptom[]" value="Fatigue"> Fatigue</li>
						  <li><input type="checkbox" name="symptom[]" value="vomiting"> vomiting</li>


			     </ul>
			   </div>
		   </div>
		   <div class="w3-row w3-padding-large">
		   	<div class="w3-col l6 s12">
		   		 <input   type="reset"class="w3-margin-left w3-button w3-red w3-round w3-hover-indigo" id="reset" onclick="rest()" name="reset" value="Clear All">
		   	</div>
		   	<div class="w3-col l6 s12 btnsend">
		   		<input id="formsubmit" type="submit"class="w3-margin-left w3-button w3-green w3-round w3-hover-indigo" name="submit" value="Process Result">
		   	</div>

		   	
		   </div>
			</form>
 				
 			</div>
 			<div class="w3-col l5  s12 ">
 				<h3 class="w3-center w3-border-bottom">Your results:</h3>
 				<p id="success"></p>



 			</div>
 			
 		</div>

 		
 	</div>
 	 <div class="w3-row-padding w3-padding-16">
    <div class="w3-col m7 s12 w3-center w3-border w3-indigo">
    	<h6>STEP 1</h6>
        <h3 class="w3-center">Selecting A Symptom</h3>
    </div>
    <div class="w3-col m5 w3-center w3-border">
    	<h6>STEP 2</h6>
        <h3>Possible Causes</h3>
    </div>
    
  </div>
 </div>
 <script>
 	
     function formSubmit(){
     	$.ajax({
     		type:'POST',
     		url:'diagnoseresult.php',
     		data:$('#frmBox').serialize(),
     		success:function(response){

     			$('#success').html(response);
     		}
     	});
     }
     

</script>
 