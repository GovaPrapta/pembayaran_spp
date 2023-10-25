<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transparent Login Form</title>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>

	<div class="login-box">
	<form method="post" action="proses_login.php">
		<h1>L O G I N</h1>
		<!-- Username -->
		<div class="textbox">
			<i class="fas fa-users"></i>
			<input type="text" name="user" placeholder="User" value="">
		</div>
		<!-- Password -->
		<div class="textbox">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password" value="">
		</div>
		<!-- Button -->
		<input class="btn" type="submit"  value="L O G I N">
	</div>

</body>
</html>