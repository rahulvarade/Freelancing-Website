<?php include('postacontestserver.php'); ?> 
<html>
    <head>
    	<title>Post a Contest</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
    	<link type="text/css" rel="stylesheet" href="css\login.css">
    	<link type="text/css" rel="stylesheet" href="css\postacontest.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
			}


		</style>

    </head>
    <body  background="images\back2.png">
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

	<!--Header part ends here-->		<hr>
	<!--Main Body-->

		<div class="main">
				

				<div class="contestform">
						<?php if(count($error)>0): ?>
							<div style="border:2px solid red;" >
								<?php foreach($error as $er): ?>
									<p style="color:red;"><?php echo $er; ?></p>
								<?php endforeach ?>
							</div>
						<?php endif ?>

					<form action="postacontest.php" method="post" enctype="multipart/form-data">
						<label><img src="images\icon1.png" width="35" height="35">&nbsp;&nbsp;&nbsp;&nbsp;<b>What work you require?</b></label>
						<br>

						<select size=1 scrollbar="1" name="type">
							<option >Website Designing</option>
							<option >IT</option>
							<option >Software</option>
							<option >Mobile</option>
							<option >Design</option>
							<option >Product sourcing and Manufacturing</option>
							<option >Sales and Marketting</option>
							<option >Customized (select skills manually)</option>
						</select>
						<br><br>

						<label><img src="images\icon2.png" width="35" height="35">&nbsp;&nbsp;&nbsp;&nbsp;<b>Tell us more about the contest</b></label>

						<p><b>Contest Name:</b></p>
						<input type="text" id="textboxhalf" placeholder="Write a Technical Report" name="cname">

						<p><b>Enter some skills that relate to the contest:</b></p>
						<input type="text" id="textboxhalf" placeholder="Enter skills separated by ','" name="skill">
						<p><b>Describe your contest in details:</b></p>
						<textarea rows="4" type="text" id="textboxhalf" placeholder="Describe your content here..." name="desc"></textarea>
						<br><br>

						<label><b>Upload related Documents and Pictures:</b></label>
						<p><b>Docs:</b><input type="file" id="textboxhalf" accept="application/msword,text/plain,application/pdf" name="docs"></p>
						<p><b>Pics:</b><input type="file" id="textboxhalf" accept="image/*" name="pics"></p>
						<br><br>

						<label><img src="images\icon3.png" width="35" height="35">&nbsp;&nbsp;&nbsp;&nbsp;<b>What's your budget?</b></label>
						<br>
						<input type="text" id="textboxhalf" placeholder="Enter Amount" name="budget">
						<select size=1 scrollbar="1" name="curr">
								<option name="inr">INR</option>
								<option name="inr">USD</option>
								<option name="inr">AUD</option>
								<option name="inr">CAD</option>
								<option name="inr">EUR</option>
								<option name="inr">GBP</option>
								<option name="inr">CPL</option>
								<option name="inr">SEK</option>
								<option name="inr">JPR</option>
								<option name="inr">MRY</option>
								<option name="inr">ZRS</option>
								<option name="inr">VND</option>
						</select>
						<p><b>Run your contest for:</b></p>
						<input type="text" id="textboxhalf" placeholder="Enter number of days..." name="nod">
						
						<p>By clicking 'Get Entries Now', you are indicating that you have read and agree to the 
						<a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>

						<center><button type="submit" class="btnuser" name="submitcontest">Get Entries Now</button>
						<button type="reset" class="btnuser">Reset All</button></center></center><br>
					</form>


				</div>

	
		</div>
	<!-- Main body ends here -->
	
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
			<p align="center"><font color="#cc0066" size="3">copyright © 2017</font></p>

		</div>

	</div>
	
	<!--Footer part ends here-->



	</body>
</html>






































