<?php
class sitExamMjrChoView extends View{
	//private $major;
	private $err;
	function __construct($err=null){
		//$this->major=$major;
		$this->err=$err;
		
	}
	function displayBody(){	
	if(isset($_SESSION['choosed_major'])){
				$major=$_SESSION['choosed_major'];
			}	
		?> <!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<br>
		<div id="left">
		<h1>Online Examination</h1>
		<br>
		<center>
		<h3> Choose Subject to sit the exam:</h3>
		<br>
		<form method="post">
		<select name="subjectId">	
				<option value=""> Choose ....</option>			
			<?php 
			foreach ($major as $mm){
					?>			
					<option value="<?php echo $mm['subject_id'];?>"><?php echo $mm['subject_name']?></option>					
				
				<?php }?>
		</select>
		
		<input type="submit" id="start" name="btnStdSitExamAfterchosMajor" value="Start" />
		<input type="hidden" name="usecase" value="<?php echo UC_STD_SIT_EXAM;?>" />
		<input type="hidden" name="action" value="<?php echo ACT_STD_REL_SIT_EXAM;?>" /> 
		</form>
		<br>
		<?php if(isset($this->err['suberr']))
				echo "<font color='red'>".ERR_SUB_CHOSE."</font>";
				if(isset($this->err['finished'])){
				echo "<font color='red'>".ERR_SUB_CHOSE_FINISH."</font>";
		}
			?>
			
			</center>
		</div>
	<?php 	
	
	}
	
}