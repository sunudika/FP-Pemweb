<?php include "config.php";

if ($toogle_maintainance == 1) {
    echo "<script>window.location='" . base_url() . "/maintenis.php';</script>";
} else {
    $username = $_SESSION['username'];
    $result = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($result);
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
                        <h1 style="color: white; text-align:center;">GANTI PASSWORD</h1>
                        <h3 style="color: white; text-align:center; margin-bottom:100px;"><?php echo $data['username'] ?></h3>
                        <?php
                            if (count($errors) > 0) { ?>
                            <div class="error">
						        <?php foreach ($errors as $error) { ?>
							        <p><?php echo $error ?></p>
						        <?php } ?>
					        </div>
                        <?php } ?>
                        <form action="change_password.php" method="post" enctype="multipart/form-data">
                            <table style="margin-left: 20%;">
                                <tr style="display: none;">
                                    <td>
                                        <label for="">Username </label><br>
                                    </td>
                                    <td>
                                        <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>" required>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Password lama </label><br>
                                    </td>
                                    <td>
                                        <input type="password" name="password" placeholder="" class="form-control" value="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Password baru </label><br>
                                    </td>
                                    <td>
                                        <input type="password" name="password_1" class="form-control" value="" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="">Konfirmasi password baru </label><br>
                                    </td>
                                    <td>
                                        <input type="password" name="password_2" class="form-control" value="" required>    
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="btn" style="margin-left: 40%; margin-bottom:5px; width: 225px;" name="update-password">Ubah</button>
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