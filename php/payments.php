
<html>
	<head>
		<title>
			SHOPPING BAG
		</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		
		<link rel="stylesheet" type="text/css" href="../styles/payments.css">
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
						
							<li><a href="../index.php" > Home |</a></li>
							<li><a href="construction.php"> Customer Care |</a></li>
							<li><a href="construction.php"> Today's offer |</a></li>
							<li><a href="construction.php"> Downloard app |</a></li>
							<li><a href="construction.php">Advertise |</a></li>
							<li><a href="construction.php"> Sell Prodeuct |</a></li>
							<li><a href="construction.php"> Track order |</a></li>
							<li><a href="payments.php" class="active"> Payments |</a></li>
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
	
		<div class="table1" border="1">
			<div>
				<div class="contentarea">
					<h1><center>BILLING AND PAYMENT</center></h1>
					<form action="formdata.php" method="post" >
						 <h3>1.Select your payment option:<br>
							
						<select name="option" class="select"required >
							<option value="" >--select--</option>
							<option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
							<option value="DISCOVER">DISCOVER</option>
							<option value="MASTER CARD" >MASTER CARD</option>
							<option value="VISA">VISA</option>
							
						</select>
						<br><br>
						
						<h3>2.Card number: </h3>
						<input class="input" type="text" name="cardNumber"  maxlength="19" placeholder="0000 0000 0000 0000" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}"  required >
						<br><br>
						<h3>3.CVV:  </h3>                        
						<input class="input1" type="text" name="cvv"  placeholder="000"maxlength="3" pattern="[0-9]{3}"  required ><br><br>
						<h3>4.Expiaration:</h3>
						<input class="input1" type="text" name="exp"  placeholder="MM/YY" pattern="[0-9]{2}/[0-9]{2}"  required >
						<br><br>
						
						<center>
						<input class="input2 " type="submit" name="submit" value="SUBMIT" required>
						<input class="input2 " type="reset" name="reset" value="RESET" required>			
						</center>
					</form>
					<center>
					<img src="../images/VISA.png"  class="icon">
					</center>
				</div >
				<div class="contentarea">
					<center><img src="../images/add.png" class="add"></center>
				</div>
			</div>
		</div>
	

		
	

		
	

	<footer>	<hr>
	<center>Copyright © 2020 shopping bag   |   All Rights Reserved.   |   All individual works are copyright protected by their respective owners & contributors.
	</center>
	<center>shopping bag for shopping the world</center>
	</footer>	
	</div>
	</body>
</html>