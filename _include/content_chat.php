<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
    <div id="content" style="margin-top:10px;height:100%;">
        <div class="chat">
            <div class="users">
                <?php include "users.php"; ?>
            </div>
            <div class="chatbox">
                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <h2>Room For ALL</h2>
                    <div class='msgs'>
                        <?php include "msgs.php"; ?>
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