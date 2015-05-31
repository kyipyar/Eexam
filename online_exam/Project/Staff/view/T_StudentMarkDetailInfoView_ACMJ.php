<?php
class T_StudentMarkDetailInfoView_ACMJ extends View{
	private $title,$studentlist,$student_mark;
	public function __construct($title,$studentlist,$student_mark=null)
	{	parent::__construct($title);
		$this->studentlist=$studentlist;
		$this->student_mark=$student_mark;
	}
	
	public function displayBody(){
		$student_list=$this->studentlist;
		$student_mark=$this->student_mark;
		?>
		<div id="left">
 			<div class="text">
	   				
		
		<?php foreach($student_list as $key=>$value){?>
		<h3 id="text" align="center"><?php echo htmlspecialchars($value['student_name']);?>'s Mark Information....</h3><br>
				<table border=1 id="text">
				<tr><td>Student ID</td>			<td><?php echo htmlspecialchars(@$value['student_id']);?></td></tr>
				<tr><td>Student Name</td>		<td><?php echo htmlspecialchars(@$value['student_name']);?></td></tr>
				<tr><td>Student Roll No</td>	<td><?php echo htmlspecialchars(@$value['student_rollNo']);?></td></tr>
				<tr><td>Total_Marks</td>		<td><?php echo htmlspecialchars(@$value['total_mark']);?></td></tr>
				<tr><td>Pass/fail</td>			<td><?php echo htmlspecialchars(@$value['exam_status']);?></td></tr>
				<?php } 
				foreach ($student_mark as $value){?>
				<tr><td><?php echo htmlspecialchars(@$value['subject_name']);?></td>
					<td><?php echo htmlspecialchars(@$value['marks']);?></td></tr>
				<?php	}?>
				</table><br>
						<!-- <form method="post">
							<input id="box" type="submit" name="btnBack" value="Back">
							<input type="hidden" name="usecase" value="<?php // UC_T_STD_INFO_AcMj; ?>"/>
							<input type="hidden" name="action" value="<?php //ACT_T_STD_INFO_AcMj;?>"/>
							
						</form> -->
		</div>
	   	</div>
	 <?php }
}
