<?php
include('server.php');
$email="";
$fname="";
$lname="";
$desc="";
$success="Your Response has been Recorded.";
//connect to database
$db=mysqli_connect('localhost','root','','worknhire');

// if the submit feedback button clicked

if(isset($_POST['submitfeedback']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$fr=$_POST['f'];
	$hlp=$_POST['h'];
	$qk=$_POST['q'];
	$kn=$_POST['k'];
	$dev=$_POST['d'];
	$use=$_POST['use'];
	$desc=$_POST['description'];
	$rating=$_POST['rating'];
		
		// if no error save to database
		
			$ins="INSERT INTO feedback (fname,lname,email,friendliness,helpfull,quickness,knowledge,development,serviceuse,improvingdetails,rating)
			VALUES ('$fname','$lname','$email','$fr','$hlp','$qk','$kn','$dev','$use','$desc','$rating')";//inserting to database
			mysqli_query($db,$ins);
			header('Location: feedback.php'); // redirect to feedback page
				
}
	if(isset($_POST['abt']))
	{
		header('location:aboutus.php');
	}
	if(isset($_POST['contact']))
	{
		header('location:contact.php');	
	}	

?>