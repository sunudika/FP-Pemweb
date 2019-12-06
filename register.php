<?php include "config.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
</head>

<style>
	* {
		margin: 0px;
		padding: 0px;
	}

	body {
		font-size: 120%;
		background: #F8F8FF;
	}

	#img-div {
		width: 50px;
		height: 50px;
	}

	.header {
		width: 30%;
		margin: 50px auto 0px;
		color: white;
		background: #5F9EA0;
		text-align: center;
		border: 1px solid #B0C4DE;
		border-bottom: none;
		border-radius: 10px 10px 0px 0px;
		padding: 20px;
	}

	form,
	.content {
		width: 30%;
		margin: 0px auto;
		padding: 20px;
		border: 1px solid #B0C4DE;
		background: white;
		border-radius: 0px 0px 10px 10px;
	}

	.input-group {
		margin: 10px 0px 10px 0px;
	}

	.input-group label {
		display: block;
		text-align: left;
		margin: 3px;
	}

	.input-group input {
		height: 30px;
		width: 93%;
		padding: 5px 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid gray;
	}

	.btn {
		padding: 10px;
		font-size: 15px;
		color: white;
		background: #5F9EA0;
		border: none;
		border-radius: 5px;
	}

	.error {
		width: 92%;
		margin: 0px auto;
		padding: 10px;
		border: 1px solid #a94442;
		color: #a94442;
		background: #f2dede;
		border-radius: 5px;
		text-align: left;
	}

	.success {
		color: #3c763d;
		background: #dff0d8;
		border: 1px solid #3c763d;
		margin-bottom: 20px;
	}
</style>

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

		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		<p>Gak mau DAFTAR? Jadi tamu aja lur! <a href="index.php">Home</a> </p>
	</form>
</body>

</html>