<?php

/*
	PHP super globals

	PHP super globals are variables provided by PHP that are available
	anywhere within your project. It doesnt matter in which script you are,
	the super globals are always available.

	There are many different ones, but the ones we will be looking at is
	$_GET and $_POST super globals.
*/
?>
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

var_dump($_POST);

?>