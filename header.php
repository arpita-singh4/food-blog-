<html>
<head>
	<title>theme</title>
	<!-- <link rel="stylesheet" type="text/css" href="/style.css"> -->
	<meta charset="utf-8">
	 

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
			<style>
			.about-container
			{
				/*border: 1px solid black;*/
				padding: 20px;
			}
			.about-container h1
			{
				/*border: 1px solid black;*/
				margin-bottom: 20px;
				padding: 20px;
				color: ;
				font-size: 5vw;
			}
			.about-container p
			{
				/*border: 1px solid black;*/
				padding: 20px;
				line-height: 30px;
				font-weight: 500;
			}


		</style>
		
</head>
<body>
 		<header class="header-part">
      		<div class="navigation-bar">

				<a href="<?php  echo site_url('/index.php')?>"> Home </a>
				<a href="<?php echo site_url('/about.php')?>"> About </a>
				<a href="<?php echo site_url('/service.php')?>"> Services</a>
				<a href="<?php echo site_url('/recipe.php')?>"> Recipe </a>
				<a href="<?php echo site_url('/contact.php')?>"> Contact</a>
				<!-- <i clas fa-shopping-cart"></i>
				<i class="fas fa-utensils"></i> -->

			</div>
			<div>
				<i class="fas fa-shopping-cart"></i>
				<i class="fas fa-utensils"></i>
			</div>
			
			<div class="header-headings">

				<h1> 
					honney&peppar 
				</h1>
				<p>
					for foodies 
				</p>
			</div>	
		</header>
