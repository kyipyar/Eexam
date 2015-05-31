<?php
class T_QuestionConfirmView extends View{
	public function __construct($title)	{
		parent::__construct($title);
		//$this->tch=$tch;
		
	}
	public function displayBody(){
		if (isset($_SESSION['QesPos']))
		 	$teacher_QesPos=$_SESSION["QesPos"];
		else  
			$teacher_QesPos= new TeacherQes();			
		?>

<div id="left">
	   <div class="text">
	   				<p class="post"> Please upload questions!</p><br>
	<form method="post">	
		<table>
		<tr>
			<td id="text">Question:</td>
			<td><textarea id="box" cols="40" rows="5" name="question" disabled><?php echo $teacher_QesPos->getQes();?></textarea>
			</td>
		</tr>
		<tr>
			<td id="text">Possible AnswerA:</td>
			<td><input type="text" id="box" value="<?php echo $teacher_QesPos->getPosAnsA();?> "disabled></td>
		</tr>
		<tr>
			<td id="text">Possible AnswerB:</td>	
			<td><input type="text"  id="box" value="<?php echo $teacher_QesPos->getPosAnsB();?> " disabled></td>
		</tr>
		<tr>
		<tr>
			<td id="text">Possible AnswerC:</td>
			<td><input type="text" id="box" value=" <?php echo $teacher_QesPos->getPosAnsC();?> "disabled></td>
		</tr>
		<tr>
			<td id="text">Possible AnswerD:</td>
			<td><input type="text" id="box" value="<?php echo $teacher_QesPos->getPosAnsD();?> " disabled></td>
		</tr>
		<tr>
			<td id="text">Correct Answer:</td>
			<td><input type="text"  id="box" value="<?php echo $teacher_QesPos->getCorAns();?> " disabled></td>
		</tr>
		<tr>
			<td></td>
			
				<td>
				
				<input type="submit" id="tbtn" value="Confirm" name="btnQesComplete">
				<input type="hidden" name="usecase" value="<?php echo UC_T_UPD_CMF; ?>">
				<input type="hidden" name="action" value="<?php echo ACT_T_UPD_CMF; ?>">	
					
				<input type="submit" id="tbtn" value="Cancel" name="btnQesConfirmCancel">
				<input type="hidden" name="usecase" value="<?php echo UC_T_EDT?>">
				<input type="hidden" name="action" value="<?php  echo ACT_T_EDT;?>">
			
				</td>
			</table>
   </form>	
   
 	     </div>	
	</div>	
<?php
		//echo "Successfully Upload"; 	
	}
}
