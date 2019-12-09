<script src="<?= base_url() ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/js/script.js"></script>

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