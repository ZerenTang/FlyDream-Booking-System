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
		
	<style>
	
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #000000;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}

</style>	

		
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
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
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
   <div class="center">
   
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." style="color: #000000"></input>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="color: #000000"></input>

    <label for="Mob">Mobile</label>
    <input type="text" id="Mob" name="lastname" placeholder="Your mobile number.." style="color: #000000"></input>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px;color: #000000" ></textarea>

    <a href="home_page.php" class="btn btn-primary btn-lg">submit</a>
  </form>
  
</div>
        </div>
    </header>


	</body>
</html>