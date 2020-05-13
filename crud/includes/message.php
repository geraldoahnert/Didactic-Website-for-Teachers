<?php

/* Open Session */
session_start();

/* Verify Mensage Error */
if (isset($_SESSION['message'])) {	?>

<!-- Status Mensage --->
<script type="text/javascript">
	window.onload = function(){
		M.toast({html: '<?php echo $_SESSION['message']; ?>'});
	}
</script>


<?php
}

/* Close Session */
session_unset();