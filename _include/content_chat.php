<button class="open-button" id="open-chat" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
    <div id="content" style="margin-top:10px;height:100%;">
        <div class="chat">
            <div class="chatbox">
                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <h2 style="margin-top: 10px;">Room For ALL</h2>
                    <div class='msgs'>
                        <?php include "msgs.php"; ?>
                    </div>
                    <form id="msg_form">
                        <input name="msg" size="25" type="text"  autocomplete="off" /><button style="margin-left: 15px; background-color: #3f84e5; border-color: #3f84e5; color:white;">Send</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <button type="button" id="chat-close" class="btn cancel" onclick="closeForm()" style="border-radius: 3px; background-color: #a41623; color:white;">Close</button>
</div>