<script src="<?= base_url() ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/js/script.js"></script>

<!-- CHATROOM PURPOSES -->
<script>
        $(function() {
		    $("#open-chat").click(function(){
		        $("#open-chat").hide();
            });
	    });

        $(function() {
		    $("#chat-close").click(function(){
		        $("#open-chat").show();
            });
	    });
</script>

<!-- NOTIFICATION PURPOSES -->
<script>
	function myFunction() {
		$.ajax({
			url: "view_notification.php",
			type: "POST",
			processData:false,
			success: function(data){
				$("#notification-count").remove();					
				$("#notification-latest").show();$("#notification-latest").html(data);
			},
			error: function(){}           
		});
	 }
	 
	 $(document).ready(function() {
		$('body').click(function(e){
			if ( e.target.id != 'notification-icon'){
				$("#notification-latest").hide();
			}
		});
	});
</script>