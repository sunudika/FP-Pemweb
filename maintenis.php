<?php include "config.php";

if ($toogle_maintainance == 0) {
  echo "<script>window.location='" . base_url() . "';</script>";
} else { ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="fathur">
    <title>SB Admin 2 - 404</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/sb-admin-2.min.css">
    <script src="https://kit.fontawesome.com/659604d02a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/">

  </head>

  <body id="page-top">
    <div class="container-fluid">
      <div class="text-center" style="padding:100px;">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">We Are Under Maintenis</p>
        <p class="text-gray-500 mb-0">Cek lagi nanti slur</p>
      </div>
    </div>

    <script src="<?= base_url() ?>/css/bootstrap.min.js"></script>
  </body>

  </html>
<?php } ?>