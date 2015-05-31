<?php
class T_StudentMarkInfoView2 extends View{
		private $title,$MarkDetailacademic,$MarkDetailmajor,$MarkDetailInfo;
			public function __construct($title,$MarkDetail_academic,$MarkDetail_major,$MarkDetailInfo=null){
				parent::__construct($title);
				$this->title=$title;
				$this->MarkDetailacademic=$MarkDetail_academic;
				$this->MarkDetailmajor=$MarkDetail_major;
				$this->MarkDetailInfo=$MarkDetailInfo;
				
			}
			
			public function displayBody(){
				$MarkDetail_AC=$this->MarkDetailacademic;
				$MarkDetail_MJ=$this->MarkDetailmajor;?>
	
				<div id="left">
		 			<div class="text">
			   				<p id="text" align="center">Student's Mark Information...</p><br>					
					<form method="post" >
					<p>Please select correct pairs!!(Normal for First Year,CS or CT for Second Year and Third Year)</p>
					<table>
						<tr><td id="text">Academic:</td>
							<td><select name="academic" size="1" id="tbtn">
									<option value="">Choose---</option>									 
											<?php
												foreach ($MarkDetail_AC as $key=>$value) {?>
												<option value="<?php echo $value["academic_name"]?>"><?php echo $value["academic_name"]?>	</option>
												<?php } 
											?>										
						</select></td>
					<td id="text">Major:</td>
					<td><select name="major" size=1 id="tbtn">
									<option value="">Choose---</option>								
											<?php
												foreach ($MarkDetail_MJ as $key=>$value) {?>
												<option value="<?php echo $value["major_name"]?>"><?php echo $value["major_name"]?>	</option>
												<?php } 
											?>										
						</select></td>
							<td> 	<input id="box" name="BtnT_AcMj_SearchView2" type="submit" value="Search"> 
									<input name="usecase" type="hidden" value="<?php echo UC_T_AcMj_SEARCH;?>">
									<input name="action" type="hidden" value="<?php echo ACT_T_AcMj_SEARCH;?>">						</td></tr>
						</table><br>
						</form> 
							<table border=1 id="box">
							<tr><th id="box">No</th>
								<th id="box">Student ID</th>
								<th id="box">Student Name</th>
								<th id="box">Student Roll_No</th>
								<th id="box">Total Marks</th>
								<th id="box">Remark</th>
								<th id="box">Detail Info</th>
							</tr>					
						
						<?php 
						$MarkDetailInfo=$this->MarkDetailInfo;
						$i=0;
						foreach ($MarkDetailInfo as $value) {?>
								<tr>
									<td id='box'>
										<?php echo ++$i;?>
									</td>
									<td id='box'>
										<?php echo htmlspecialchars(@$value['student_id']);?>
									</td>
									<td id='box'>
										<?php echo htmlspecialchars(@$value['student_name']);?>
									</td>
									<td id='box'>
										<?php echo htmlspecialchars(@$value['student_rollNo']);?>
									</td>
									<td id='box'> 
										<?php echo htmlspecialchars(@$value['total_mark']);?>
									</td>
									<td id='box'>
										<?php echo htmlspecialchars(@$value['exam_status']);?>
									</td>
										
									<td id="box">
									<form method="post"> 
										<input id="box" type="submit" value="Detail" name="btn_T_DetailStudentMarkInfo2">
										<input type="hidden" value="<?php echo UC_T_STD_DETAIL_INFO;?>" name="usecase">
										<input type="hidden" value="<?php echo ACT_T_STD_DETAIL_INFO;?>" name="action">
										<input type="hidden" name="student_dtl_id" value="<?php echo $value['student_id'];?>">
									</form>
									</td>
									<!-- <td>
										<a href="?usecase=<?php //echo UC_T_STD_DETAIL_INFO?>&action=<?php //echo ACT_T_STD_DETAIL_INFO?>&student_dtl_id=<?php //echo $value['student_id'];?>";>Detail</a>
									</td> -->
								</tr>
									<?php //echo "</tr>\n";
							}?>
									
						</table>
									
								<?php // Previous and next button
								//echo "kyi pyar";
								
							//	$pagingView=new PagingView($this->noOfStudent,UC_T_STD_DETAIL_INFO,ACT_T_STD_DETAIL_INFO);
							//	$pagingView->displayPrevNext();					
								?>
					
					</div>
					</div>
				
		<?php 		
			}
		}