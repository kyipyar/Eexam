<?php
class stdSittingExamView extends View{
//	private $question,$maxpage;
	function __construct($result){
		$this->question=$result;
		//$this->maxpage=$maxpage;
	}
	function displayBody(){
		
		$totalrow=count($this->question);
		
				
		?>
		<div id="left">
		<h1>Online Examination</h1>
		<form method="post">
			<div id="sittingeaxm">
		
		<?php 
		/*$l = @$_GET['location'];
		$count=1;	
		if(@$_GET['start_row']!=null)
			   $count=$_GET['start_row']+1;*/
			$No=0;
			   
		//$i=0; //for radio array room no
		
			foreach ($this->question as $question){
				//$i++;                      
				//echo ++$No;
				/*if($No!=null){
				echo "NO is not null";
					$select=" selected";
				}*/
					?>						
							
							<?php echo ++$No." ".$question['questions'];?>
						<ol type="A">							
						<li><input type="radio" name="ans[<?php echo $No;?>]" value="<?php echo $question['possible_answerA'];?>" ><?php echo $question['possible_answerA'];?></li>
						<li><input type="radio" name="ans[<?php echo $No;?>]" value="<?php echo $question['possible_answerB'];?>" ><?php echo $question['possible_answerB'];?></li>
						<li><input type="radio" name="ans[<?php echo $No;?>]" value="<?php echo $question['possible_answerC'];?>" ><?php echo $question['possible_answerC'];?></li>
						<li><input type="radio" name="ans[<?php echo $No;?>]" value="<?php echo $question['possible_answerD'];?>" ><?php echo $question['possible_answerD'];?></li>
						</ol>		
				<hr>
				
				<?php }
				
				//$_SESSION['student_current_answer']=$_POST['ans'];
				?>
		<!-- </ol> -->
		<!-- for previous and next -->
		
			<?php
				//$next_pre=new PagingView($totalrow,UC_STD_SIT_EXAM,ACT_STDL_SIT_EXAM_VIEW);
				//$next_pre->displayPrevNext();		 
			
		?>
			
		
		<center>
		<input id="submitBtn" type="submit"  name="btnStdfinishExam" value="submit" />		
		<input type="hidden" name="usecase" value="<?php echo UC_STD_SIT_EXAM;?>" />
		<input type="hidden" name="action" value="<?php echo ACT_STDL_SIT_EXAM_FINISH;?>" /> 
		</center>				
		
			</div>
			</form>	
			
			
			</div>";
		
	
<?php }
}