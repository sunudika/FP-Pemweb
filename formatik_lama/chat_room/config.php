<?php
ini_set("display_errors","on");
if(!isset($dbh)){
 session_start();
 date_default_timezone_set("UTC"); // Set Time Zone
 $host = "localhost"; // Hostname
 $user = "root"; // Username Here
 $pass = ""; //Password Here
 $db   = "formatik"; // Database Name
 $dbh  = new PDO('mysql:dbname='.$db.';host='.$host,$user,$pass);
}
?>
