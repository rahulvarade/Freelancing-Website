<?php
	include('server.php');	
	if(empty($_SESSION['username']))
	{
		header('Location:loginpage.php');//if not login goto login page
	}
$type="";
$topic="";
$skill="";
$desc="";
$docs="";
$pics="";
$amt="";
$curr="";
$nod="";
$user=$_SESSION['username'];
$error=array();
//connect to database
$db=mysqli_connect('localhost','root','','worknhire') or die("Unable to Connect...");

// if the submit project button clicked

if(isset($_POST['submitcontest']))
{
	$user=$_SESSION['username'];
	$type=$_POST['type'];
	$topic=$_POST['cname'];
	$skill=$_POST['skill'];
	$desc=$_POST['desc'];
	//uploading docs
	$docs=$_FILES['docs'];
	$docs_name=$_FILES['docs']['name'];
	$docs_type=$_FILES['docs']['type'];
	$docs_size=$_FILES['docs']['size'];
	$docs_path=$_FILES['docs']['tmp_name'];
	$docs_store="uploaddocs/".$docs_name;
	move_uploaded_file($docs_path,$docs_store);
	//uploading pics
	$pics=$_FILES['pics'];
	$pics_name=$_FILES['pics']['name'];
	$pics_type=$_FILES['pics']['type'];
	$pics_size=$_FILES['pics']['size'];
	$pics_path=$_FILES['pics']['tmp_name'];
	$pics_store="uploadpics/".$pics_name;
	move_uploaded_file($pics_path,$pics_store);
	
	$amt=$_POST['budget'];
	$curr=$_POST['curr'];
	$nod=$_POST['nod'];
	
	//form validation
	if(empty($topic))
	{
		array_push($error,"Please enter topic");
	}
	if(empty($amt))
	{
		array_push($error,"Please enter your budget");
	}
	if(empty($nod))
	{
		array_push($error,"Please enter the no. of days");
	}
	if(count($error)==0)
	{
	
		// if no error save to database
		
			/*$ins="INSERT INTO contests (username,type,contestname,skills,description,document,picture,budget,currency,noofday)
				VALUES('$user','$type','$topic','$skill','$desc','$docs_name','$pics_name','$amt','$curr','$nod')";//inserting to database*/
				
			$ins="INSERT INTO `contests` (`pid`, `username`, `type`, `contestname`, `skills`, `description`, `document`, `picture`, `budget`, `currency`, `noofday`) 
						VALUES (NULL, '$user', '$type', '$topic', '$skill', '$desc', '$docs_name', '$pics_name', '$amt', '$curr', '$nod')";
			$rrr=mysqli_query($db,$ins);
			if($rrr)
			{
				echo "Recorded Successfully...";
			}
			header('Location: postacontest.php'); // redirect to post project			

	}
}


?>