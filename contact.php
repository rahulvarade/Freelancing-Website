<?php include('server.php');


//connect to database
$db=mysqli_connect('localhost','root','','worknhire');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];

	//validiting email address
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
			$_SESSION['e']="Fail in Email";
			
	}
	$sql="INSERT INTO `contact` (`email`, `sub`, `msg`) VALUES ('$email', '$sub', '$msg')";
	mysqli_query($db,$sql);
}

?>
<html>
    <head>
    	<title>Contact</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
		<link type="text/css" rel="stylesheet" href="css\postacontest.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
		}


		</style>

    </head>
    <body  background="images\t9.jpg" >
	
	<!--Header part-->
	
   	<header class="h1">
    	<?php if(isset($_SESSION['username'])): ?>
			<div id="d1">
				<a href="index.php"><img src="images\logo.jpg" id="i1"></a>
			</div>
		<?php else : ?>
						<div id="d1">
				<a href="index.html"><img src="images\logo.jpg" id="i1"></a>
			</div>
		<?php endif ?>
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
		<pre>				</pre>
		
		
		<?php if(isset($_SESSION["username"])): ?>
			<h2 style="color:red;"><?php echo $_SESSION['username'] ?></h2>&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="dropdown">
			<button class="dropbtn"><img width="60px" height="60px" src="images\loginperson.png"></img></h1></button>
			<div class="dropdown-content">
	    		<a href="changepass.php">Change Password</a>
	    		<a href="mywork.php">My Work</a>
	    		<a style="color:red"href="index.php?logout='1'">Logout</a>
			</div>
		</div>
			
			
			
			
			
		<?php endif ?>
	</header>

	<!--Header part ends here-->
	<!-- main content of webpage-->
	<div class="mainofcontact">
			<div id="first">
				<form method="post" action="contact.php" enctype="multipart/form-data">
					<h1><b>Contact WOrKnhirE.com</b></h1><br>
					<p>Your Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php if(isset($_SESSION['e'])): ?>
						<B style="color:red">#Enter Valid Email Address...</B>
					<?php unset($_SESSION['e']); endif ?>
					</p>
								
					
					
					<input type="text" id="textboxhalf" name="email" placeholder="Enter your Valid Email Id" required><br>
					<p>Subject</p>
					<input type="text" id="textboxhalf" name="sub" placeholder="Enter Subject" required><br>
					<p>Message</p>
					<textarea rows="5" id="textboxhalf" name="msg" placeholder="Enter Message..."></textarea><br><br>
					<button type="submit" value="submit" name="submit" style="background-color:#6A5ACD; padding:18px; border:none; border-radius:10px; font-size:25px; color:#FFF8DC; cursor:hand;">
					<b>Submit</b></button>
				</form>
			</div>
			<div id="second">
				<h2><u>Direct Contact:</u></h2>
				<p>Email : info@worknhire.com</p>
				<p>Toll Free: 1818181818</p>
				<p>Emergency: 9876543210</p>
				<h2><u>Corporate Address:</u></h2>
				<p>Block: worknhire.com,</p>
				<p>VIT, Pune</p>
				<p>Contact: 9876543210</p>
			</div>
		
	</div>
	<!-- main content end here-->
	<br><br><br><br>
	<!--Footer Part-->
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
			<p align="center"><font color="#cc0066" size="3">copyright © 2017</font></p>

		</div>

	</div>
	<!--Footer Part ends here-->
	</body>
	</html>
	
	
	
	
