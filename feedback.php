<?php include('feedbackserver.php'); ?>

<html>
    <head>
    	<title>Main Page</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
		<link type="text/css" rel="stylesheet" href="css\feedback.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
			}

		</style>

    </head>


<body background="images\fb.jpg">

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

	<hr><br>
	
		
	<!-- Main content of webpage-->
	
	<div class="mainbody">
		
			<form method="post" action="feedback.php">
			<center><u><h1>FeedBack-</h1></u>  </center>
			<p style="font-size:25px; font-weight:bold;">Full Name</p>
			<input type="text" placeholder=" First Name" name="fname" required>
			<input type="text" placeholder=" Last Name" name="lname" required><br><br>
			<h3 style="font-size:25px; font-weight:bold;">E-Mail</h3>
			<input type="text" placeholder=" myname@example.com" name="email" required><br><br>
			<center><h1>Overall Satisfaction of the service </h1></center>
			<table cellpadding="15px">
				<tr>
					<th></th>
					<th>Very Satisfied</th>
					<th>Satisfied</th>
					<th>Neutral</th>
					<th>Unsatisfied</th>
					<th>Very Unsatisfied</th>
				</tr>
				<tr style="background-color:#FFDFFF;">
					<th>Friendliness</th>
					<td align="center"><input type="radio" name="f" value="Very Satisfied"></td>
					<td align="center"><input type="radio" name="f" value="Satisfied" checked></td>
					<td align="center"><input type="radio" name="f" value="Neutral"></td>
					<td align="center"><input type="radio" name="f" value="Unsatisfied"></td>
					<td align="center"><input type="radio" name="f" value="Very Unsatisfied"></td>
				</tr>
				<tr style="background-color:#F7F5FE;">
					<th>Helpfull</th>
					<td align="center"><input type="radio" name="h" value="Very Satisfied"></td>
					<td align="center"><input type="radio" name="h" value="Satisfied" checked></td>
					<td align="center"><input type="radio" name="h" value="Neutral"></td>
					<td align="center"><input type="radio" name="h" value="Unsatisfied"></td>
					<td align="center"><input type="radio" name="h" value="Very Unsatisfied"></td>
				</tr>
				<tr style="background-color:#FFDFFF;">
					<th>Quickness</th>
					<td align="center"><input type="radio" name="q" value="Very Satisfied"></td>
					<td align="center"><input type="radio" name="q" value="Satisfied" checked></td>
					<td align="center"><input type="radio" name="q" value="Neutral"></td>
					<td align="center"><input type="radio" name="q" value="Unsatisfied"></td>
					<td align="center"><input type="radio" name="q" value="Very Unsatisfied"></td>
				</tr>
				<tr style="background-color:#F7F5FE;">
					<th>Knowledge</th>
					<td align="center"><input type="radio" name="k" value="Very Satisfied"></td>
					<td align="center"><input type="radio" name="k" value="Satisfied" checked></td>
					<td align="center"><input type="radio" name="k" value="Neutral"></td>
					<td align="center"><input type="radio" name="k" value="Unsatisfied"></td>
					<td align="center"><input type="radio" name="k" value="Very Unsatisfied"></td>
				</tr>
				<tr style="background-color:#FFDFFF;">
					<th>Development</th>
					<td align="center"><input type="radio" name="d" value="Very Satisfied"></td>
					<td align="center"><input type="radio" name="d" value="Satisfied" checked></td>
					<td align="center"><input type="radio" name="d" value="Neutral"></td>
					<td align="center"><input type="radio" name="d" value="Unsatisfied"></td>
					<td align="center"><input type="radio" name="d" value="Very Unsatisfied"></td>
				</tr>
				<tr><tr>
				<tr>
					<th colspan=6 align="center">Would you use our customer service in the future?</th>
				</tr>
				<tr>
					<td align="center" colspan=2><input type="radio" name="use" value="YES" checked>Yes</td>
					<td align="center" colspan=2><input type="radio" name="use" value="NO">No</td>
					<td align="center" colspan=2><input type="radio" name="use" value="MAYBE">Maybe</td>
				</tr>
				<tr>
					<th colspan=6 align="center">How can we improve our service?</th>
				</tr>
				<tr>
					<th colspan=6 align="center"><textarea rows=10 cols=100 placeholder="  Type description here..." name="description" ></textarea></th>
				</tr>
				<tr>
					<th colspan=6 align="center">Rate Us (out of 10):</th>
				</tr>
				<tr>
					<td align="center" colspan=6 style="background-color:coral;">
						<input type="radio" name="rating" value="1">1 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="2">2 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="3">3 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="4">4 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="5" checked>5 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="6">6 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="7">7 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="8">8 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="9">9 &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="rating" value="10">10
						</td>
				</tr>
				<tr>
					<td colspan=3 align="right"><input type="submit" value="SUBMIT" name="submitfeedback" onclick="display()"style="background-color:#FF0000; padding:18px; border:none; border-radius:10px; font-size:25px; color:white; cursor:hand;" ></td>
					<td colspan=3 ><button type="reset" value="RESET" style="background-color:#D73E68; padding:18px; border:none; border-radius:10px; font-size:25px; color:white; cursor:hand;">RESET</button></td>
				</tr>
				
				
				</form>
			</table>
	</div><br><br><br>
			
			<!--Main body end here-->
			
			<!--Footer part-->
			<br>
			
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
				<form action="feedbackserver.php" method="post">
					<div class="container1">
						<a href="aboutus.php"><button type="submit "class="button1" name="abt">About Us</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="contact.php"><button type="submit" class="button1" name="contact">Contact Us</button></a><br>
						<h3>Developer:&nbsp;&nbsp;&nbsp;Shubham Kumar and Rahul Varade
						<br><br><br><br><br><br><br>
						<p align="center"><font color="cc0066" size="3">copyright © 2017</font></p>

					</div>
				</form>

			</div>
			<div class="freespace">
			</div>
		</body>
	
	<!--Footer part ends here-->
		</body>
	</html>