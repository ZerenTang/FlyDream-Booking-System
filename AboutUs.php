<?php
	session_start();
?>
<html>
	<head>
	
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>
			About Us
		</title>
		
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
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
					</li>
                    <li><a href="AboutUs.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
		
		
		
	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                 <h2> Founded only 20 years ago in Sydneys east , FlyDream Airways has grown to be one of Australia's largest domestic and international airline. </h2>
				 <p> </p>
                <p> FlyDream Airways is proud to be one of the youngest global airlines to serve all six continents, and thanks to our customers’ response to our offerings, we are also the world’s fastest-growing airline. We connect more than 160 destinations on the map every day, with a fleet of the latest-generation aircraft, and an unrivalled level of service from our home and hub, Sydney Airport Australia</p>
                <a href="home_page.php" class="btn btn-primary btn-lg">Back</a>
            </div>
        </div>
    </header>


	</body>
</html>