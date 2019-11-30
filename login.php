<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>coba</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="login-card"><img src="aset/logo2.png" class="profile-img-card" />
        <p class="profile-name-card"> </p>
        <form class="form-signin" method="post" action="login.php">
            <input class="form-control" type="text" name="username" required placeholder="Username" autofocus id="inputEmail" />
            <input class="form-control" type="password" name="password" required placeholder="Password" id="inputPassword" />
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" />Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login_user">Sign in</button>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
</body>
</html>