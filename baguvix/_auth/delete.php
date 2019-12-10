<?php
include "../config.php";

$get_id = $_GET['id'];
mysqli_query($con, "DELETE FROM user WHERE id='$get_id'") or die(mysqli_error($con));

echo "<script>window.location='" . base_url() . "';</script>";
