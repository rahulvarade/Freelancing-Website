<?php include('server.php');
$sql="";
$user=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','worknhire');
	//if user is not logged in, they cant acces this page
	if(empty($_SESSION['username']))
	{
		header('Location:loginpage.php');
	}
	

	
	if(isset($_POST['postproject']))
	{
		$sql="select * from projects where username='$user'";
		$res=mysqli_query($db,$sql);
	}
	if(isset($_POST['postcontest']))
	{
		$sql="select * from contests where username='$user'";
		$res=mysqli_query($db,$sql);
	}
	if(isset($_POST['postjob']))
	{
		$sql="select * from jobs where username='$user'";
		$res=mysqli_query($db,$sql);
	}
	if(isset($_POST['browseproject']))
	{
		$sql="select * from browseproj where emp_user='$user'";
		$res=mysqli_query($db,$sql);
	}
	if(isset($_POST['browsecontest']))
	{
		$sql="select * from browsecontest where cuser='$user'";
		$res=mysqli_query($db,$sql);
	}
	if(isset($_POST['browsejob']))
	{
		$sql="select * from browsejob where cuser='$user'";
		$res=mysqli_query($db,$sql);
	}
	
	
	
	
?>
<html>
    <head>
    	<title>My Work Page</title>
		<link type="text/css" rel="stylesheet" href="css\index.css">
    	<link type="text/css" rel="stylesheet" href="css\mywork.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
		}


		</style>

    </head>
    <body  background="images\mywork.jpg" >
	
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
	
	<!--Data Retrival for post  project -->
	<hr>
	<center><label id="he">:::Choose Any Option Below:::</label></center>
	<form action="mywork.php" method="post">
		<div class="upper">
			<input class="buto" type="submit" name="postproject" value="post project"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="buto" type="submit" name="postcontest" value="post Contest"></input>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="buto" type="submit" name="postjob" value="post job"></input>
		</div>
		<div class="upper">
			<input class="buto" type="submit" name="browseproject" value="browse project"></input>
			<input class="buto" type="submit" name="browsecontest" value="browse Contest"></input>
			<input class="buto" type="submit" name="browsejob" value="browse job"></input>
		</div><br>
	</form>
	<br>
	<hr>
	
	<?php if(isset($_POST['postproject'])): ?>
		<div class="cont">
				<div class="cont1">
					<b>Project Name</b>
				</div>
				<div class="cont2">
					<b>Description</b>
				</div>
			</div>	
		<?php foreach ($res as $r): ?>
			<div class="cont">
				<div class="pcont1">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['pname'] ?></b>			
				</div>
				<div class="pcont2">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['description']?></b> 
				</div>
			</div>	
		<?php endforeach ?>
	<?php endif ?>	
			
	<?php if(isset($_POST['postcontest'])): ?>
		<div class="cont">
				<div class="cont1">
					<b>Contest Name</b>
				</div>
				<div class="cont2">
					<b>Description</b>
				</div>
			</div>	
		<?php foreach ($res as $r): ?>
			<div class="cont">
				<div class="pcont1">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['type'] ?></b>			
				</div>
				<div class="pcont2">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['description']?></b> 
				</div>
			</div>	
		<?php endforeach ?>
	<?php endif ?>
	
	<?php if(isset($_POST['postjob'])): ?>
		<div class="cont">
				<div class="cont1">
					<b>Job Name</b>
				</div>
				<div class="cont2">
					<b>Description</b>
				</div>
			</div>	
		<?php foreach ($res as $r): ?>
			<div class="cont">
				<div class="pcont1">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['topic'] ?></b>			
				</div>
				<div class="pcont2">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['description']?></b> 
				</div>
			</div>	
		<?php endforeach ?>
	<?php endif ?>
	
	<?php if(isset($_POST['browseproject'])): ?>
		<div class="cont">
				<div class="cont1">
					<b>Project Name</b>
				</div>
				<div class="cont2">
					<b>Applied Date</b>
				</div>
			</div>	
		<?php foreach ($res as $r): ?>
			<div class="cont">
				<div class="pcont1">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['pname'] ?></b>			
				</div>
				<div class="pcont2">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['date']?></b> 
				</div>
			</div>	
		<?php endforeach ?>
	<?php endif ?>
	
	<?php if(isset($_POST['browsecontest'])): ?>
		<div class="cont">
				<div class="cont1">
					<b>Contest Name</b>
				</div>
				<div class="cont2">
					<b>Applied Date</b>
				</div>
			</div>	
		<?php foreach ($res as $r): ?>
			<div class="cont">
				<div class="pcont1">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['cname'] ?></b>			
				</div>
				<div class="pcont2">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['date']?></b> 
				</div>
			</div>	
		<?php endforeach ?>
	<?php endif ?>
	<?php if(isset($_POST['browsejob'])): ?>
		<div class="cont">
				<div class="cont1">
					<b>Job Name</b>
				</div>
				<div class="cont2">
					<b>Applied Date</b>
				</div>
			</div>	
		<?php foreach ($res as $r): ?>
			<div class="cont">
				<div class="pcont1">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['topic'] ?></b>			
				</div>
				<div class="pcont2">
					<b style="font-size:22;color:#2d5986;"><?php echo $r['cdate']?></b> 
				</div>
			</div>	
		<?php endforeach ?>
	<?php endif ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
