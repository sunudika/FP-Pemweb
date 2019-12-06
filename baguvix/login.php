<?php include "../config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini Login</title>
</head>

<body>
    <form action="" method="post">
        <label>User</label>
        <input type="text" name="admin">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" name="login_admin" value="LOGIN">
    </form>

    <?php
    if (isset($_POST['login_admin'])) {
        $admin = mysqli_real_escape_string($con, $_POST['admin']);
        $pass = md5(mysqli_real_escape_string($con, $_POST['password']));
        $sql_login = mysqli_query($con, "SELECT * FROM admin WHERE username = '$admin' AND password = '$pass'") or die(mysqli_error($con, ""));
        if (mysqli_num_rows($sql_login) > 0) {
            $_SESSION['admin'] = $admin;
            echo "<script>window.location='" . base_url() . "/baguvix/dashboard.php';</script>";
        } else {
            echo "<script>alert('Login Gagal');</script>";
        };
    } ?>
</body>

</html>