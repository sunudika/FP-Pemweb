<?php include "config.php";

if ($toogle_maintainance == 1) {
    echo "<script>window.location='" . base_url() . "/maintenis.php';</script>";
} else {
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
                        <form action="setting.php" method="post" enctype="multipart/form-data">
                            <table style="margin: 0; position: absolute; top:50%; left:50%; transform: translate(-50%, -50%);">
                                <tr>
                                    <td>
                                        <a href="https://wa.me/62895377128111" class="btn" style="background: white; width:220px;">Lupa Password</a>
                                    </td>
                                </tr>
                            </table>
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