<!Doctype html>
<html>
	<head>
		<title>Sign-Up</title>
		
	</head>
	<div class="form-container"style="padding:15px;box-shadow:1px 1px 10px 1px #ccc;width:350px;margin:0 auto;">
	
		<form method="post" action="functions/sign_up.func.php">
			<h2>Sign-Up</h2>
		
			<input type="text" name="fname" placeholder="FirstName"><br><br>
			<input type="text" name="lname" placeholder="LastName"><br><br>
			<input type="text" name="username" placeholder="UserName"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input type="submit" name="reg-btn" value="Sign-Up">&nbsp;&nbsp; <a href="login.page.php">Cancel</a>
		</form>
	</div>
</html>
