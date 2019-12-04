<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
    <div id="content" style="margin-top:10px;height:100%;">
        <div class="chat">
            <div class="users">
                <?php
                echo "<h2>Users</h2>";
                $sql = $dbh->prepare("SELECT username FROM user WHERE status=0");
                $sql->execute();
                while ($r = $sql->fetch()) {
                    echo "<div class='user'>{$r['username']}</div>";
                }
                ?>
            </div>
            <div class="chatbox">
                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <h2>Room For ALL</h2>
                    <div class='msgs'>
                        <?php
                            $sql = $dbh->prepare("SELECT * FROM messages");
                            $sql->execute();
                            while ($r = $sql->fetch()) {
                                echo "<div class='msg' title='{$r['posted']}'><span class='name'>{$r['username']}</span> : <span class='msgc'>{$r['msg']}</span></div>";
                            }
                            if (!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                                echo "<script>window.location.reload()</script>";
                            }
                            ?>
                    </div>
                    <form id="msg_form">
                        <input name="msg" size="30" type="text" />
                        <button>Send</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</div>