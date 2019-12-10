<?php include "config.php";

if ($toogle_maintainance == 1) {
    echo "<script>window.location='" . base_url() . "/maintenis.php';</script>";
} else { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Kelompok 3">
        <title>FORMATIK - Search</title>
        <script src="//code.jquery.com/jquery-latest.js"></script>
        <script src="js/chat.js"></script>
        <link rel="stylesheet" type="text/css" href="css/search.css">
        <link rel="icon" href="./images/aset/logo.png" type="image/x-icon">
        <?php include "css/include_css.php"; ?>
    </head>

    <body>
        <?php
            include "_include/navbar.php";
            ?>
         <div class="search">
            <div class="row">
                <div class="col-md-3">
                    <div class="kolom">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Thread</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                      </li>
                    </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="kolom2">
                        <?php
                            include "_include/content_search.php"; ?>
                    </div>
                </div>
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