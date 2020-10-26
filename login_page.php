<?php
	session_start();
?>
<html>
	<head>
	
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>
			Account Login
		</title>
		<style>
			input {
				border: 1.5px solid #FFFFFF;
    			border-radius: 4px;
    			padding: 7px 40px;
			}
			input[type=submit] {
				background-color: #9bcc34;

    			padding: 7px 45px;
    			margin: 0px 60px
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
				
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
                
				<li><a href="AboutUs.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
				
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
	
	
	
	
	
	
	
		
		
		
		
		<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">



		
		<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
			<fieldset>
			
				<h2>Login Details:</h2> 
				
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" style="color: #000000" required><br><br>
				
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" style="color: #000000" required><br><br>
				

				<strong>User Type:
				<br>
				</strong><br>
				Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<br>
				<input type="submit" name="Login" value="Login">
				
			</fieldset>
			<br>
			
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
		</form>
		
		
		
	</body>
</html>