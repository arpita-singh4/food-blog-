<html>
<head>
	<title>theme</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<link href="fonts/css/all.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.main-menu
		{
			background-image:<?php echo_get_theme_file_uri(url('image/banner2.png');)?>
			background-position: center;
			background-size: cover;		
		}
		
		.contact-section
		{
			width:100%;
			height: auto;
			margin: 5% auto;
		}
		
		.form-area
		{
			display: flex;
			flex-flow: row;
			flex-wrap: wrap;
			background: rgba(0,0,0,0.5);
			border-radius: 25px;
			padding: 1.9em;			
		}

		.masg-area
		{
		display: flex;
		/*flex-direction: column;*/
		flex-wrap: wrap;
		order: 2;
		}

		.masg-area > textarea
		{
		 flex: 1;
		 width: 100px;
		 background:transparent;
		 color: white;
		 padding:15px;
		}
		.detail-area
		{
			flex: 1;
			order: 1;
			margin-right: 2em;
		}
		.detail-area input
		{
		 width:100%;
		 background-color: transparent;
		 color: white;
		 border-radius: 40px;
		}

		.detail-area input,
		.detail-area button
		{
		padding: 1em;
		margin-bottom: 1em;
		}
		label
		{
			color: white;
			font-size: 25px;
			font-weight: 400;
		}

		
		
	</style>
</head>
<body>
 		<header class="header-part">
      		<div class="navigation-bar">
				<a href="index.php"> Home </a>
				<a href="about.html"> About </a>
				<a href="service.php"> Services</a>
				<a href="recipe.html"> Recipe </a>
				<a href="contact.php"> Contact</a>

			</div>
			<div>
				<i class="fas fa-shopping-cart"></i>
				<i class="fas fa-utensils"></i>
			</div>
			<div class="header-headings">
				<h1> 
				CONTACT 
				</h1>
			</div>	
		</header>

		<!-- -------------------main-menu---------------------------- -->

<main class="main-menu">
	<section class="contact-section" >
	 	<form action="" class="form-area">
	 		<div class="detail-area">
	 			<label for="name"> First Name</label>
	 				<input type="text" id="name" >
	 		
	 			<label for="lname">Last Name</label>
	 				<input type="text" id="lname">
	 		
	 			<label for="email">Email</label>
	 				<input type="email" id="email">
	 		
	 			<label for="phone">Contact-Number</label>
	 				<input type="text" id="phone">

	 				<button type="submit"> submit</button>
	 				
	 		</div>

	 		<div class="masg-area">
	 			<label for="masg">massage</label>
	 				<textarea id="masg"></textarea>	 			
	 		</div>
		 </form>
	</section>
</main>

		<!-- ---------------------------footer--------------------- -->
	<footer class="footer-part">
			
		
		<div class="service-site">

			
			<div class="sites">
				<h1> follow-on</h1>
				
				<a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
			</div>
			<div class="sites">

				<i class="fas fa-phone"></i>
				99093394304, 23898402
			</div>
		</div>

			
	</footer>


</body>
</html>