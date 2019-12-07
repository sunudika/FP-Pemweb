<?php include "config.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/logreg.css" />
	<title>FORMATIK - Registration</title>
	<link rel="icon" href="./images/aset/logo.png" type="image/x-icon">

</head>

<body>
	<div class="reg-card"><img src="images/aset/logo3.png" >

	<form method="post" action="register.php" enctype="multipart/form-data">
		<?php
		if (count($errors) > 0) { ?>
			<div class="error">
				<?php foreach ($errors as $error) { ?>
					<p><?php echo $error ?></p>
				<?php } ?>
			</div>
		<?php } ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			Foto KTM: <input type="file" name="image"><br>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<div class="input-group">
			<a href="login.php" class="btn-sign" style="text-align: center;">Sign In</a>
		</div>


	</form>
	</div>
</body>

</html>