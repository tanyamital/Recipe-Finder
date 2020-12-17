<!DOCTYPE html>
<html>
<head>
	<title>Search form design</title>
	<link rel="stylesheet"  href="css/searchstyle.css">
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
          <form action="searchval.php" method="post">
    		<div class="form">
       			<div class="inputfield">
          			<label>Title</label>
          			<input type="text" class="input" placeholder="Recipe Name" name="title">
       			</div>  
        		<div class="inputfield">
          			<label>Cuisine</label>
          			<input type="text" class="input" placeholder="Indian,Thai,Mexican..." name="cuisine" required>
       			</div>  
       			<div class="inputfield">
          			<label>Chef Name</label>
          			<input type="text" class="input" name="cname">
       			</div>  
      			<div class="inputfield">
          			<label>Rating</label>
          			<input type="Number" class="input" placeholder="Give a rating from 1-5" name="rating">
       			</div> 
        		<div class="inputfield">
          			<label>Prep Time</label>
          			<input type="text" class="input" placeholder = "In minutes" name="time">
          		</div>
       			<div class="inputfield">
          			<label>Serving Size</label>
          			<input type="Number" class="input" name="size">
       			</div> 
      			<div class="inputfield">
        			<input type="submit" value="Search" class="btn">
      			</div>
    </div>
</div>
	
	
</body>
</html>
	
