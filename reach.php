<html lang="en">
<head>
<title>Sound Art Studio | Contact</title>
<link type="text/css" rel="stylesheet" href="css/style.css">

<link type="text/css" rel="stylesheet" href="css/contact.css">

<style>
	footer{
	position:absolute;
	top:90%;
	width:100%;
	float:left;
	}
</style>

</head>

<body>
<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/soundartstudio.png" alt="LOGO"></a>
			</div>
			<ul id="menu">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="products.html">Products</a>
				</li>
				<li>
					<a href="clients.html">Clients</a>
				</li>
				<li class="active">
					<a href="reach.php">Reach Us</a>
				</li>
			</ul>
		</div>
	</div>




<aside id="us">
<p>We are conviniently located in West Delhi <br> <br> Mobile No. +91 9999 55 1124<br>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp&nbsp +91 9711 46 6809 <br> <br> Email-id: &nbsp soundartstudio@yahoo.com<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
rakesh_baner@yahoo.com<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
abhishek.sehgal85@hotmail.com 
</p>


<h1 align="center">Social Networks
&nbsp &nbsp <img width="10%" src="images/page1-img1.png">

<p><a href="#"> <img width="15%" src="images/download.png"></a> &nbsp &nbsp &nbsp<a href="#"><img width="15%" src="images/images.png"></a></p>
</h1>
</aside>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
   <fieldset>
   <legend><h1>Enquiry Form</h1></legend>
   <label><b>Name:</b></label> &nbsp &nbsp &nbsp <input type="text" name="name">
   <br><br>
   <label><b>E-mail:</b></label> &nbsp &nbsp <input type="text" name="email">
   <br><br>
   <label><b>Website:</b></label> &nbsp <input type="text" name="website">
   <br><br>
   <label><b>Comment:</b></label> <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   <label><b>Gender:</b></label>
   <input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female">Female
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
	</fieldset>
</form>



<footer>
&nbspCopyright &copy Sound Art Studio 2014 | Designed By Ketan Kharbanda | All Rights Reserved
</footer>

</body>
</html>


<?php
if(isset($_POST['name'])){ $name = $_POST['name']; }
if(isset($_POST['email'])){ $email = $_POST['email']; }
if(isset($_POST['website'])){ $website = $_POST['website']; }
if(isset($_POST['comment'])){ $comment = $_POST['comment']; }
if(isset($_POST['gender'])){ $gender = $_POST['gender']; }

if(isset($_POST['submit']))
{
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
}
?>