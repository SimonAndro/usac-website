<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
<script>
$(document).ready(function() { 
		var custom_field = '<div class=\"\"><?php echo ossn_print($params['ads']); ?></div>';
		$(custom_field).insertAfter('table');
});
</script>
