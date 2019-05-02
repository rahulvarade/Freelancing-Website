<?php include('server.php');
	
?>
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
    	<title>Login</title>
		<link type="text/css" rel="stylesheet" href="css\login.css">
    </head>
	<body>

			<h2>Login Form</h2>
			<?php include('error.php');	?>
			<form method="post" action="loginpage.php">
				  <div class="imgcontainer">
				    <img src="images\loginlogo.png" alt="Avatar" class="avatar">
				  </div>

		  		<div class="containerlogin">
		  	  		<label><b>Username</b></label>
		  	  		<input type="text" placeholder="Enter Username" name="username" required>

		  	  		<label><b>Password</b></label>
		  	  		<input type="password" placeholder="Enter Password" name="password" required>
					<input type="checkbox" checked="checked"> Remember me<br>
		    		<center><button class="btnlogin1" type="submit" name="login">Login</button></center>
		 		 </div>

		  		<div class="containerlogin" style="background-color:#f1f1f1">
		  			  <a href="index.html"><button type="button" class="cancelbtn">Back to HomePage</button></a>
					  <p style="margin-left:55%;">Not a member yet? <a href="signup.php">Signup</a> now.
		  		</div>
			</form>

		</body>
</html>