<?php
include "config_chat.php";
include "server.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>

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
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
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
			Photo: <input type="file" name="image"><br>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		<p>Gak mau DAFTAR? Jadi tamu aja lur! <a href="index.php">Home</a> </p>
	</form>
</body>

</html>