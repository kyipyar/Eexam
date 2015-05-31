<?php
class T_QuestionCompleteView extends View{
	public function __construct($title)	{
		parent::__construct($title);
		//$this->tch=$tch;
		
	}
	
		 
	public function displayBody(){
	// echo $_SESSION["teacher"];
		?>
	<div id="left">
	   <div class="text">
	   				<p class="post"> Do you want to upload question more?</p><br><br><br>			
		
	<form method="post">
		
			<p align="center">
				
					<input type="submit" id="tbtn" value="Yes" name="btnQesYES">
					<input type="hidden" name="usecase" value="<?php echo UC_T_EDT?>">
					<input type="hidden" name="action" value="<?php echo ACT_T_EDT;?>">
			</p>
			<br>
			<br>
				
			<p align="center">	
					<input type="submit" id="tbtn" value="No" name="btnQesNO">
					<input type="hidden" name="usecase" value="<?php echo UC_T?>">
					<input type="hidden" name="action" value="<?php echo ACT_T_COMEBACK;?>">
				
			</p>		
					
	
	</form>
	</div>
	</div>
	
	
<?php 
		
	}
}