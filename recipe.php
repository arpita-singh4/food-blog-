<html>
	<head>
		<title>theme</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<link href="fonts/css/all.css" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.header-part
			{
				background-image: url(image/rec.jpg);

			}
			.main-menu
			{
				flex-flow: column;
				background-image: url(image/cook.jpg);
				background-size: cover;
				background-position: center center;

				
			}
			.recipe-container
			{
				margin:20px 0 50px 50px;
				display: flex;
				flex-flow: row;
				flex-wrap: wrap;
			}
			.recipe-content
			{
				width: 40%;
				height: auto;
				padding: 10px;
				margin: 15px;
				text-align: center;
			}
			@media screen and (min-width: 280px) and (max-width: 767px)
			{
				.recipe-content
				{
					width:80%;
					display: flex;
				flex-flow: column;
				flex-wrap: wrap;

				}
				.recipe-container
				{
				  margin: unset;					
				}
			}
		</style>
	</head>
	<body>
 		<header class="header-part">
      		<div class="navigation-bar">
				<a href="index.html"> Home </a>
				<a href="about.html"> About </a>
				<a href="service.php"> Services</a>
				<a href="recipe.html"> Recipe </a>
				<a href="contact.html"> Contact</a>

			</div>
			<div>
				<i class="fas fa-shopping-cart"></i>
				<i class="fas fa-utensils"></i>
			</div>
		
		</header>

		<main class="main-menu">
			<section class="recipe-container">
			<div class="recipe-content recipe-image">
				<img src="image/tacos.jpg" width="100%" height="auto">
				
			</div>
			<div class="recipe-content">
				<h1>veggie tacos</h1>
				<p>			
					2 tablespoons canola oil
					3 cups shredded cabbage
					1 medium sweet red pepper, julienned
					1 medium onion, halved and sliced
					2 teaspoons sugar
					1 can (15 ounces) black beans, rinsed and drained
					1 cup salsa
					1 can (4 ounces) chopped green chiles
					1 teaspoon minced garlic
					1 teaspoon chili powder
					1/4 teaspoon ground cumin
					8 taco shells, warmed
					1/2 cup shredded cheddar cheese
					1 medium ripe avocado, peeled and sliced
				</p>
				<a href="read-more.html">read more</a>
			</div>
		</section>
			<section class="recipe-container">
			<div class="recipe-content recipe-image">
				<img src="image/paneer-butter-masala.png" width="100%" height="auto">
				
			</div>
			<div class="recipe-content">
				<h1> paneer-butter-masala</h1>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos perferendis officia, eligendi? Nulla libero facere ipsa explicabo aliquam sint temporibus repudiandae, rerum accusamus molestias neque corrupti sit qui in illo reiciendis hic error blanditiis taque dolores! Totam molestias ea, enim eum iure repellendus iste hic harum consectetur minus, accusantium cum sapiente ullam vitae, dolorem porro fuga molestiae modi, mollitia 
					magnam?
				</p>
				<a href="read-more">read more</a>
			</div>
		</section>
			<section class="recipe-container">
			<div class="recipe-content recipe-image">
				<img src="image/pizza.jpg" width="100%" height="auto">
				
			</div>
			<div class="recipe-content">
				<h1> home-made pizza</h1>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos perferendis officia, eligendi? Nulla libero facere ipsa explicabo aliquam sint temporibus repudiandae, rerum accusamus molestias neque corrupti sit qui in illo reiciendis hic error blanditiis taque dolores! Totam molestias ea, enim eum iure repellendus iste hic harum consectetur minus, accusantium cum sapiente ullam vitae, dolorem porro fuga molestiae modi, mollitia voluptatem natus praesentium. Obcaecati at possimus inventore laborum magni culpa cupiditate quibusdam voluptas, quis quod 
					magnam?
				</p>
				<a href="read-more">read more</a>
			</div>
		</section>
			<section class="recipe-container">
			<div class="recipe-content recipe-image">
				<img src="image/gazr.jpg" width="100%" height="auto">
				
			</div>
			<div class="recipe-content">
				<h1> gazar ka halwa</h1>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quos perferendis officia, eligendi? Nulla libero facere ipsa explicabo aliquam sint temporibus repudiandae, rerum accusamus molestias neque corrupti sit qui in illo reiciendis hic error blanditiis  at possimus inventore laborum magni culpa cupiditate quibusdam voluptas, quis quod 
					magnam?
				</p>
				<a href="read-more">read more</a>
			</div>
		</section>
			

		</main>
		<footer class="footer-part">
			
		
		<div class="service-site">
			
			<div class="sites">
				<i class="fab fa-facebook"></i>
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