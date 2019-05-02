<?php include('postajobserver.php'); 
?>
<html>
    <head>
    	<title>Post a Job</title>
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
    <body  background="images\i2.jpg" >
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
			
			<div class="main">
				<?php if(count($error)>0): ?>
					<div style="border:2px solid red;" >
						<?php foreach($error as $er): ?>
							<p style="color:red;"><?php echo $er; ?></p>
						<?php endforeach ?>
					</div>
				<?php endif ?>
				<form action="postajob.php" method="post" enctype="multipart/form-data">
				
					<label style="color: #e60000;">Enter your location</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<select type="text" id="textboxhalf" placeholder="Enter location" name="loc">
							<option selected="selected">-Select-</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Metropolitan Cities-</i></font></option>
							<option>Ahmedabad</option> 
							<option>Bengaluru/Bangalore</option>
							<option>Chandigarh</option>
							<option>Chennai</option>
							<option>Delhi</option>
							<option>Gurgaon</option>
							<option>Hyderabad/Secunderabad</option>
							<option>Kolkatta</option>
							<option>Mumbai</option>
							<option>Noida</option>
							<option>Pune</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
							<option>Anantapur</option>
							<option>Guntakal</option>
							<option>Guntur</option>
							<option>Hyderabad/Secunderabad</option>
							<option>kakinada</option>
							<option>kurnool</option>
							<option>Nellore</option>
							<option>Nizamabad</option>
							<option>Rajahmundry</option>
							<option>Tirupati</option>
							<option>Vijayawada</option>
							<option>Visakhapatnam</option>
							<option>Warangal</option>
							<option>Andra Pradesh-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
							<option>Itanagar</option>
							<option>Arunachal Pradesh-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
							<option>Guwahati</option>
							<option>Silchar</option>
							<option>Assam-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
							<option>Bhagalpur</option>
							<option>Patna</option>
							<option>Bihar-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
							<option>Bhillai</option>
							<option>Bilaspur</option>
							<option>Raipur</option>
							<option>Chhattisgarh-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
							<option>Panjim/Panaji</option>
							<option>Vasco Da Gama</option>
							<option>Goa-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
							<option>Ahmedabad</option>
							<option>Anand</option>
							<option>Ankleshwar</option>
							<option>Bharuch</option>
							<option>Bhavnagar</option>
							<option>Bhuj</option>
							<option>Gandhinagar</option>
							<option>Gir</option>
							<option>Jamnagar</option>
							<option>Kandla</option>
							<option>Porbandar</option>
							<option>Rajkot</option>
							<option>Surat</option>
							<option>Vadodara/Baroda</option>
							<option>Valsad</option>
							<option>Vapi</option>
							<option>Gujarat-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
							<option>Ambala</option>
							<option>Chandigarh</option>
							<option>Faridabad</option>
							<option>Gurgaon</option>
							<option>Hisar</option>
							<option>Karnal</option>
							<option>Kurukshetra</option>
							<option>Panipat</option>
							<option>Rohtak</option>
							<option>Haryana-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
							<option>Dalhousie</option>
							<option>Dharmasala</option>
							<option>Kulu/Manali</option>
							<option>Shimla</option>
							<option>Himachal Pradesh-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
							<option>Jammu</option>
							<option>Srinagar</option>
							<option>Jammu and Kashmir-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
							<option>Bokaro</option>
							<option>Dhanbad</option>
							<option>Jamshedpur</option>
							<option>Ranchi</option>
							<option>Jharkhand-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
							<option>Bengaluru/Bangalore</option>
							<option>Belgaum</option>
							<option>Bellary</option>
							<option>Bidar</option>
							<option>Dharwad</option>
							<option>Gulbarga</option>
							<option>Hubli</option>
							<option>Kolar</option>
							<option>Mangalore</option>
							<option>Mysoru/Mysore</option>
							<option>Karnataka-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
							<option>Calicut</option>
							<option>Cochin</option>
							<option>Ernakulam</option>
							<option>Kannur</option>
							<option>Kochi</option>
							<option>Kollam</option>
							<option>Kottayam</option>
							<option>Kozhikode</option>
							<option>Palakkad</option>
							<option>Palghat</option>
							<option>Thrissur</option>
							<option>Trivandrum</option>
							<option>Kerela-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
							<option>Bhopal</option>
							<option>Gwalior</option>
							<option>Indore</option>
							<option>Jabalpur</option>
							<option>Ujjain</option>
							<option>Madhya Pradesh-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
							<option>Ahmednagar</option>
							<option>Aurangabad</option>
							<option>Jalgaon</option>
							<option>Kolhapur</option>
							<option>Mumbai</option>
							<option>Mumbai Suburbs</option>
							<option>Nagpur</option>
							<option>Nasik</option>
							<option>Navi Mumbai</option>
							<option>Pune</option>
							<option>Solapur</option>
							<option>Maharashtra-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
							<option>Imphal</option>
							<option>Manipur-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
							<option>Shillong</option>
							<option>Meghalaya-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
							<option>Aizawal</option>
							<option>Mizoram-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
							<option>Dimapur</option>
							<option>Nagaland-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
							<option>Bhubaneshwar</option>
							<option>Cuttak</option>
							<option>Paradeep</option>
							<option>Puri</option>
							<option>Rourkela</option>
							<option>Orissa-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
							<option>Amritsar</option>
							<option>Bathinda</option>
							<option>Chandigarh</option>
							<option>Jalandhar</option>
							<option>Ludhiana</option>
							<option>Mohali</option>
							<option>Pathankot</option>
							<option>Patiala</option>
							<option>Punjab-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
							<option>Ajmer</option>
							<option>Jaipur</option>
							<option>Jaisalmer</option>
							<option>Jodhpur</option>
							<option>Kota</option>
							<option>Udaipur</option>
							<option>Rajasthan-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
							<option>Gangtok</option>
							<option>Sikkim-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
							<option>Chennai</option>
							<option>Coimbatore</option>
							<option>Cuddalore</option>
							<option>Erode</option>
							<option>Hosur</option>
							<option>Madurai</option>
							<option>Nagerkoil</option>
							<option>Ooty</option>
							<option>Salem</option>
							<option>Thanjavur</option>
							<option>Tirunalveli</option>
							<option>Trichy</option>
							<option>Tuticorin</option>
							<option>Vellore</option>
							<option>Tamil Nadu-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
							<option>Agartala</option>
							<option>Tripura-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
							<option>Chandigarh</option>
							<option>Dadra & Nagar Haveli-Silvassa</option>
							<option>Daman & Diu</option>
							<option>Delhi</option>
							<option>Pondichery</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
							<option>Agra</option>
							<option>Aligarh</option>
							<option>Allahabad</option>
							<option>Bareilly</option>
							<option>Faizabad</option>
							<option>Ghaziabad</option>
							<option>Gorakhpur</option>
							<option>Kanpur</option>
							<option>Lucknow</option>
							<option>Mathura</option>
							<option>Meerut</option>
							<option>Moradabad</option>
							<option>Noida</option>
							<option>Varanasi/Banaras</option>
							<option>Uttar Pradesh-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
							<option>Dehradun</option>
							<option>Roorkee</option>
							<option>Uttaranchal-Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
							<option>Asansol</option>
							<option>Durgapur</option>
							<option>Haldia</option>
							<option>Kharagpur</option>
							<option>Kolkatta</option>
							<option>Siliguri</option>
							<option>West Bengal - Other</option>
							<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Other-</i></font></option>
							<option>Other</option>
							</select>
					
					
					<br><br>
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

						<label><img src="images\icon2.png" width="35" height="35">&nbsp;&nbsp;&nbsp;&nbsp;<b>About the work</b></label>

						<p><b>Topic Name:</b></p>
						<input type="text" id="textboxhalf" placeholder="Write a Technical Report" name="topic">

						<p><b>Enter some skills that relate to the job:</b></p>
						<input type="text" id="textboxhalf" placeholder="Enter skills separated by ','" name="skill">
						<p><b>Describe your job in details:</b></p>
						<textarea rows="4" type="text" id="textboxhalf" placeholder="Describe your content here..." name="desc"></textarea>
						<br><br>

						<label><b>Upload related Documents and Pictures:</b></label>
						<p><b>Docs:</b><input type="file" id="textboxhalf" name="docs" accept="application/msword,text/plain,application/pdf"></p>
						<p><b>Pics:</b><input type="file" id="textboxhalf" name="pics" accept="image/*"></p>
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
								
						</select>
						<p><b>Want your job done within:</b></p>
						<input type="text" id="textboxhalf" placeholder="Enter number of days..." name="nod">
						
						<p>By clicking 'Post Now', you are indicating that you have read and agree to the 
						<a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>

						<center><button type="submit" class="btnuser" name="submitjob">Post Now</button>
						<button type="reset" class="btnuser">Reset All</button></center>
			
				</form>
			</div>
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