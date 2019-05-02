<?php
require('server.php');
if(!(isset($_SESSION['username'])))
{
	header('location:loginpage.php');
}
$pname="";
$skill="";
$desc="";
$docs="";
$curr="";
$type="";
//connect to database

$db = mysqli_connect('localhost','root','','worknhire') or die("Unable to Connect...");

$sql="select * from contests";
$result=mysqli_query($db,$sql);
if(isset($_POST['bsearch']))
{
	$se=$_POST['search'];
	$sql="select * from contests where type='$se'";	
	$result=mysqli_query($db,$sql);
}
if(isset($_POST['bskills']))
{
	$se=$_POST['skills'];
	$sql="select * from contests where skills='$se'";	
	$result=mysqli_query($db,$sql);
}
	
if(empty($result))
		echo"No records Found...";
	
if(isset($_POST['fsubmit']))
{
	$id=$_POST['id'];
	$sql="select username,type from contests where pid='$id'";
	$res=mysqli_query($db,$sql);
	$cuser=$_SESSION['username'];
	if(mysqli_num_rows($res)==1)
	{
		$row = mysqli_fetch_row($res);
		$sql="INSERT INTO browsecontest(cid,cuser,ouser,cname,date) VALUES ('$id','$cuser','$row[0]','$row[1]',now())";
		mysqli_query($db,$sql);
		
	}
	else	
		echo"Invalid ID ...";
}
if(isset($_POST['abt']))
{
	header('location:aboutus.php');
}
if(isset($_POST['contact']))
{
	header('location:contact.php');
}

	
?>
<html>
    <head>
    	<title>Browse Contests</title>
    	<link type="text/css" rel="stylesheet" href="css\index.css">
    	<link type="text/css" rel="stylesheet" href="css\browsecontest.css">
    	<style>
		body{
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-attachment: fixed;
		}


		</style>

    </head>
    <body background="images\browsecontest.jpg" >
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
	
		
	
	
	
	
	
	<form action="browsecontest.php" method="POST">
		<br><br><center>
		<B id="label">Search : </B>
		<input class="bar" type="text" name="search" placeholder="Enter name of project to search "></input>
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Apply" name="bsearch">
		<br><br><br>
		<B id="label">Skills : </B>&nbsp;
		<input class="bar" type="text" name="skills" placeholder="Search for skills "></input>
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Apply" name="bskills">
		<br><br><br></center>
		<hr>
		
		<div class="cont">
			<div class="cont1">
				<b>Project Name</b>
			</div>
			<div class="cont2">
				<b>Fees</b>
			</div>
			<div class="cont2">
				<b>Days</b>
			</div>
		</div>	
		
		
		
		
		<?php foreach ($result as $r): ?>
		<div class="cont">
			
			<div class="pcont1">
				<b style="font-size:26;color:#FFD700;"><?php echo "ID ".$r['pid']."   " ?></b>
				<b style="font-size:26;color:#DAA520;"><?php echo $r['type'] ?></b><br>
				<b><u>Skills: </u> <?php echo $r['skills'] ?><br>
				<u>Description: </u><p id="desc">&nbsp;&nbsp;&nbsp;<?php echo $r['description'] ?></p>
				<?php if($r['document']==''):?>
					<u>Attached Docs.:</u>Not attached...
				<?php else: ?>
					<u>Attached Docs.:</u>
					<?php if($r['document']!=''): ?>
						<a href= "uploaddocs/<?php echo $r['document'] ?>"><input class="disbutt" type="button" name="fdis" value="Display <?php echo $r['document']?>"></input></a>
					<?php endif ?>				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php if($r['picture']!=''): ?>
						<a href= "uploadpics/<?php echo $r['picture'] ?>"><input class="disbutt" type="button" name="fdis" value="Display <?php echo $r['picture']?>"></input></a>
					<?php endif ?>
				<?php endif ?>
			</div>
			<div class="spcont">
				<div id="spcont1">
					<b><?php echo $r['currency']."   ".$r['budget'] ?> </b>
				</div>
				<div id="spcont1">
					<b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $r['noofday'] ?> </b>
				</div>
			</div>		
		</div>	
		<?php endforeach ?>
		
		<div class="low">
		  <b class="lbolt" > Enter Contest_Id:</b>
		  <input class="lbar" type="text" class="bar" name="id"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type="submit" class="butt" name="fsubmit"></input>
		</div>
		  		
	</form>
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
			<form action="browsecontest.php" method="post">
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
				
</html>

		
	
	
	
	
		