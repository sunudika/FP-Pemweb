<?php include "config.php" ?>
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>
                                    <label for="">Fullname</label><br>
                                </td>
                                <td>
                                    <input type="text" name="fullname" class="form-control" value="fullname" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Username</label><br>
                                </td>
                                <td>
                                    <input type="text" name="username" class="form-control" value="username" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">NPM</label><br>
                                </td>
                                <td>
                                    <input type="text" name="npm" class="form-control" value="NPM" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Email</label><br>
                                </td>
                                <td>
                                    <input type="email" name="email" class="form-control" value="Email@email.com" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Password</label><br>
                                </td>
                                <td>
                                    <input type="password" name="password" class="form-control" placeholder="Ganti Password">
                                </td>
                            </tr>
                        </table>
                        <input type="button" value="ubah">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "_include/footer.php" ?>

    <?php include "js/include_js.php" ?>
</body>

</html>