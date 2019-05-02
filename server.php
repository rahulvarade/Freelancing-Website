<?php
session_start(); //starting session (login)
$username="";
$email="";
$contact="";
$fname="";
$lname="";
$error=array();



//connect to database
$db=mysqli_connect('localhost','root','','worknhire');

// if the signup button clicked

if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$username=$_POST['username'];
	$password_1=$_POST['password_1'];
	$password_2=$_POST['password_2'];
	
		//validiting mobile number
		if(!preg_match('/^[0-9]{10}+$/',$contact))
		{
				array_push($error,"Please Enter Valid Mobile Number");
		}
		
		//validiting email address
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			array_push($error,"Please Enter Valid Email Address..");
		}
		//Validiting Passwords
		if($password_1 != $password_2)
		{
				array_push($error,"The passwords do not match");
		}
		
		// if no error save to database
		if(count($error)==0)
		{
			//$password=md5($password_1);// password encryption before saving
			$sql="INSERT INTO `users` (`fname`, `lname`, `email`, `username`, `password`, `contact`) 
				VALUES('$fname','$lname','$email','$username','$password_1','$contact')";//inserting to database
			mysqli_query($db,$sql);
			$_SESSION['username']= $username;
			$_SESSION['success']= "You are now logged in";
			header('Location: index.php'); // redirect to home page
			
		}
				
}
// if login button clicks
		// log user in from login page
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			if(count($error)==0)
			{
				//$password=md5($password);// password encryption to match with the saved password in database
				$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
				$result=mysqli_query($db,$query);
				if(mysqli_num_rows($result)==1)
				{
					//log user in 
					$_SESSION['username']= $username;
					$_SESSION['success']= "You are now logged in";
					header('Location: index.php'); // redirect to home page
				}
				else
				{
						array_push($error,"Wrong username/password combination");
				}
			}
		}

		
	

		//logout
	if (isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header('Location:loginpage.php');
	}

?>