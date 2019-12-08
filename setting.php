<?php include "config.php";

if ($toogle_maintainance == 1) {
    echo "<script>window.location='" . base_url() . "/maintenis.php';</script>";
} else {
    $username = $_SESSION['username'];
    $result = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($result);
    $password = md5(mysqli_real_escape_string($con, $data['password']));
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
        <?php include "_include/navbar.php"; ?>
        <div class="container">
            <div class="row">
                <?php
                    include "_include/sidebar.php"; ?>

                <div class="col">
                    <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                        <h1 style="color: white; text-align:center; margin-bottom:400px;">EDIT PROFIL</h1>
                        <div style="margin: 0; position: absolute; top:40%; left:50%; margin-right:-40%; transform: translate(-50%, -50%);">
                            <img src="<?= base_url() ?>/images/profile/<?= $data['img_profile'] ?>" alt="" style="border-radius:100%; margin-top:10px;" width="200" height="200">
                        </div>
                        
                        <form action="setting.php" method="post" enctype="multipart/form-data">
                            <div style="margin: 0; position: absolute; top:62%; left:50%; margin-right:-40%; transform: translate(-50%, -50%);">
                                Ganti Foto: <input type="file" name="image"><br>
                            </div>
                            <table style="margin-top: 100px;">
                                <tr>
                                    <td>
                                        <label for="">Username </label><br>
                                    </td>
                                    <td>
                                        <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Email </label><br>
                                    </td>
                                    <td>
                                        <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Password </label><br>
                                    </td>
                                    <td>
                                        <a href="change_password.php" class="btn" style="background: white; width:220px;">Ganti Password</a>
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="btn" style="margin-left: 68px; margin-bottom:5px; width: 220px;" name="update-profile">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include "_include/footer.php";
            include "js/include_js.php";
            ?>
    </body>

    </html>
<?php } ?>