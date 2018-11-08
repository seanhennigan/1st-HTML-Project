
<html> 
	<head>
	
	<link rel="stylesheet" href="style.css">
	
<script language="Javascript">
        
        function calcSub()
        {
      
        
		var Google,
			AmazonEcho,
			Samsung;

        /*-------------------Google Home Check Box---------------------*/
        if(document.addform.chkbox1.checked == true)
		{
		<!--        Gooogle = document.addform.chkbox1.value; -->
 
		Google = 400;
		}
        else{ 
		Google = 0;
		}
		/*-------------------Amazon Echo Check Box---------------------*/
		if(document.addform.chkbox2.checked == true)
		{
		<!--  Amazon = document.addform.chkbox3.value;->
      
	   AmazonEcho= 300;
		}	   
        else{ 
		AmazonEcho = 0;
		}
		/*-------------------Cubic Check Box---------------------*/
        if(document.addform.chkbox3.checked == true)
         {      <!--Cubic = document.addform.chkbox3.value;  -->
		
		Samsung = 200;
        }
		else
		{ 
		Samsung	= 0;
		}
		
		 if(document.addform.chkbox4.checked == true)
         {      <!--Cubic = document.addform.chkbox3.value;  -->
		
		AmazonDash= 100;
        }
		else
		{ 
		AmazonDash	= 0;
		}
        
		
		subTotal =AmazonDash + Google + AmazonEcho + Samsung;
        calcDisVatTotal(subTotal); //Call the function called calcDisVatTotal
 
        }//end calcSub function
 
        
        function calcDisVatTotal(parm1)
        {       
        var subTotal;
		var discountAmt;
		var vatAmt
		var totalPrice;
          
        subTotal = parm1;
		discountAmt = subTotal*0.1;
        vatAmt = subTotal*0.2;
		totalPrice = (subTotal - discountAmt + vatAmt);

			//calls display function and passes each variable as a parameter
          display(subTotal,discountAmt,vatAmt,totalPrice);
 
        }//end calculatevat()
 
 
        function display(parm2,parm3,parm4,parm5) 
        {

        document.addform.displaynet.value=parm2;
        document.addform.displaydiscount.value=parm3;  
		document.addform.displayvat.value=parm4;
		document.addform.Total.value=parm5;
 
        }// end display()
 
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
		<!-- Header -->
	
		<!-- Header -->

		<main role="main">
			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container">
					<h1 align="center"><font face="verdana">Please Select a Product</font></h1>	
				</div>
			</div>
			<!-- End Intro -->
	
			   <form name="addform" method="post" action="Ebusiness2.php"> <!--Names form as "addfrom"-->
        
      <table align =" center" border =" 0" width = 80%>      <!--Creates table to hold buttons-->
 
      <tr>
         <!-- <td><strong>Please Select One of Our Products:</strong></td> -->
  
      </tr>

  
      
	  
      <tr>
         <td><input type = "checkbox" name = "chkbox1">Google Home - 400</td>
      </tr> <!--Creates checkbox and assigns a value to it-->
        
      <tr>
         <td><input type = "checkbox" name = "chkbox2">Amazon Echo - 300</td>
      </tr>
		<tr>
         <td><input type = "checkbox" name = "chkbox3">Samsung Fridge - 200</td>
      </tr> <!--Creates checkbox and assigns a value to it-->
	  <tr>
         <td><input type = "checkbox" name = "chkbox4">Amazon Dash - 100</td>
      </tr> <!--Creates checkbox and assigns a value to it-->
        
        
     
	  
	  <tr>
		<td></td>
		<td><strong>Cost</strong></td>
	  </tr>
	  
      <tr>
         <td>Sub Total</td>
         <td><input type = "text" name="displaynet"></td>
      </tr>

      <tr>
         <td>Discount Amount(@10%)</td>
         <td><input type = "text" name="displaydiscount"></td>
      </tr>

      <tr>
         <td>VAT Amount(@20%)</td>
         <td><input type = "text" name="displayvat"></td>
      </tr>  

      <tr>
         <td>Total Price (- discount + vat)</td>
         <td><input type = "text" name="Total"></td>
      </tr>
        
      </table>
 
      <br>
        
        <center>
        <input type = "button" name = "Calculate" value ="Calculate cost" onclick ="calcSub();">
        <input type = "reset" value = "Clear current selections">
        <input type = "submit" value= "Add to shopping cart" >
        </center>              
        
   </form>
   
   <div id="Footer">
   
		<p>Copyright &COPY; All Rights Reserved. Design By Seán Hennigan</p>
		
   </div>

	</body>
</html>
