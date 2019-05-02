<?php include('server.php');
	//if user is not logged in, they cant acces this page
	if(empty($_SESSION['username']))
	{
		header('Location:loginpage.php');
	}
?>
<html>
    <head>
    	<title>Main Page</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
		}


		</style>

    </head>
    <body  background="images\index.jpg" >
	
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
	<?php if(isset($_SESSION['success'])): ?>
		<h2 style="color:green;">
			<?php	
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h2>
		<?php endif ?>
	
	<!-- Main content of webpage-->

	<div id="main">
		<p id="quot">Hire expert Person for your</p>
		<p id="quot">Job, Online</p>
		<p id="quot1">Millions of small businesses use freelance jobs on</p>
		<p id="quot1">WorKnHire to turn their ideas into reality.</p><br>
		<?php if(isset($_SESSION['username'])):   ?>
			<a href="postajob.php"><Button class="b1">I Want To Hire</Button></a>
		<?php else: ?>
			<a href="loginpage.php"><Button class="b1">I Want To Hire</Button></a>
		<?php endif ?>
		<?php if(isset($_SESSION['username'])):   ?>
			<a href="browsejob.php"><Button class="b2">I Want To Work</Button></a><br>					
		<?php else: ?>
			<a href="loginpage.php"><Button class="b2">I Want To Work</Button></a><br>
		<?php endif ?>


	</div>
	<div id="block">
		<p id="quot3">
			<marquee><b>Are you looking for some work? Do you want to hire?          You are Welcome here "<?php echo $_SESSION['username'] ?>"</b>
			</marquee>
		</p>
	</div>

	<div id="block1">
		<p><img src="images\l3.jpg" width="30" height="30px"></img>     Website IT and Software</p>
	</div>

	<div class="imageportion">
		<div class="container">
			<img src="images\w1.jpg" alt="Website Design" class="image">
			<div class="middle">
				<?php if(isset($_SESSION['username'])):?>
					<div class="text"><a href="browsejob.php"><button class="button1">Website Design</button></a></div>
				<?php else: ?>
					<div class="text"><a href="loginpage.php"><button class="button1">Website Design</button></a></div>
				<?php endif ?>
				
		  	</div>
		</div>
		<div class="container">
			 <img src="images\w2.jpg" alt="Website Mockup" class="image">
			  <div class="middle">
				<?php if(isset($_SESSION['username'])):?>
					<div class="text"><a href="browsejob.php"><button class="button1">Website Mockup</button></a></div>
				<?php else: ?>
					<div class="text"><a href="loginpage.htm"><button class="button1">Website Mockup</button></a><div>
				<?php endif ?>
					

			  </div>
		</div>
		<div class="container">
			 <img src="images\w4.jpg" alt="Software Development" class="image">
			  <div class="middle">
				<?php if(isset($_SESSION['username'])):?>
					<div class="text"><a href="browsejob.php"><button class="button1">Software Development</button></a></div>
				<?php else: ?>
					<div class="text"><a href="loginpage.htm"><button class="button1">Software Development</button></a><div>
				<?php endif ?>
			  </div>
		</div>
	</div>




	<div id="block1">
			<p><img src="images\ll1.jpg" width="30" height="30px"></img>     Mobile</p>
		</div>

		<div class="imageportion">
			<div class="container" >
				<img src="images\aa.jpg" alt="Android App" class="image">
				<div class="middle">
				<?php if(isset($_SESSION['username'])):?>
					<div class="text"><a href="browsejob.php"><button class="button1">Android App</button></a></div>
				<?php else: ?>
					<div class="text"><a href="loginpage.htm"><button class="button1">Android App</button></a><div>
				<?php endif ?>
			  	</div>
			</div>
			<div class="container">
				 <img src="images\aa2.jpg" alt="Apple App" class="image">
				  <div class="middle">
				<?php if(isset($_SESSION['username'])):?>
					<div class="text"><a href="browsejob.php"><button class="button1">Apple App</button></a></div>
				<?php else: ?>
					<div class="text"><a href="loginpage.htm"><button class="button1">Apple App</button></a><div>
				<?php endif ?>
				  </div>
			</div>
			<div class="container">
				 <img src="images\aa3.jpg" alt="Blackberry App" class="image">
				  <div class="middle">
				<?php if(isset($_SESSION['username'])):?>
					<div class="text"><a href="browsejob.php"><button class="button1">Blackberry App</button></a></div>
				<?php else: ?>
					<div class="text"><a href="loginpage.htm"><button class="button1">Blackberry App</button></a><div>
				<?php endif ?>
				  </div>
			</div>
		</div><br>
	<a href="feedback.php">
		<img src="images\feedback1.jpg" id="feedback">
	</a><br>
	<div class="block2">
		<br>
		<h1><center>Get your project started now...</center></h2><br>
		<div class="imageportion">
			<?php if(isset($_SESSION['username'])):?>
				<a href="postproject.php"><img src="images\p1.jpg" id="block2img"></a>
			<?php else: ?>
				<a href="loginpage.php"><img src="images\p1.jpg" id="block2img"></a>
			<?php endif ?>
			<?php if(isset($_SESSION['username'])):?>
				<a href="postproject.php"><img src="images\p2.jpg" id="block2img"></a>
			<?php else: ?>
				<a href="loginpage.php"><img src="images\p2.jpg" id="block2img"></a>
			<?php endif ?>
			<?php if(isset($_SESSION['username'])):?>
				<a href="postproject.php"><img src="images\p3.jpg" id="block2img"></a>
			<?php else: ?>
				<a href="loginpage.php"><img src="images\p3.jpg" id="block2img"></a>
			<?php endif ?>
			<?php if(isset($_SESSION['username'])):?>
				<a href="postproject.php"><img src="images\p4.jpg" id="block2img"></a>
			<?php else: ?>
				<a href="loginpage.php"><img src="images\p4.jpg" id="block2img"></a>
			<?php endif ?>
		</div>
	</div>
	
	<!-- Main content of webpage ends here-->
	
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
</html>