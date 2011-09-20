<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2008 by Greg Gay, Cindy Qi Li, Harris Wong		*/
/* Adaptive Technology Resource Centre / University of Toronto			*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/
// $Id: create_room.inc.php 7208 2008-01-09 16:07:24Z harrisw $

//Get default values if POST is empty
$_POST = loadDefaultValues($_POST);	//openmeetings.inc.php

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<div class="input-form">
		<div class="row"><p><?php echo _AT('openmeetings_create_room_instr'); ?></p></div>
	</div>
	<div class="input-form">
		<?php include ('create_room.tmpl.php'); ?>

		<div class="row buttons">
			<input type="submit" name="create_room" value="<?php echo _AT('openmeetings_create_room'); ?>"  />
		</div>
	</div>
</form>

<script type="text/javascript">
	function om_toggler(name, enabled){
		var obj_w = document.getElementById(name + '_w');
		var obj_h = document.getElementById(name + '_h');
		if(enabled==true) {
			obj_w.disabled = "";	
			obj_h.disabled = "";	
		} else if (enabled==false){
			obj_w.disabled = "disabled";
			obj_h.disabled = "disabled";
		}
	}
</script>
