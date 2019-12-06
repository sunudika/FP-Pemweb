<?php
    include "config.php"; 
    if (!isset($_SESSION['username'])) {
        header('location: index.php');
    }
?>