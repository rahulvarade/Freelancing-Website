<?php include('server.php');	?>
<html>
    <head>
    	<style>
    		body{
    				width:500px;
					height:1000px;
					margin-left:420px;
					margin-top:50px;
    			}
    	</style>
    	<title>Sign Up</title>
		<link type="text/css" rel="stylesheet" href="css\login.css">
    </head>
	<body>
			<a href="index.html"><button style="padding:12px; background-color:	#008080; font-size:15px; color:#FFF8DC; "><b>Back to Home Page</b></button></a>
			<br>
			<h2>Sign-Up Form</h2>
			<?php include('error.php');	?>
			<form method="post" action="signup.php">
				<div class="imgcontainer">
				    <img src="images\loginlogo.png" alt="Avatar" class="avatar">
				</div>

		  		<div class="containerlogin">
		  			<label><b>Enter First Name:</b></label>
		  	  		<input type="text" placeholder="Enter First Name" name="fname" value="<?php echo $fname; ?>" required>
					
					<label><b>Enter Last Name:</b></label>
		  	  		<input type="text" placeholder="Enter Last Name" name="lname" value="<?php echo $lname; ?>" required>
					
					<label><b>Enter Email Address:</b></label>
		  	  		<input type="text" placeholder="Enter Valid Email Id" name="email" value="<?php echo $email; ?>" required>

		  	  		<label><b>Contact:</b></label>
		  	  		<input type="text" placeholder="Valid Contact Number To Contact" name="contact" value="<?php echo $contact; ?>" required>

					<label><b>Enter Username:</b></label>
		  	  		<input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" required>

		  	  		<label><b>Enter Password:</b></label>
		  	  		<input type="password" placeholder="Enter Password" name="password_1" required>

		  	  		<label><b>Confirm Password</b></label>
		  	  		<input type="password" placeholder="Confirm Password" name="password_2" required>
					<br>
		    		<center><button class="btnlogin1" type="submit" name="signup" onclick="check(this)">Create Account</button></center>
		 		 </div>
		 		 <div>
		 		 	<p>By registering you confirm that you accept the <a href="#">Terms and Conditions</a> and
		 		 	<a href="#">Privacy Policy</a>
		 		 </div>
		 		 <br><hr>
				<p>Already a WOrKnhirE.com member? <a href="loginpage.php">Log In</a>

			</form>

		</body>
</html>