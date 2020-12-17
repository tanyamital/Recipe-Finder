<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Form</title>
	<link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Log In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
		</div>
		<form id="login" class="input-group" action="loginval.php" method="post">
			<input type="email" class="input-field" name="email" placeholder="Email Id" required>
			<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<button type="submit" class="submit-btn">Log in</button>
			</form>
		<form id="register" class="input-group" action="register.php" method="post">
			<input type="text" class="input-field" name="name" placeholder="Name" required>
			<input type="email" class="input-field" name="email" placeholder="Email" required>
			<input type="text" class="input-field" name="city" placeholder="Which city are you from?" required>
			<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
			<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
			<button type="submit" class="submit-btn">Register</button>
		</form>
	
	  </div>
   </div>
   <script>
   	var x = document.getElementById("login");
   	var y = document.getElementById("register");
   	var z = document.getElementById("btn");
   	function register(){
   		x.style.left = "-400px";
   		y.style.left = "50px";
   		z.style.left = "110px";
   	}
   	function login(){
   		x.style.left = "50px";
   		y.style.left = "450px";
   		z.style.left = "0px";
   	}
   </script>
</body>
</html>