<?php
include "server.php";
include "chat_room/config.php";
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

$image = $_SESSION['username'];
$result = mysqli_query($db, "SELECT * FROM user WHERE username='$image'");
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
  <script src="chat.js"></script>
  <link rel="stylesheet" href="chat_room/chat.css">
  <?php include "css/include_css.php"; ?>
</head>

<body class="bg-dark">
  <?php if (isset($_SESSION['username'])) : ?>
    <?php include "_include/navbar.php" ?>
    <?php
      if (isset($_GET['logout'])) {
        include("chat_room/config.php");
        $sql = $dbh->prepare("UPDATE user SET status='1' WHERE username=?");
        $sql->execute(array($_SESSION['username']));
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
      }

      include "_include/sidebar.php";

      include "_include/content_home.php";
      ?>



    <button class="open-button" onclick="openForm()">Chat</button>
    <div class="chat-popup" id="myForm">
      <div id="content" style="margin-top:10px;height:100%;">
        <div class="chat">
          <div class="users">
            <?php include("users.php"); ?>
          </div>
          <div class="chatbox">
            <?php include("chat_room/chatbox.php"); ?>
          </div>
          <div class="jd-footer"><input id="search_chat" placeholder="Search"></div>
        </div>
      </div>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </div>

    <?php include "_include/footer.php" ?>

    <?php include "js/include_js.php" ?>
  <?php endif ?>
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