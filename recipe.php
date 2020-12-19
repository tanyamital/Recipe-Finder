<!DOCTYPE html>
<html>
<head>
	<title>Recipe Display</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>

		<div class="main">
			
			<ul>

				<li class="active"><a href="#">Search</a></li>
				<li><a href="./create.php">Add</a></li>
				

			</ul>
		</div>
		<div class="title">
			<h1><?php 
			echo $_GET['q'];
			?>
</h1>
		</div>
		<div class="button">
			<a href="#" class="btn">Rate</a>
			<!-- <a href="./loginchef.php" class="btn">ADD</a> -->
		</div>
	</header>
</body>
</html>