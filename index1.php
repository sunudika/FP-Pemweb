<?php
    include "server.php";

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
  $result = mysqli_query($db, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kelompok 3">
    <title>FORMATIK - Main</title>
    <?php include "css/include_css.php" ?>
</head>

<body class="bg-dark">
    <?php  if (isset($_SESSION['username'])) : ?>
    <?php include "_include/navbar.php" ?>
    <?php include "_include/sidebar.php" ?>
    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['img_verification']."' >";
      echo "</div>";
    }
  ?>

    <?php include "_include/footer.php" ?>

    <?php include "js/include_js.php" ?>
    <?php endif ?>
</body>

</html>