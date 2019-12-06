<?php include "config.php";

if ($toogle_maintainance == 1) {
    echo "<script>window.location='" . base_url() . "/maintenis.php';</script>";
} else {
    if (!isset($_SESSION['username'])) {
        header('location: index.php');
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Kelompok 3">
        <title>FORMATIK - Main</title>
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <script src="js/chat.js"></script>
        <?php include "css/include_css.php"; ?>
    </head>

    <body class="bg-dark">
        <?php
            include "_include/navbar.php";
            ?>
        <div class="container">
            <div class="row">
                <?php
                    include "_include/sidebar.php";
                    include "_include/content_home.php"; ?>
            </div>
        </div>

        <?php
            if (isset($_SESSION['username'])) {
                include "_include/content_chat.php";
            }

            include "_include/footer.php";
            include "js/include_js.php";
            ?>

        <div style="padding:20px;"></div>
    </body>

    </html>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

<?php } ?>