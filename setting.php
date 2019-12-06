<?php 
    include "config.php";
    $username = $_SESSION['username'];
    $result = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($result);
    $password = md5(mysqli_real_escape_string($con,$data['password']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kelompok 3">
    <title>FORMATIK - Setting</title>
    <?php include "css/include_css.php" ?>
</head>

<body class="bg-dark">
    <?php include "_include/navbar.php" ?>
    <?php include "_include/sidebar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                    <form action="setting.php" method="post" enctype="multipart/form-data">
                    <div style="margin: 0; position: absolute; top:50%; left:60%; margin-right:-40%; transform: translate(-50%, -50%);">
                        <?php echo $data['img_verification'] ?> <br>
                        Ganti Foto: <input type="file" name="image"><br>
                    </div>
                        <table>
                            <tr>
                                <td>
                                    <label for="">Username</label><br>
                                </td>
                                <td>
                                    <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Email</label><br>
                                </td>
                                <td>
                                    <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Password</label><br>
                                </td>
                                <td>
                                    <input type="password" name="password" class="form-control" placeholder="Ganti Password" value="<?php echo $password; ?>">
                                </td>
                            </tr>
                        </table>
                        <button type="submit" name="update-profile">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "_include/footer.php" ?>

    <?php include "js/include_js.php" ?>
</body>

</html>