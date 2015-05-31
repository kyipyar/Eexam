<?php
class stdFinishSitExamView extends View{
	private $mark;
	private $nosubject;
	function __construct($t=null,$nosubject=null){
		$this->mark=$t;
		$this->nosubject=$nosubject;
	}
	function displayBody(){
		
		if($this->nosubject==PT_NO_SUBJECT_TO_SIT_EXAM){
			echo $this->nosubject;?>
			<form method="post">
			<p align="center">	
							<input type="submit" id="tbtn" value="OK" name="btnstdSitExamNO">
							<input type="hidden" name="usecase" value="<?php echo UC_STD?>">
							<input type="hidden" name="action" value="<?php echo ACT_STD_CNF;?>">
						
			</p>
			</form>
		<?php }
		else {
		?><!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
			<div id="left">
			   <div class="text">
			   				<p class="post"> Do you want to enjoy other subject?</p><br><br><br>			
				
			<form method="post">
				
					<p align="center">
						
							<input type="submit" id="submitBtn" value="Yes" name="btnstdSitExamYES">
							<input type="hidden" name="usecase" value="<?php echo UC_STD_SIT_EXAM?>">
							<input type="hidden" name="action" value="<?php echo ACT_STD_SIT_EXAM;?>">
					</p>
					<br>
					<br>
						
					<p align="center">	
							<input type="submit" id="submitBtn" value="No" name="btnstdSitExamNO">
							<input type="hidden" name="usecase" value="<?php echo UC_FIRST?>">
							<input type="hidden" name="action" value="<?php echo ACT_FIRST_PAGE_HOME;?>">
						
					</p>		
							
			
			</form>
			</div>
			</div>
		
		<?php 
		}
	}
}