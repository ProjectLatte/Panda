<?php
session_start();
?>
<html>
	<head>
		<title>Home | Let's Explore</title>

		<!-- Latest compiled and minified CSS -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
		<link rel="stylesheet" type="text/css" href="stylesheets/site.css" />

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- OTHER STUFF -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="stylesheets/Home.css" />
	</head>

	<body>
		<div class="page-info">
			<div class="navbar">
				<div class="navbarContent">
					<div class="navbarImage">
						<img src="imgs/logo_letsExplore.png" class="navbar-brand" height="32">
					</div>
					<ul class="navbarItems">
						<li><a class="selectedItem" href="">Home</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Wiki </a></li>
						<li><a href="">Discord</a></li>

						<!--<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"> People <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="nav-dropdown-btn">
									<a href="#"> Lance </a>
								</li>
								<li class="nav-dropdown-btn">
									<a href="#"> Some other dude </a>
								</li>

								<li class="nav-dropdown-btn">
									<a href="#"> Another random dude </a>
								</li>
							</ul>
						</li>-->
					</ul>


					<form action="/api/logout.php" method="POST" id="logoutForm" style="display: none">
                                            <input type="submit" name="logout" value="Log Out">
                                        </form>

                                        <?php
                                            if (isset($_SESSION['currentuser'])) {
                                                echo '<a class="login logout" onclick="logout()">'.htmlspecialchars($_SESSION['currentuser'], ENT_QUOTES).'</a>';
                                            } else {
                                                echo '<a class="login" href="#" onclick="login()">Log In &gt;</a>';
                                            }
                                        ?>

				</div>
			</div>

		</div>
		<div class="loginCredentials" id="loginCredentials">
                    <form action="/backend/login.php" method="POST" id="loginForm">
                        <h1>Log In</h1>
                        <div>
                            <label for="username">Username</label>
                            <input type="text" name="username">
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" name="password" />
		       </div>
                        
                        <div><div onclick="document.getElementById('loginForm').submit();" class="loginButton">Log In</div></div>
                    </form>
		</div>
		<div class="page-info-middle">
			<h1>Welcome to the Let's Explore Community Hub!</h1>
		</div>
		<div class="container-fluid">
			<div class="warning">
				<b>We ain't done!</b>
				This website is under development. Forgive us if something doesn't work. :)
			</div>

			<div class="blockContent blockLink">
				<h1>What is Let's Explore?</h1>
				Don't know what Let's Explore is, and want to find out more about it?
			</div>
			<div class="blockContent blockLink">
				<h1>Let's Explorers</h1>
				So who does Let's Explore? Tons of people! Click here to find out more.
			</div>

			<div class="discordBlocks">
				<div class="blockContent blockLink discord" onclick="openDiscordDrawer();" id="DiscordSlider">
					<h1>Discord</h1>
					Great! You know all about what we do and who does it. Join in the chatting fun at our Discord server!
				</div>
				<div class="DiscordDrawer" id="DiscordDrawer">
					<div style="background-color: rgb(40, 40, 40)">
						<a href="https://discord.gg/aZ4CV3b"><div>Join</div></a>
					</div>
					<div style="background-color: rgb(80, 80, 80)">
						<a href="https://discordapp.com"><div>What is Discord?</div></a>
					</div>
					<div style="background-color: rgb(120, 120, 120)"/>
						<a href="Discord/Info/Discord.html"><div>More Info</div></a>
					</div>
				</div>
			</div>
			<div class="blockContent blockLink">
				<h1>Forums</h1>
				Discord is for chatting but what about some REALLY serious stuff? Well check out the forums! <b>Coming Soon!</b>
			</div>
			<div class="blockContent blockLink">
				<h1>Become a Let's Explorer</h1>
				You want to become a Let's Explorer, eh? Welcome to the fun! Follow this guide!
			</div>

			<!--<div class="list-view-items">
				<div class="row text-center">
					<a class="card_text" data-toggle="modal" href="#">
					<div class="col-xs-12 col-sm-6 col-md-3 list-item" style="height: 300px;">
						<img style="width: 125; height: 125;" src="What_is_this.png">
						<p> <strong> What is Let's Explore? </strong> </a>
						<p> Don't know what Let's Explore is, and you want to find out about it? Check out this section, then! <br> </p>
					</div>

					<a class="card_text" data-toggle="modal" href="#">
					<div class="col-xs-12 col-sm-6 col-md-3 list-item" style="height: 300px;">
						<img style="width: 125; height: 125;" src="explorers.png">
						<p href="#"> <strong> Let's Explore(ers) </strong> </a>
						<p> So who does Let's Explore? Tons of people! Click here to find out more. <br> </p>
					</div>

					<a class="card_text" data-toggle="modal" href="https://discord.gg/aZ4CV3b">
					<div class="col-xs-12 col-sm-6 col-md-3 list-item" style="height: 300px;">
						<img style="width: 125; height: 125;" src="Discord.png">
						<p href="#"> <strong> Discord </strong> </a>
						<p> Great! You know all about what we do and who does it. Join in the chatting fun at our Discord server! <br> </p>
						<FORM METHOD="LINK" ACTION="https://discordapp.com/">
						<INPUT TYPE="submit" VALUE="What is Discord?" CLASS="btn btn-info">
						</FORM>
						<FORM METHOD="LINK" ACTION="Discord/Info/Discord.html">
						<INPUT TYPE="submit" VALUE="More info about our Discord Server" CLASS="btn btn-warning">
						</FORM>
					</div>

					<a class="card_text" data-toggle="modal" href="#">
					<div class="col-xs-12 col-sm-6 col-md-3 list-item" style="height: 300px;">
						<img style="width: 125; height: 125;" src="Forums.png">
						<p href="#"> <strong> Forums </strong> </a>
						<p> Discord is for chatting but what about some REALLY serious stuff? Well check out the forums! <br> </p>
						<div class="jumbotron">
							<h3> <strong> Coming Soon™ </strong> </h3>
						</div>
					</div>
					<a class="card_text" data-toggle="modal" href="#">
					<div class="col-xs-12 col-sm-6 col-md-3 list-item" style="height: 300px;">
						<img style="width: 122; height: 122;" src="le.png">
						<p href="#"> <strong> Become a Let's Explorer </strong> </a>
						<p> You want to become a Let's Explorer, eh? Welcome to the fun! Follow this guide! <br> </p>
					</div>
				</div>
			</div>-->
			<div class="row">
				<div class="live">
					<h3> <strong> Watch us live! </strong> </h3>
					<h5> <small> If we are not avalible you can always check out our official main channel <a href="https://www.youtube.com/channel/UCR7i2K59kFOjYZ0tGgS7AOg"> here </a> </small> </h5>
					<embed src="https://www.youtube.com/embed/live_stream?channel=UCR7i2K59kFOjYZ0tGgS7AOg" media="width: 100%; height: 100%;"></embed>
				</div>
			</div>
		</div>

		<!--Scripts-->
		<script src="scripts/home.js"></script>
		<script src="scripts/site.js"></script>
	</body>
</html>
