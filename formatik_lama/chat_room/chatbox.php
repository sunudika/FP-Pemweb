<?php
include("config.php");
if(isset($_SESSION['username'])){
?>
 <h2>Room For ALL</h2>
 <div class='msgs'>
  <?php include("msgs.php");?>
 </div>
 <form id="msg_form">
  <input name="msg" size="30" type="text"/>
  <button>Send</button>
 </form>
<?php 
}
?>