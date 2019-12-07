<?php
    include("config_chat.php");
    echo "<h2>Users</h2>";
    $sql=$dbh->prepare("SELECT username FROM user WHERE status=0");
    $sql->execute();
    while($r=$sql->fetch()) {
        echo "<div class='user'>{$r['username']}</div>";
    }
