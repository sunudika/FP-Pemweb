<?php 
	require_once("config.php");

	if(isset($_POST['register'])) {
		//filter data yang diinput
		$full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	$sql = "INSERT INTO user (full_name, username, email, password) 
            VALUES (:full_name, :username, :email, :password)";
    $stmt = $con->prepare($sql);

	//bind parameter ke query
	$params = array(
		":full_name" => $full_name,
		":username" => $username,
		":password" => $password,
		":email" => $email 
	);

	//eksekusi query untuk disimpan di database
	$saved = $stmt->execute($params);

	//jika query berhasil, maka user terdaftar
	//user dialihkan ke halaman login
	if($saved) header("Location: login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Pesbuk</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Bergabunglah bersama ribuan orang lainnya...</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="full_name">Nama Lengkap</label>
                <input class="form-control" type="text" name="full_name" placeholder="Nama kamu" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect.png" />
        </div>

    </div>
</div>

</body>
</html>