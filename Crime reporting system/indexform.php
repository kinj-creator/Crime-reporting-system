<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Reporting System</title>
    <!--		<link rel="stylesheet" href="style.css">		-->
	<style>
		*{
			margin: 0px;
			padding:0px;
			box-sizing: border-box;
			font-family: sans-serif;
			
		}
		/* NAVIGATION BAR */
		nav{
			width: 100%;
			height: 75px;
			background-color: black;
			line-height: 75px;
			padding:0px 100px;
			position: fixed;
			z-index : 1;
		}
		nav .logo{
			font-weight: bold;
			letter-spacing: 1.5px;
		}
		nav .logo p{
			font-size: 30px;
			float: left;
			color:red;
			text-transform: uppercase;
		}
		nav ul{
			float:right;
		}
		nav ul li{
			display: inline-block;
			list-style: none;
		}
		nav ul li a{
  color:rgb(255, 255, 255);
  border-radius: 5px;
  padding: 0px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
		}
		nav ul li a:hover{
			color:red;
		}
		
		.image{
			width: 100%;
			position: absolute;
			z-index: -1;
			opacity:0.7;
		}
		.heading{
			color: rgb(0, 0, 0);
			background:rgb(255, 224, 24);
			font-weight: 600;
			font-size: 1.2em;
			margin-bottom: 20px;
			border-bottom: 4px solid black;
			display: contents;
			letter-spacing: 1px;
			
		}
		
		/* CONTAINER */
		.container{
			max-width: 80%;
			/*background-color: rgb(198, 152, 241);*/
			padding: 34px;
			margin: auto;
		}
		.container h1, p{
			text-align: center;
		}
		p{
			font-size: 17px;
		}

		input, textarea{
			background:white;
			border: 4px solid black;
			border-radius:px;
			outline: none;
			width: 50%;
			margin: 11px 0px;
			padding: 7px;
			font-size: 16px;
		}
		select{
			background:white;
			border: 4px solid black;
			border-radius:px;
			outline: none;
			width: 50%;
			margin: 11px 0px;
			padding: 7px;
			font-size: 16px;
		}


		form{
			display: flex;
			align-items: center;
			justify-content: justify;
			flex-direction: column;
			

		}
	
	

		.btn{
			color:rgb(0, 0, 0);
			background:white;
			padding: 10px;
			font-size: 16px;
			border: 4px solid rgb(0, 0, 0);
			border-radius: 14px;
			cursor: pointer;
		}
		.submitmsg{
			font-size: 25px;
			color: rgb(25, 102, 47);
		}
		
		
		
		/* FOOTER */
		.footer{
			background-color: black;
			color: white;
			height: 400px;
			bottom: 50px;
			left: 0;
			position: sticky;
			
		}
		
		.footer .footer-content{
			
			height: 350px;
		}
		.footer .footer-bottom{
			background-color: rgb(153,51,153);
			color: rgb(255,255,153);
			height: 50px;
			text-align: center;
			position: fixed;
			bottom: 0;
			left: 0;
			padding-top: 20px;
			width: 100%;
		}
		
	
	</style>

</head>
<body>
	<img src="image/police.jpg" class="image" alt="background image"> 
	<nav>
		<div class="logo">
			<p>   Crime & Incidents Online Reporting </p>
		</div>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="about.html">Contact Developers</a></li>
			<li><a href="adminlogin.html">Admin Log-in</a></li>
		</ul>
	</nav>
	<br><br><br><br>
	
	<div class="page-wrapper">
	
		
		<div class="container">
			<span class="heading"> <h1> Report A Crime / Incident </h1> </span>
    
			<br>

			<form action="index.php" method="POST">
			
				<input type="text" name="name" id="name" placeholder="Pangalan" required>
				<input type="email" name="email" id="email" placeholder="Email ">
				<input type="text" name="age" id="age" placeholder="Edad" required>
				<select name="gender" id="gender">                                  
					<option selected disabled>Kasarian</option>     
					<option>M</option>     
					<option>F</option>                  
						
				</select>
				<input type="phone" name="phone" id="phone" placeholder="Phone Number (max. 11 characters)" required>

				<select name="place" id="place">                                  
					<option selected disabled>Lokasyon sa Panghitabo</option>     
					<option>Campokpok Tabango Leyte</option>                     
					<option>Poblacion Tabango Leyte</option>
					<option>Sanlogon Tabango Leyte</option>
					<option>Crossing otabon Tabango Leyte</option>
					<option>Masisi Tabango Leyte</option>	
				</select>
				<select name="desc" id="desc">                                  
					<option selected disabled>Crime type</option>
					<option>Robbery</option>                     
					<option>Domestic violence</option>
					<option>Arson</option>
					<option>Kidnapping</option>
					<option>Forgery</option>
					<option>Incholate crimes</option>                     
					<option>Corporal Injury</option>
					<option>Organized crime</option>
					<option>Economic crimes</option>
					<option>Cybercrime</option>	
					<option>Auto theft</option>                     
					<option>Misdemeanor</option>
					<option>Consensual crime</option>
					<option>Murder</option>
					<option>Sexual assault</option>		
					<option>Fraud</option>                     
					<option>Drug possession</option>
					<option>Felony</option>
					<option>Receiving stolen property</option>
					<option>Crimes against property</option>
					<option>Extortion</option>                     
					<option>Vandalism</option>
					<option>Rape</option>	
				</select>
				<select name="desc" id="desc">                                  
					<option selected disabled>Incident type</option>
					<option>Vehicle collisions</option>                     
					<option>Burns and scalds</option>
					<option>Falls</option>
					<option>Workplace Accident</option>
					<option>Fire incident</option>	
					<option>Threats</option>                     
					<option>Worker injury incident</option>
					<option>Lost time accident</option>
					<option>Harassment and bullying</option>
					<option>Security incident</option>	
					<option>Near miss</option>
					<option>Hygiene deviations</option>
					<option>Minor injuries</option>

				</select>
				<button class="btn">Submit </button>
				<!-- <button class="btn">Reset </button>  -->
			</form>
		
		</div>
		

	
		<!--FOOTER 
		<div class="footer">
			<div class="footer-content">
				<div class="footer-content about"> 
				
				</div>
				<div class="footer-content developers"> 
				
				</div>
				<div class="footer-content contact-form"> 
				
				</div>
			</div>
			<div class="footer-bottom">
				| Designed by Jerico
			</div>
		</div> -->
		
	</div>
</body>
</head>