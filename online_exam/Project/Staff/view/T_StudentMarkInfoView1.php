<?php
class T_StudentMarkInfoView1 extends View{

private $title,$MarkDetailInfo;
	public function __construct($title,$MarkDetailInfo){
		parent::__construct($title);
		$this->title=$title;
		$this->MarkDetailInfo=$MarkDetailInfo;
	}
	
	public function displayBody(){
	
	$MarkDetailInfo=$this->MarkDetailInfo;
	
	?>
 		<div id="left">
 			<div class="text">
	   				<p id="text" align="center"> Student's Mark Information....</p><br>
		
		<?php if(count($this->MarkDetailInfo)==0){
		?><center>
			Sorry! this student's exam marks are not already calculated!!!!!!!!<br>
			Do you want to calculate it now!
			<form method="post">			
				<input id="box" type="submit" name="btnstdMarkCalculate" value="Calculate">
				<input name="usecase" type="hidden" value="<?php echo UC_STD_MARK_CALCULATE;?>">
				<input name="action" type="hidden" value="<?php echo ACT_STD_MARK_CALCULATE;?>">						
			</form>
			<br>
			</center>
		<?php }
		
		else {?>
		
		<form method="post">					
		<table>	<tr ><td colspan=5 id="text">Enter Student Roll No .(eg.1CST-1,2CS-1,3CT-1,....)</td></tr>			
			<tr><td id="text" colspan=2>Roll_No:</td>
			<td colspan=4>
				<input id="box" type="text" name="txtRoll_No_search" value="" >
				<input id="box" type="submit" name="btnRoll_noSearch" value="Search">
				<input name="usecase" type="hidden" value="UC_ROLLNO_MARK_SEARCH">
				<input name="action" type="hidden" value="ACT_ROLLNO_MARK_SEARCH"></td></tr>
		</table>	<br><br>							
			
			<table border=1 id="box">
					<tr><th id='box'>No</th>
						<th id='box'>Student Name</th>
						<th id='box'>Student Roll_No</th>
						<th id='box'>Total Marks</th>
						<th id='box'>Remark</th>
						<th id='box'>Detail Info</th>
					</tr>
		
				
				<?php 	////////////////////////////////////////////////////////////////////////////////////
				foreach ($MarkDetailInfo as $key=>$value) {
						echo "<tr>";
							$i=0;
							$i=$i+1;		
							echo "<td id='box'>$i</td>";
							
							//foreach ($value as $value1){
								echo "<td id='box'>".htmlspecialchars($value['student_name'])."</td>";
								echo "<td id='box'>".htmlspecialchars($value['student_rollNo'])."</td>";	
								echo "<td id='box'>".htmlspecialchars($value['total_mark'])."</td>";								
								echo "<td id='box'>".htmlspecialchars($value['exam_status'])."</td>";?>
								<td id="box"> <input id="box" type="submit" value="Detail" name="btn_T_DetailStudentMarkInfo1">
										<input type="hidden" value="<?php echo UC_T_STD_DETAIL;?>" name="usecase">
										<input type="hidden" value="<?php echo ACT_T_STD_DETAIL;?>" name="action">
										<input type="hidden" name="student_dtl_id" value="<?php echo $value['student_id'];?>">
								</td>
								<?php echo "</tr>\n";
					}
				}?> 
					
					 
				
				</table>	  
			</form>		
		</div>			         
	   </div>
		
 <?php }
	}
