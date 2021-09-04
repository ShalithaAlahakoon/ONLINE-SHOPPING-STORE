
<html>
	<head>
		<title>
			SHOPPING BAG
		</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<link rel="stylesheet" type="text/css" href="../styles/sideBar.css">
		<link rel="stylesheet" type="text/css" href="../styles/bg.css">
		<script src="../js/javascript.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		
		
	</head>
	<body>
	
	
		<!-- header navigation -->
		<table  width="100%" id="headerTable" border="0" >
			<tr>
				<td rowspan="2"><img src="../images/logo.png" width="120" height="120" class="logo"></td>
				<td colspan="2">
					<ul class="ul1" >
						
							<li><a href="../index.php" class="active"> Home |</a></li>
							<li><a href="construction.php"> Customer Care |</a></li>
							<li><a href="construction.php"> Today's offer |</a></li>
							<li><a href="construction.php"> Downloard app |</a></li>
							<li><a href="construction.php">Advertise |</a></li>
							<li><a href="construction.php"> Sell Prodeuct |</a></li>
							<li><a href="construction.php"> Track order |</a></li>
							<li><a href="payments.php"> Payments |</a></li>
							<li><a href="contactus.php"> Contact us |</a></li>
							<li><a href="construction.php"> Sign in </a></li>
						
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<form action = "searchBar.php" method="get">
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
						
						
						<li><a href="construction.php"> Electronics</a></li>
						<li><a href="construction.php"> Clothings</a></li>
						<li><a href="construction.php"> Furnitures</a></li>
						<li><a href="construction.php">Men</a></li>
						<li><a href="construction.php"> Women</a></li>
						<li><a href="construction.php"> Home Applience</a></li>
						
						
					</div>
					</ul>
				
				</td>
				
				<td><button class="cartButton">Login</button> </td>
			</tr>
			<tr><td style="color:red"> a</td></tr>
		</table>
		
		<hr>
		<!-- body -->
	<h1 style="color:red">Searched Item =	<?php echo $_GET['SB']; ?><br>
												<?php echo "This Item is currently not available" ; ?><br></h1>

	

		
	

		
	

	<footer>	<hr>
	<center>Copyright © 2020 shopping bag   |   All Rights Reserved.   |   All individual works are copyright protected by their respective owners & contributors.
	</center>
	<center>shopping bag for shopping the world</center>
	</footer>	
	</div>
	</body>
</html>