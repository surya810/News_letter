<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width = device-width">

	<title>Surya Web Design | Services</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
				<div id = "branding">
					<h1><span class="highlight">Surya</span> web design</h1>
				</div>
				<nav>
					<ul>
						<li><a href="home.php">HOME</a></li>
						<li><a href="about.php">ABOUT</a></li>
						<li  class = "current"><a href="services.php">SERVICES</a></li>
					</ul>
				</nav>
			</div>
		</header>

	

	<section id = "newsletter">
		<div class="container">
			<h1> Subscribe to our news letter</h1>
			<form action="maildata.php" method = "post">
				<input type="email" name = 'mail' placeholder="enter your email here">
				<button type="submit" class="button-1">Subscribe</button>
			</form>
		</div>
	</section>


	<section id = "main">
		<div class="container">
			<article id = "main-col">
				<h1 class="page-title">Services</h1>
				<ul id = "services">
					<li>

						<h3>Animal Adoption</h3>
						<p>We have the department regarding animala adoption</p>
					</li>

					<li>

						<h3>Animal Hospital</h3>
						<p>We have our private hospital where we provide treatment to street animals with free of cost</p>
					</li>


					<li>

						<h3>Animal Training</h3>
						<p>We also provide treining to the animals</p>
					</li>
				</ul>

			</article>

			<aside id = "sidebar">
				<div class = 'dark'>
				<h3> Get a quote</h3>

				<form action="subscribe.php" method = "post" class= "quote">
				<div>
					<label>Name</label><br>
					<input type="text" name="user" placeholder="enter your name">
				</div>

				<div>
					<label>Email</label><br>
					<input type="email" name = "mail" placeholder="enter your email here">
				</div>

				<div>
					<label>Message</label><br>
					<textarea placeholder="Message" name="message"></textarea><br>

				<button type="submit" class="button-1">Send</button>
			</form>
				
				</div>

			</aside>





		</div>

	</section>


	<footer>

		<p>Surya web design &copy; 2020</p>

	</footer>

</body>
</html>