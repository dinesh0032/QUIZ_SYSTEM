<?php
	include 'loginserv.php';
	include 'signupserv.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login & SignUp</title>
</head>
<body>

	<div id="login">
		<h2>LOGIN HERE</h2>
		<form action="" method="post">
			<input type="text" name="username" placeholder="Username" value=""></br></br>
			<input type="password" name="password" placeholder="password" value=""></br></br>
			<input type="submit" name="Login" value="Login" >
			<span><?php echo $invalidone ; ?> </span>
		</form>
	</div>

	<div id="sign">
		<h2>SIGNUP HERE</h2>
		<form action="" method="post">
			<input type="text" name="username" placeholder="Username" value=""></br></br>
			<input type="password" name="password" placeholder="password" value=""></br></br>
			<input type="submit" name="SignUp" value="SignUp">
			<span><?php echo $invalidtwo ; ?> </span>
		</form>
	</div>

</body>
</html>
