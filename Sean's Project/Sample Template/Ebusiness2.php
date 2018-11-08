<!doctype html>
<?php //This will save the value of the total as a cookie 
		//so that it can be accessed on Ebusiness3.php.
		setcookie("Total", $_POST['Total'], time() +86400);
?>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title> Customer Payment Details </title>

	  <script>
		function validate_form()
		{
			valid = true;
				if(document.CustomerPaymentDetails.name.value=="")
				{
					window.alert("Please fill in Name.");
					valid = false;
				}
				else if(document.CustomerPaymentDetails.Email.value=="")
				{
					window.alert("Please fill in Email.");
					valid = false;
				}
				else if(document.CustomerPaymentDetails.Phone.value=="")
				{
					window.alert("Please fill in Phone Number.");
					valid = false;
				}
		
				else if(isNaN(document.CustomerPaymentDetails.Phone.value))
				{
					window.alert("Please use numbers only for Phone Number.");
					valid = false;
				}
			return valid;
		}
	  </script>
 
	</head>
	
	<body>
	
	<header>
	
		<div id = "Title">
			<h1><font face="verdana"> Echelon INC </h1>
		</div>
		
   </header>
	
	<nav>
      
		<div id="menu">
			<ul>
				<li><a href="Index.html">Home</a></li>
				<li><a href="Bootstrap.html">CV</a></li>
				<li><a href="Interests.html">Interests</a></li>
				<li><a href="IOTCompany.html">IOT Company</a></li>
				<li><a href="Database.html">Database</a></li>
				<li><a href="Ebusiness.php">E-Business</a></li>
			</ul>
		</div>
	</nav>
	
	<form name="CustomerPaymentDetails" action="Ebusiness3.php" 
	onsubmit="return validate_form();" method="post"> <!--When this form is submitted by the user clicking the Validate/Proceed with Purchase button, the Javascript function validate_form(); is called-->
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
		<center><h3> Please enter your payment details </h3>
		<br />
		<table cellspacing="10">
			<tr>
				<td>Name:</td><td><input type="text" id="names" name="name" /></td>
			</tr>
			<tr>
				<td>Email:</td><td><input type="text" name="Email" /> </td>
			</tr>
			<tr>
				<td>Phone:</td><td><input type="text" name="Phone" /> </td>
			</tr>
		</table>
		<br />
		<input type="submit" value="Validate/Proceed with Purchase" /> <!--When the user clicks this button, this calls the function validate_form(); and if the value of valid returned is true they will be able to move on to Ebusiness3.php-->
		</center>
	</form>
	
	 <div id="Footer">
   
		<p>Copyright &COPY; All Rights Reserved. Design By Seán Hennigan</p>
		
   </div>
	
	</body>
</html>