<?php include('postprojectserver.php'); ?>
<html>
    <head>
    	<title>Post Project</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
    	<link type="text/css" rel="stylesheet" href="css\postproject.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
		}


		</style>

    </head>
    <body background="images\back1.jpg" >
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

	<!--Header part ends here-->
	<br><br>

	<div class="main">
			<form method="post" action="postproject.php" enctype="multipart/form-data">

				<label for="pname"><img src="images\icon1.png" width="35" height="35">&nbsp;&nbsp;What do you need done?</label><br><br>
				<input type="text"  name="pname" placeholder="What's the Name of your project.." required>
				<br><br>
				 <label for="descname"><img src="images\icon2.png" width="35" height="35">&nbsp;&nbsp;Tell us more about your project.</label><br><br>
				<input type="text" name="skill" placeholder="WHAT SKILLS ARE REQUIRED?" required>
				 <br>
				<textarea rows="4"  name="desc"  placeholder="Describe Your Project Here.."></textarea><br><br>

				<label for="fname"><img src="images\icon3.png" width="35" height="35">&nbsp;&nbsp;Upload File</label><br><br><br>
				<input class="fupload" type="file" name="docs"><br><br>

				<label for="radiobut"><img src="images\icon4.png" width="35" height="35" required>&nbsp;&nbsp;What budget do you have in mind?</label><br><br>
				<br><br>

				<select id="sel" size=1 scrollbar="1" name="curr">
					<option value="INR">INR</option>
					<option value="USD">USD</option>
				</select>

				
					
				<select id="sel1" size=1 scrollbar="1" name="type">
					<option>Micro Project (600 to 1500)</option>
					<option>Small Project (15000 to 30000)</option>
					<option>Large Project (150000 3000000)</option>
					<option> Extra Large Project (>300000)</option>
				</select><br><br>
				
				<input class="subresbutton" type="submit" name="projectsubmit" value="Submit"></input>&nbsp;
				<input class="subresbutton" type="reset" value="Reset"></input><br><br>
			</form>



				 <br>

	</div>
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