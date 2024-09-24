<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="index.php" method="post">
		<div>
			<label for="">Please enter your email</label>
		</div>
		<div>
			<input type="text" name="email">
		</div>
		<div>
			<label for="">Please enter your password</label>
		</div>
		<div>
			<input type="password" name="password">
		</div>
		<div>
			<button type="login">Login</button>
		</div>
	</form>
</body>

</html>

<?php

echo "The email address is {$email} <br>";
echo "The password is {$password} <br>";
