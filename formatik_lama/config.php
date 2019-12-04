<?php
date_default_timezone_set("Asia/Jakarta");
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "formatik";

try {    
    //create PDO connection 
    $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
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
