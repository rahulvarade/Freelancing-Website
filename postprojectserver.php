<?php
include('server.php');
	if(empty($_SESSION['username']))
	{
		header('Location:loginpage.php');//if not login goto login page
	}
$pname="";
$skill="";
$desc="";
$docs="";
$curr="";
$type="";
//connect to database

$db = mysqli_connect('localhost','root','','worknhire') or die("Unable to Connect...");

// if the submit project button clicked



if(isset($_POST['projectsubmit']))
{
	$user=$_SESSION['username'];
	$pname=$_POST['pname'];
	$skill=$_POST['skill'];
	$desc=$_POST['desc'];
	
	$docs=$_FILES['docs'];
	$docs_name=$_FILES['docs']['name'];
	$docs_type=$_FILES['docs']['type'];
	$docs_size=$_FILES['docs']['size'];
	$docs_path=$_FILES['docs']['tmp_name'];
	$docs_store="uploaddocs/".$docs_name;
	move_uploaded_file($docs_path,$docs_store);
	
	$curr=$_POST['curr'];
	$type=$_POST['type'];
		// if no error save to database
		
			$ins="INSERT INTO `projects` (pid,username,`pname`, `skills`, `description`, `document`, `currency`, `ptype`)
						VALUES (NULL,'$user','$pname','$skill','$desc','$docs_name','$curr','$type')";  //inserting to database
			mysqli_query($db,$ins);
					
			header('Location: postproject.php'); // redirect to post project	
			
}


?>