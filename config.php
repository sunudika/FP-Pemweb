<?php
date_default_timezone_set("Asia/Jakarta");
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "formatik";

$con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

function base_url($url = null)
{
    $base_url = "http://localhost/formatik";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
