<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width = device-width">

	<title>Surya Web Design | Welcome</title>

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
						<li class="current"><a href="home.php">HOME</a></li>
						<li ><a href="about.php">ABOUT</a></li>
						<li ><a href="services.php">SERVICES</a></li>
					</ul>
				</nav>
			</div>
		</header>

	<section id = "showcase">
		<div class="container">
			<h1>Affordable website design done here</h1>
			<p> Quality matters </p>

		</div>
	</section>

	<section id = "newsletter">
		<div class="container">
			<h1> Subscribe to our news letter</h1>
			<form action="maildata.php" method = "post">
				<input type="email" name = 'mail' placeholder="enter your email here">
				<button type="submit" class="button-1">Subscribe</button>
			</form>
		</div>
	</section>


	<section id = "boxes">
		<div class="container">
			<div class="box">
			<img src="lion.jpg">
			<h3>Lion</h3>
			<p>The lion (Panthera leo) is a species in the family Felidae and a member of the genus Panthera. It is most recognisable for its muscular, deep-chested body, short, rounded head, round ears, and a hairy tuft at the end of its tail. It is sexually dimorphic;</p>

		</div>

		<div class="box">
			<img src="mon.jpg">

			<h3>Monkey</h3>
			<p>Monkey is a common name that may refer to groups or species of mammals, in part, the simians of infraorder Simiiformes. The term is applied descriptively to groups of primates, such as families of New World monkeys and Old World monkeys.</p>
			
		</div>
		<div class="box">
			<img src="rab.jpg">

			<h3>Rabbit</h3>

			
			<p>Rabbits are small mammals in the family Leporidae of the order Lagomorpha (along with the hare and the pika). Oryctolagus cuniculus includes the European rabbit species and its descendants, the world's 305 breeds[1] of domestic rabbit.</p>
			
		</div>

	</section>


	<footer>

		<p>Surya web design &copy; 2020</p>

	</footer>

</body>
</html>