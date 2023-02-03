<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			background-image: url(image/dif-col.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			height: 100vh;
			font-weight: 600px;

		}
		#service-heading
		{
			text-align: center;
			padding: 20px;
			font-size: 4vw;
			color: white;			
		}

		.container
		{
			display: flex;
		}
		.panel
		{
			margin: 40px;
			padding: 20px;
			display:flex;
			flex-flow: column;
			background-color:#ccc;
			cursor: pointer;
		}
		.service-image
		{
			display: block;
		}
		@media screen and (max-width: 1100px) and (min-width: 300px)
		{
			.container
			{
				display: flex;
				flex-flow: column;
			}
		}

		
	</style>
</head>
<body>
		<h1 id="service-heading">
			Our Service Section
		</h1>
	<div class="container">
		
		<div class="panel">
			<div class="service-image">
				<img src="image/k.jpg" width="100%" height="auto">
			</div>
			<h1>01</h1>
			<h3>service one</h3>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores rem quisquam est id blanditiis, nihil et fugiat nesciunt quae deleniti.</p>
		</div>
		<div class="panel">
			<div class="service-image">
				<img src="image/p.png" width="100%" height="auto">
			</div>
			<h1>02</h1>
			<h3>service one</h3>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores rem quisquam est id blanditiis, nihil et fugiat nesciunt quae deleniti.</p>
		</div>
		<div class="panel">
			<div class="service-image">
				<img src="image/l.png" width="100%" height="auto">
			</div>
			<h1>02</h1>
			<h3>service one</h3>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores rem quisquam est id blanditiis, nihil et fugiat nesciunt quae deleniti.</p>
		</div>
	</div>

</body>
</html>