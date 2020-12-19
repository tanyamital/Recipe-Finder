<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/create1style.css">
	</head>
	<body>
		<p>
			hi, 
			<?php 
			echo $_GET['q'];
			?>
		</p>
			<div class="wrapper">
    			<div class="title">FIND RECIPES</div>
          <form action="welcome.php" method="post">
    		<div class="form">
       			<div class="inputfield">
          			<label>Title</label>
          			<input type="text" class="input" placeholder="Recipe Name" name="title" required>
       			</div>  
        		<div class="inputfield">
          			<label>Cuisine</label>
          			<input type="text" class="input" placeholder="Indian,Thai,Mexican..." name="cuisine" required>
       			</div>  
       			<div class="inputfield">
          			<label>Ingredients</label>
          			<textarea name="ingredients" rows="5" cols="40" required></textarea>
       			</div>  
      			<div class="inputfield">
          			<label>Method</label>
          			<textarea name="method" rows="10" cols="40" required></textarea>
       			</div> 
        		<div class="inputfield">
          			<label>Prep Time</label>
          			<input type="text" class="input" placeholder = "In minutes" name="time" required>
          		</div>
       			<div class="inputfield">
          			<label>Serving Size</label>
          			<input type="Number" class="input" name="size" required>
       			</div> 
      			<div class="inputfield">
        			<input type="submit" value="Add" class="btn">
      			</div>
    </div>
</div>
	
	</body>
</html>
