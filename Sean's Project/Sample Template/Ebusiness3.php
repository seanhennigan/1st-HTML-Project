
<html>
	<head>
	<title>Confirmation</title>
	<link rel="stylesheet" href="style.css">
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
		<center>
			<h3> Customer Details </h3>
			
			<br />
			<!--The value entered into the name text box in the CustomerPaymentDetails form on Ebusiness2.php is printed here by php using echo and $_POST as the method of this form was 'post'-->
			Name: &nbsp; <?php echo $_POST['name']; ?><br /> 
			<!--The value entered into the Email text box in the CustomerPaymentDetails form on Ebusiness2.php is printed here by php using echo and $_POST as the method of this form was 'post'-->
			Email: &nbsp; <?php echo $_POST['Email']; ?><br /> 
			<br />
			
			<h3> Purchase Information </h3>
			<br /> <!--The cookie value was stored on Ebusiness2.php from the data calculated on Ebusiness1.html-->
			Total Price: &nbsp; <?php echo $_COOKIE['Total']; ?> <!--The total value is printed by php using echo and $_COOKIE-->
		
		</center>
		
		<div id="Footer">
   
		<p>Copyright &COPY; All Rights Reserved. Design By Seán Hennigan</p>
		
		</div>

	</body>
</html>