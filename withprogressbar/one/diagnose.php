	<!-- multistep form -->
<div class="diagnose-page">
	<section class="d-title" style="background: linear-gradient(to right, #2af598 0%, #009efd 100%);padding-bottom:10px;">
	<h1 style="padding:10px 0 0 20px;">Diagnosis</h1>
	 
   </section>
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		   <li class="active">Age</li>
		   <li>	Gender</li>
		   <li>Treament type</li>
           <li>Symptoms</li>
           <li>Diagnosis</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">HOW OLD ARE YOU?</h2>
		<h3 class="fs-subtitle">This is step 1</h3>
		 
		  <select class="select">
		      <option value="">Please select</option>
		      <option value="a">Newborn 0-28 day</option>
		      <option value="b">Infant 29 day-1 yr</option>
		      <option value="c">Younger Child 1-5 yrs</option>
		      <option value="d">Older Child 6-12 yrs</option>
		      <option value="e">Adolescent 13-16 yrs</option>
		      <option value="f">Young Adult 17-29 yrs</option>
		      <option value="g">Adult 30-39 yrs</option>
		      <option value="h">Adult 40-49 yrs</option>
		      <option value="i">Adult 50-64 yrs</option>
		      <option value="j">Seior 65 yrs - over</option>


         </select>
       <br/>
         <input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">WHAT IS YOUR GENDER AT BIRTH?</h2>
		<h3 class="fs-subtitle">Choose your gender by selecting the appropriate response.</h3>
		<p >
		<input type="radio" name="gender" value="male">Male<br/>
		<input type="radio" name="gender" value="female">Female<br/>
		<input type="radio" name="gender" value="others">Others
        </p>
       <br/>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
<fieldset>
		<h2 class="fs-title">Treament Type</h2>
		<h3 class="fs-subtitle"></h3>
		<select>
  <option value="a">Insuline</option>
    <option value="b">Oral Treament</option>
    </select>
     <br/>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
     <fieldset>
		<h2 class="fs-title">Add Symptoms</h2>
		<h3 class="fs-subtitle"></h3>
		<input type="number" name="quantity" min="30" max="50" placeholder="Average Fast Glucose?">
      <br/>
	<input type="button" name="next" class="process action-button" value="process" style="width: 100%;" />
         <br/>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Details</h2>
		<h3 class="fs-subtitle">HBA1C</h3>
		<input name="name" placeholder="HBAA1C" class="name" required />
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="submit action-button" value="Calculate" />
	</fieldset>
</form>
</div>
 
<!-- jQuery -->
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/multistep-progress.js"></script>