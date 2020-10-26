<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
		</title>
		<style>
		
			input {
    			border: 1.5px solid #000000;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #9bcc34;
				color: white;
				border: 1.5px solid #FFFFFF;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #000000;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #000000;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
			

	
    <!--other positioning attributes-->
}
		</style>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>	
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		
	</head>
	<body>
	

	<!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home_page.php">
                	<span class="glyphicon glyphicon-fire"></span> 
                	FlyDreamAir
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
				
                <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
                <li><a href="AboutUs.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>	
		

<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
			
			
<div class="white-box">   
		

		
               <form action="view_flights_form_handler.php" method="post">
			<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
			<table cellpadding="5" style="margin-left:auto;margin-right:auto;">
				<tr>
					<td style="color: #ffffff" class="fix_table">Enter Starting Location</td>
					<td style="color: #ffffff" class="fix_table">Enter Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="Berlin">
  						  	<option value="Hong Kong">
  						  	<option value="London">
  						  	<option value="Los Angeles">
							<option value="Madrid">
							<option value="Moscow">
							<option value="New York">
							<option value="Paris">
							<option value="Seoul">
							<option value="Shanghai">
							<option value="Sydney">
							<option value="Tokyo">
  						</datalist>
						</td>
						
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="Berlin">
  						  	<option value="Hong Kong">
  						  	<option value="London">
  						  	<option value="Los Angeles">
							<option value="Madrid">
							<option value="Moscow">
							<option value="New York">
							<option value="Paris">
							<option value="Seoul">
							<option value="Shanghai">
							<option value="Sydney">
							<option value="Tokyo">
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				</tr>
			</table>
			<br>
			
			
			
			<table cellpadding="5" style="margin-left:auto;margin-right:auto;">
				<tr>
					<td style="color: #ffffff" class="fix_table">(One way) Departing </td>
					<td style="color: #ffffff" class="fix_table">(Return) Returning </td>
					
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
						
						
						<td class="fix_table"><input type="date" name="ret_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> </td>
						
						
						
					
				</tr>
				
				
				

			</table>
			<br>
			
			
			
			<table cellpadding="5" style="margin-left:auto;margin-right:auto;">
				<tr>
					<td style="color: #ffffff" class="fix_table">Enter the Class</td>
					<td style="color: #ffffff" class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
				
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
						
						<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 2" required></td>
  					</td>
				</tr>
		
			</table>
			<br>
			

			<table cellpadding="5" style="margin-left:auto;margin-right:auto;">
				<tr>
					<td style="color: #ffffff" class="fix_table">Enter the No. of Children</td>
					<td style="color: #ffffff" class="fix_table">Enter the No. of Infants</td>
				</tr>
				<tr>
				
					<td class="fix_table"><input type="number" name="no_of_child" placeholder="Eg. 1" required></td>
						
					<td class="fix_table"><input type="number" name="no_of_infant" placeholder="Eg. 0" required></td>
  					
				</tr>
		
			</table>
			<br>			

			<input type="submit" value="Search for Available Flights" name="Search">
			
		</form>
		

            </div>
        </div>
    </header>
	
		
	
		
	</div>	
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
	</body>
</html>