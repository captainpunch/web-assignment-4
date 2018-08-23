<?php
include 'header.html';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	
	if (isset($_POST['Zipcode'],
	$_POST['name'],
	$_POST['streetaddress'],
	$_POST['E-mail'],
	$_POST['city'],
	$_POST['State/Province'],
	$_POST['Phone'],
	//$_POST['date1'],
	//$_POST['Timeofday'],
	$_POST['majors'],
	$_POST['Visitor'])
	&& is_numeric($_POST['Zipcode']))
	{
		// Print the results:		
		echo '<h1>Summary of information</h1>
			<p> Welcome: ' .($_REQUEST['name']). ' </p>
			<p> Address: ' .($_REQUEST['streetaddress']). '</p>
			<p> Address Line 2: ' .($_REQUEST['streetaddressline2']). '</p>
			<p> E-mail: ' .($_REQUEST['E-mail']). '</p>
			<p> City: ' .( $_REQUEST['city']). '</p>
			<p> State/Province: ' .( $_REQUEST['State/Province']). '</p>
			<p> Postal/ Zip Code: ' .( $_REQUEST['Zipcode']). '</p>
			<p> Country: ' .( $_REQUEST['country']). '</p>
			<p> Phone Number: ' .( $_REQUEST['Phone']). '</p>
			<p> Visitor: ' .( $_REQUEST['Visitor']). '</p>
			<p> Number of Guests: ' .($_POST['NumberofGuests']). '</p>
			<p> Date Chosen: ' .($_POST['date1']). '</p>
			<p> Time of day: ' .($_POST['Timeofday']). '</p>
			<p> Second date chosen: ' .($_POST['date2']). '</p>
			<p> Time of day: ' .($_POST['Timeofday1']). '</p>
			<p> Major Interested In: ' .($_POST['majors']). '</p>
			<p> Comments: ' .($_POST['comments']). '</p>';
	}
	else 
	{ // Invalid submitted values.
		echo '<h1>Error!</h1>
		<p> Please correct your information: ' .($_REQUEST['name']). ' </p>
		<p class="error">Please enter a valid and zip code number.</p>';
		require('ass4.php');
	}
}	
?>	
</div>
</body>
</html>