<?php
    include("config_chat.php");
    $sql=$dbh->prepare("SELECT * FROM messages");
    $sql->execute();
    while($r=$sql->fetch()) {
        echo "<div class='msg' title='{$r['posted']}'><span class='name'>{$r['username']}</span> : <span class='msgc'>{$r['msg']}</span></div>";
    }
    if(!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest') {
        echo "<script>window.location.reload()</script>";
    }
?>
