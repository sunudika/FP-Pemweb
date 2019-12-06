<?php
include "../config.php";

$username = $_SESSION['username'];
mysqli_query("UPDATE user SET status='1' WHERE username='$username'");

session_destroy();
unset($_SESSION['username']);

echo "<script>window.location='" . base_url() . "';</script>";
