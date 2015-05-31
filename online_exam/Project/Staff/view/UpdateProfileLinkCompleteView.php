<?php
class UpdateProfileLinkCompleteView extends View{
	
public function __construct($title){
		parent::__construct($title);
	}
	public function displayBody(){?>
	<div id="left">
	<br>
		<form method="post">
			<input type="submit" value="Home" name="btnStaffHomePage">
			<input type="hidden" name="usecase" value="<?php echo U_ST_HP;?>">
			<input type="hidden" name="action" value="<?php echo A_ST_HP;?>">
		</form>
	</div>
	
	<?php }
}