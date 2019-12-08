<?php
include "../config.php";

$username = $_SESSION['username'];
mysqli_query($con, "DELETE FROM post WHERE id = '$_GET[id]' AND nama_user='$username'") or die(mysqli_error($con));

echo "<script>window.location='" . base_url() . "';</script>";
