<!DOCTYPE html>
<html>
<head>
	<title>user registraion | PHP</title>
</head>
<body>
	
	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<h1>Registration</h1>
				<p>Fill up the form</p>
				<fieldset>
				<label for="firstname"><b>First Name</b></label><br>
				<input type="text" name="firstname" required><br>

				<label for="lastname"><b>Last Name</b></label><br>
				<input type="text" name="lastname" required><br>

				<label for="email"><b>Email Address</b></label><br>
				<input type="email" name="email" required><br>

				<label for="password"><b>Password</b></label><br>
				<input type="password" name="password" required><br>

				<input type="submit" name="create" value="Sign Up">
			</div>
			</fieldset>
		</form>
	</div>
</body>
</html>