
<html>
	<head>
		<title>
			SHOPPING BAG
		</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">	
		<link rel="stylesheet" type="text/css" href="styles/bg.css">
		<script src="js/javascript.js"></script>
		<script src="js/slidshow.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		
	</head>
	<body>
	
	
		<!-- header navigation -->
		<table  width="100%" id="headerTable" border="0" >
			<tr>
				<td rowspan="2"><img src="images/logo.png" width="120" height="120" class="logo"></td>
				<td colspan="2">
					<ul class="ul1" >
						
							<li><a href="index.php" class="active"> Home |</a></li>
							<li><a href="php/construction.php"> Customer Care |</a></li>
							<li><a href="php/construction.php"> Today's offer |</a></li>
							<li><a href="php/construction.php"> Downloard app |</a></li>
							<li><a href="php/construction.php">Advertise |</a></li>
							<li><a href="php/construction.php"> Sell Prodeuct |</a></li>
							<li><a href="php/construction.php"> Track order |</a></li>
							<li><a href="php/payments.php"> Payments |</a></li>
							<li><a href="php/contactus.php"> Contact us |</a></li>
							<li><a href="php/construction.php"> Sign in </a></li>
						
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<form action = "php/searchBar.php" method="get">
						<input class="searchbar" type="text" placeholder="    Search ..." name ="SB"></input>
						<button type="submit" class="cartButton">Search</button>
					</form>
					
					
				</td>
				
				<td>
					<button class="cartButton">Cart</button>
					
				</td>
			</tr>
			<tr>
				
				<td colspan="2">
				
					<ul class="ul2" >
					<div class="lia2">
						
						
						<li><a href="#home"> Electronics</a></li>
						<li><a href="#home"> Clothings</a></li>
						<li><a href="#home"> Furnitures</a></li>
						<li><a href="#home">Men</a></li>
						<li><a href="#home"> Women</a></li>
						<li><a href="#home"> Home Applience</a></li>
						
						
					</div>
					</ul>
				
				</td>
				
				<td><button class="cartButton">Login</button> </td>
			</tr>
			<tr><td style="color:red"> a</td></tr>
		</table>
		<!-- Advertise -->
		
		<img name="slide"  width="96%" height="25%" align="center"   class="addspace">
		
		<!-- side navigation -->
		
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  
		  <a href="#">Electronics</a>
		  <a href="#">Clothings</a>
		  <a href="#">Furnitures</a>
		  <a href="#">Men</a>
		  <a href="#home"> Women</a>
		  <a href="#home"> Home Applience</a>
		  <a href="#">Home & garden</a>
		  <a href="#">Helth & Beauty</a>
		  <a href="#">Toys & Hobbies</a>
		  <a href="#">Industrial</a>
		  
		</div>

		<div id="main">
		  
		  <span style="font-size:30px;cursor:pointer;color:blue" onclick="openNav()">&#9776; All catagories</span>
		</div>
		
	<!-- item cards-->		
	<div align="center">
			<a href="Electronics.html">
				<div class="itemCard">
						<img src="images/Electronics.jpeg"  > 
						<br>
						<h2><center>Electronics</center></h2>	
				</div>
			</a>
			<a href="Clothing.html">
				<div class="itemCard">
						<img src="images/Clothing.png"  > 
						<br>
						<h2><center>Clothing</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/Furniture.jpg"  > 
						<br>
						<h2><center>Furniture</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/men.jpg"  > 
						<br>
						<h2><center>Men</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/women.jpg"  > 
						<br>
						<h2><center>Women</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/HA.jpg"  > 
						<br>
						<h2><center>Home Applience</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/garden.jpg"  > 
						<br>
						<h2><center>Home & garden</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/helth.jpg"  > 
						<br>
						<h2><center>Helth & Beauty</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/toys.jpg"  > 
						<br>
						<h2><center>Toys & Hobbies</center></h2>	
				</div>
			</a>
			<a href="#">
				<div class="itemCard">
						<img src="images/power.jpg"  > 
						<br>
						<h2><center>Industrial</center></h2>	
				</div>
			</a>
	</div>		

			
	
		 
	<div>

	<footer>	<hr>
	<center>Copyright © 2020 shopping bag   |   All Rights Reserved.   |   All individual works are copyright protected by their respective owners & contributors.
	</center>
	<center>shopping bag for shopping the world</center>
	</footer>	
	</div>
	</body>
</html>