<?php
	include('server.php');
?>

<html>
    <head>
    	<title>Main Page</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
		<link type="text/css" rel="stylesheet" href="css\howitworks.css">
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
    	<div id="d1">
			<?php if(isset($_SESSION['username'])): ?>
			<a href="index.php"><img src="images\logo.jpg" id="i1"></a>
		<?php else: ?>
			<a href="index.html"><img src="images\logo.jpg" id="i1"></a>
		<?php endif ?>
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
	
	<div id="main1">
		<img id="back" src="images\h1.jpg">
		<div class="blocks">
			<br><br>
			<h1 style="color:#DC143C;">What kind of work can I get done?</h1>
			<p>
			How does "anything you want" sound? We have experts representing
			every technical, professional and creative field, providing a full range of solutions:</p>
			<ul id="alignl">
				<li><font size=5 color=#8B0000>Small scale, large scale, anything in-between
				<li>Fixed price or hourly terms
				<li>Specific skills, cost and schedule requirements</font>
			</ul><br>
			<p>Just give us the details of your project and our WOrKnhirEs will get it done faster,
			better, and cheaper than you could possibly imagine. Your jobs can be as big or small
			as you like, and be fixed price or hourly. You can even specify the schedule, costs, 
			and milestones.
			</p>
			<a href="postproject.php"><button style="background-color:#6A5ACD; padding:18px; border:none; border-radius:10px; font-size:25px; color:#FFF8DC; cursor:hand;">
			<b>Post a Project</b></button></a>
			
		</div><br><br><br><br>
		<img src="images\h2.jpg" width="100%"><br><br>
		<img id="back" src="images\h3.jpg">
		<div class="blocks">
			<h1>HOW?</h1>
			<p><b>1. Post your project</b></p>

			<p>It's always free to post your project. Invite our WOrKnhirEs people to submit bids, 
				or browse relevant project and make an offer. You'll have replies to your job within minutes!</p>

			<p><b>2. Choose the perfect project</b></p>
				<ul>
					<li><font size=5>Browse WOrKnhirEs profiles
					<li>Check relevant Projects
					<li>Compare proposals and select the best one
					<li>Award your project and your profile goes to work</font>
				</ul>
				<p><b>3. Pay when you are satisfied!</b></p>

				<p>Pay safely using our Milestone Payment system - release payments according to a schedule of goals you set,
				or pay only upon completion. You are in control, so you get to make the decisions.</p>
			
		</div><br><br><br>
		<div style="width:100%; height:400px; background-color:	#4169E1;">
		<br><br><br><br>
		<center>
		<p><font size=10 color="white">What are you waiting for?</font></p>
		<p><font size=5 color="white">Post a project today and get bids from talented WOrKnhirEs.</font></p>
		<a href="postproject.php"><button style="background-color:coral; padding:18px; border:none; border-radius:10px; font-size:25px; color:white; cursor:hand;">
			<b>Post a Project</b></button></a>
		</center>
		</div>
	</div>
	<br>
	<!-- main content end here-->
	<!--Footer part-->
	
	<div class="footer">
		<br>
		<div class="container1">
			<h1>Need work done?</h1>
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
	
	<!--Footer part ends here-->
	
	</body>
</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		