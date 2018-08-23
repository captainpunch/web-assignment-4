<?php
#####
require 'select_menu.php';
include 'header.html';
#####
?>
<?php
$majors = file("majors.txt", FILE_IGNORE_NEW_LINES);
$countries = file('countries.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);							
$majorchoice = '';
$countrychoice ='';
$hello = "hello world";
echo $hello;

?>
	<form action='validation.php' method='post'>
		<h2> &nbsp &nbsp General Information</h2>
		<p><label>Name:<input type="text" name="name" size="20" maxlength="40" placeholder="Name" required="required" /></label></p>
		<label>Address:<input type="text" name="streetaddress" size="20" maxlength="40" placeholder='Address' required="required"/></label>
		<p><label>Address Line 2:<input type="text" name="addressline2" size="20" maxlength="40" placeholder='Address line 2' required="required"/></label></p>
		<p><label>E-mail:<input type="email" name="e-mail" size="20" maxlength="40" placeholder='e-mail address' required="required"/></label></p>
		<p><label>City:<input type="text" name="city" size="20" maxlength="40" placeholder='City' required="required" /></label></p>
		<p><label>State/ Province:<input type="text" name="state/province" size="20" maxlength="40" placeholder='State/Province' required="required" /></label></p>
		<p><label>Postal/ Zip Code:<input type="text" name="zipcode" size="6" maxlength="40" placeholder='Zipcode' required="required" /></label></p>
		<p><label>Phone Number:<input type="tel" name="phone" size="20" maxlength="40" placeholder='123-456-7890' required="required" /></label></p>
		
		<?php
		#####
			echo '<p><label>Country';
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {$countrychoice = $_REQUEST['country'];} 
				else {$countrychoice = '';}
			
			
			select_menu('country', $countries, $countrychoice);
			echo '</label></p><br>';
			
			echo '<p><label>Phone Number:<input type="tel" hidden/></label></p>';
		##### =======Needed a hiden input field sfter this php code, no idea why, but it works now=======
		?>

			<input type="radio" name="Visitor" id="highschoolstudent" value="highschoolstudent" required="required" /> Highschool Student<br>
			<input type ="radio" name="Visitor" id="TransferStudent"  value ="TransferStudent" required="required"/> Transfer Student<br>
		<p><label>Number of Guests:<select name ="NumberofGuests" required="required" >
			<option value="0"> 0 </option>
			<option value="1"> 1 </option>
			<option value="2"> 2 </option>
			<option value="3"> 3 </option>
			<option value="4"> 4 </option>
			<option value="5"> 5 </option></select></label></p><br>
			
		<h2> &nbsp &nbsp Please Select two tour dates. </h2> 
		<p><label for= "date">Choose your first date<input type="date" name="date" id="date" required="required" ></label></p>
		
		
		<p> <label> Time of Day: <select name ="time" required="required" >
				<option value="">  </option>
				<option value="Morning">Morning</option>
				<option value="Evening">Evening</option></label></select></p>
		<p><label for= "date">Choose your first date<input type="date" name="date1" id="date1" required="required" ></label></p>
		<p> <label> Time of Day: <select name ="time1" required="required" >
				<option value="">  </option>
				<option value="Morning">Morning</option>
				<option value="Evening">Evening</option></label></select></p>		

		<p><label>Major of interest:
		<?php select_menu('majors', $majors, $majorchoice);?>
		</label></p><br>
		
			
		</select></p>
		<p><label>Special needs or comments:</label></p>
		<textarea name="comments" id="comments" rows="4" cols="40" placeholder='What are you intrested in, do you need any accommidations'></textarea>
		
		<p><input type = "submit" name="submit" value="submit" /></p>
	</form>
	<a href="http://polytechnic.k-state.edu/admissions/visit/index.html">Kansas State University</a>
	</div>
</body>