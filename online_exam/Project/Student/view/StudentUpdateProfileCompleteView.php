<?php

class StudentUpdateProfileCompleteView extends View {
	
 	public function displayBody(){?>
 	<div id='left'>
 	<p>The information is successfully updated.......</p>
 		<br>
		<form method="post">
		<input id="submitBtn" type="submit" value="Home" name="btnHomePage">
		<input type="hidden" value="action" value="<?php echo UC_FIRST?>">
		<input type="hidden" value="action" value="<?php echo ACT_FIRST_PAGE?>">
		</form>
		</div>
 <?php 	}
}