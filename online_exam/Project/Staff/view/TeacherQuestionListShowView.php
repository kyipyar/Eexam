<?php
class TeacherQuestionListShowView extends View{
	private $ques;
	public function __construct($title,$result){
		parent::__construct($title);
		$this->ques=$result;
		
	}
	public function displayBody(){?>
		
	<!-- <div id="QuesListView">
		<form method="post">
				 
		<?php 
		//echo '<ol>';
		//$i=0;
		//$ans=array();
		?>
		
		   <?php 
			//foreach ($this->ques as $Que){
			//	$i++;
					?>						
						<li>	<?php //echo $Que['questions'];?></li>
						<ol type="A">							
						<li><input type="radio" name="ans[<?php //echo $i;?>]" value="<?php //echo $Que['possible_answerA'];?>"><?php // echo $Que['possible_answerA'];?></li>
						<li><input type="radio" name="ans[<?php //echo $i;?>]" value="<?php //echo $Que['possible_answerB'];?>"><?php //echo $Que['possible_answerB'];?></li>
						<li><input type="radio" name="ans[<?php //echo $i;?>]" value="<?php //echo $Que['possible_answerC'];?>"><?php //echo $Que['possible_answerC'];?></li>
						<li><input type="radio" name="ans[<?php //echo $i;?>]" value="<?php //echo $Que['possible_answerD'];?>"><?php //echo $Que['possible_answerD'];?></li>
						</ol>		
				<hr>
				<?php //} echo '</ol>';?>
		
		
		
		 <input type="submit" id="stdLink" name="btnStdfinishExam" value="submit" />
		<input type="hidden" name="usecase" value="<?php //echo UC_STD_SIT_EXAM;?>" />
		<input type="hidden" name="action" value="<?php //echo ACT_STDL_SIT_EXAM_FINISH;?>" /> 
		
		</form>
		</div>-->
		
		
	<div id="QuesListView" >
		
			<table id="box">
				<?php 
				$i=0;
				foreach ($this->ques as $Que){?>
				<tr>
					<td id="box"><?php echo ++$i;?></td>
					<td id="box"><?php echo $Que['questions'];?><br>
						<input type="radio" name="ans[<?php echo $i;?>]" value="<?php echo $Que['possible_answerA'];?>"><?php echo $Que['possible_answerA'];?>
						<input type="radio" name="ans[<?php echo $i;?>]" value="<?php echo $Que['possible_answerB'];?>"><?php echo $Que['possible_answerB'];?>
						<input type="radio" name="ans[<?php echo $i;?>]" value="<?php echo $Que['possible_answerC'];?>"><?php echo $Que['possible_answerC'];?>
						<input type="radio" name="ans[<?php echo $i;?>]" value="<?php echo $Que['possible_answerD'];?>"><?php echo $Que['possible_answerD'];?>
					</td >
					<td id="box">
						<?php 
						if($Que['question_status']==1)
							echo "Open";
						elseif($Que['question_status']==0)
							echo "Close";?>
					</td>
					<td id="box">
						<form method="post">
							<input type="submit" value="Update" name="btnUpdateFromQuesListView">
							<input type="hidden" name="usecase" value="<?php echo UC_UPD_EDT_QUES;?>">
							<input type="hidden" name="action" value="<?php echo ACT_UPD_EDT_QUES; ?>">
							<input type="hidden" name="questions_id" value="<?php echo $Que['questions_id'];?>">
						</form>
					</td >
					<td id="box">
						<form method="post">
							<input type="submit" value="Change Status" name="btnChangeStatus">
							<input type="hidden" name="usecase" value="<?php echo UC_CH_STATUS_QUES;?>">
							<input type="hidden" name="action" value="<?php echo ACT_CH_STATUS_QUES; ?>">
							<input type="hidden" name="questions_id" value="<?php echo $Que['questions_id'];?>">
							<input type="hidden" name="question_status" value="<?php echo $Que['question_status'];?>">
						</form>
					</td>
					
				</tr>
					<?php }?>
			</table>
		
		<form method="post">
			<input type="submit" value="Back" name="btnBack">
			<input type="hidden" name="usecase" value="<?php echo UC_T_V_QUE1;?>">
			<input type="hidden" name="action" value="<?php echo ACT_T_V_QUE1;?>">
		</form>
	</div>
	
		<?php 
			
	}
}