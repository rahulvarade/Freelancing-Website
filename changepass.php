<?php
	include('server.php');
	$opass;
	$npass1;
	$npass2;
	if(empty($_SESSION['username']))
	{
		header('Location:loginpage.php');//if not login goto login page
	}
	if(isset($_POST['psubmit']))
	{
		$opass=$_POST['opass'];
		$npass1=$_POST['npass1'];
		$npass2=$_POST['npass2'];
		$user=$_SESSION['username'];
		$sql="select username,password from users where username='$user'";
		$res=mysqli_query($db,$sql);
		if((mysqli_num_rows($res)==1) && $npass1==$npass2)
		{
			$row=mysqli_fetch_row($res);
			if($row[1]==$opass)
			{
				$sql="UPDATE users set password='$npass1' where username='$user'";
				mysqli_query($db,$sql);
				echo "Password changed successfully...";
			}
		}
		else
			echo "Error Try Again...";
	}
?>

<html>
    <head>
    	<title>Change Password</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
		<link type="text/css" rel="stylesheet" href="css\changepass.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
		}


		</style>

    </head>
    <body  background="images\myprofile.jpg" >
	
	<!--Header part-->
	
   	<header class="h1">
    	<div id="d1">
			<a href="index.php"><img src="images\logo.jpg" id="i1"></a>
		</div>
		<div class="dropdown">
			<button class="dropbtn"><h1>Hire Person</h1></button>
			<div class="dropdown-content">
	    		<a href="postproject.php">Post a Project</a>
	    		<a href="postacontest.php">Post a Contest</a>
	    		<a href="postajob.php">Post a Job</a>
			</div>
		</div>
		<div class="dropdown">
					<button class="dropbtn"><h1>Find Work</h1></button>
					<div class="dropdown-content">
			    		<a href="browseproject.php">Browse Project</a>
			    		<a href="browsecontest.php">Browse Contest</a>
			    		<a href="browsejob.php">Browse Categories</a>
					</div>
		</div>
		<a href="howitworks.php"><h2 style="color:red;">How it Works</h2></a>
		<pre>					</pre>
		
		
		<?php if(isset($_SESSION["username"])): ?>
		
			
			<div class="dropdown">
			<button class="dropbtn"><img width="60px" height="60px" src="images\loginperson.png"></img></h1></button>
			<div class="dropdown-content">
	    		<a href="myprofile.php">My Profile</a>
	    		<a href="#">My Work</a>
	    		<a href="index.php?logout='1'">Logout</a>
			</div>
		</div>			
		<?php endif ?>
	</header>

	<!--Header part ends here-->
	<hr><br>
	<form action="changepass.php" method="post">
		<div class="cont">
			<div class="lcont">
				<center>
				<label style="color:#922B21;font-size:30;font-weight:bold;">Change Your Password</label><br><br>
				<label id="l">Enter Old Password:</label><input type="password" class="bar" name="opass" required ></input><br><br>
				<label id="l">Enter New Password:</label><input type="password" class="bar" name="npass1" required ></input><br><br>
				<label id="l">Enter New Password:</label><input type="password" class="bar" name="npass2" required ></input><br><br>
				<input type="submit" name="psubmit" class="subm" value="Record"></input>
				<center>
			</div>
			<div class="lcont">
				<center>
					<label id="ll" style="color:red;">Welcome</label><br>
					<img width="200px" height="200px" src="images\loginperson.png"></img>
					<br>
					<label id="ll" style="color:red;"><?php echo $_SESSION['username'] ?> </label>
					<br>
				</center>
			</div>
		</div>
	</form>
	
	
	
	
	
	
	
	
	
	<!--Footer part-->
	
	<div class="footer">
		<br>
		<div class="container1">
			<h1 id="">Need work done?</h1>
			<h4 id="alignl">Post your project and receive relative money from WOrKnhirE.com. Our reputation
				system will make it easy to find the perfect opportunity for your job.
				It's the simplest and safest way to get work done online.</h4>

			<h4 id="alignl">We have millions of jobs: from web design, mobile app development, virtual assistants,
				product manufacturing and graphic design. Whatever your needs, there will be a opportunity
				to get it done.</h4>
		</div>
		<div class="container1">
			<a href="aboutus.php"><button class="button1">About Us</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="contact.php"><button class="button1">Contact Us</button></a><br>
            <h3>Developer:&nbsp;&nbsp;&nbsp;Shubham Kumar and Rahul Varade
            <br><br><br><br><br><br><br>
			<p align="center"><font color="comingsoon.htmcc0066" size="3">copyright © 2017</font></p>

		</div>

	</div>
	
	<!--Footer part ends here-->
	</body>
</html