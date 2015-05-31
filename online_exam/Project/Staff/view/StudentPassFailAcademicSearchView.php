<?php
class StudentPassFailAcademicSearchView extends View{
	
	 private $status_academic;
	 private $status_major;
	 private $student_pf_status;
	 
     public function __construct($title,$status_academic,$status_major,$student_pf_status=null){
     
     	   parent::__construct($title);
     	   $this->status_academic=$status_academic;
     	   $this->status_major=$status_major;
     	   $this->student_pf_status=$student_pf_status;
     	   
     }
     
     public function displayBody(){
     //echo"Academic";
                $Status_AC=$this->status_academic;
                //echo "^^^^^^^^<pre>";
			   // print_r ($Status_AC);
			   // echo "</pre>";
				$Status_MJ=$this->status_major;
				//echo "<br>*********<pre>";
			   // print_r ($Status_MJ);
			   // echo "</pre>";
				$Statuspf=$this->student_pf_status;
				
				//echo "<br>The number of record list is ->".count($this->student_pf_status);?>
				
				
				<form method="post" >  
				  <table> 
						<tr>
							<td id="text">Academic:</td>
							<td><select name="academic" size="1" id="tbtn">
									<option value="A">Choose---</option>									 
										<?php
											foreach ($Status_AC as $key=>$value) {?>
									<option value="<?php echo $value["academic_id"]?>"><?php echo $value["academic_name"]?>	</option>
														<?php } 
													?>										
								</select>
							</td>
							<td id="text">Major:</td>
							<td><select name="major" size=1 id="tbtn">
										<option value="M">Choose--</option>								
													<?php
														foreach ($Status_MJ as $key=>$value) {?>
										<option value="<?php echo $value["major_name"]?>"><?php echo $value["major_name"]?>	</option>
														<?php } 
													?>										
								</select>
							</td>
							 <td>		
							 		<input id="tbtn" name="btnT_AcMj_PF_Search" type="submit" value="Search"> 
									<input name="usecase" type="hidden" value="<?php echo UC_T_AcMj_PF_SEARCH;?>">
									<input name="action" type="hidden" value="<?php echo ACT_T_AcMj_PF_SEARCH;?>">
							</td>
						</tr>
						</table>
					</form>
				
				
				<?php if(count($this->student_pf_status)==0){?>
					<div id="left">
			 			<div class="text">
				   				<p id="text" align="center">Passed/Failed Student...</p><br>
				   				There is still no Exam Sit Record for this student list.....
				   		</div>
    				</div>
				<?php }
				else{?>
				<div id="left">
		 			<div class="text">
			   				<p id="text" align="center">Passed/Failed Student...</p><br>
		  									
	<form method="post" >  
				  <!-- <table> 
						<tr>
							<td id="text">Academic:</td>
							<td><select name="academic" size="1" id="tbtn">
									<option value="A">Choose---</option>									 
										<?php
											//foreach ($Status_AC as $key=>$value) {?>
									<option value="<?php //echo $value["academic_id"]?>"><?php //echo $value["academic_name"]?>	</option>
														<?php //} 
													?>										
								</select>
							</td>
							<td id="text">Major:</td>
							<td><select name="major" size=1 id="tbtn">
										<option value="M">Choose--</option>								
													<?php
														//foreach ($Status_MJ as $key=>$value) {?>
										<option value="<?php //echo $value["major_name"]?>"><?php //echo $value["major_name"]?>	</option>
														<?php //} 
													?>										
								</select>
							</td>
							 <td>		
							 		<input id="tbtn" name="btnT_AcMj_PF_Search" type="submit" value="Search"> 
									<input name="usecase" type="hidden" value="<?php //echo UC_T_AcMj_PF_SEARCH;?>">
									<input name="action" type="hidden" value="<?php //echo ACT_T_AcMj_PF_SEARCH;?>">
							</td>
						</tr>
						</table> -->
						<br>
						<br>
						<br>
					<center>	
					<table border=1 id="box" >
							<tr><th id="box" >No</th>
								<th id="box">Student Name</th>
								<th id="box">Student Roll_No</th>
								<th id="box">Status</th>							
							</tr>
							
							<?php 	
					 
							$i=0;
						foreach ($Statuspf as $key=>$value) {?>
						 <?php 
									//$i=$i+1;
								echo "<tr>";		
								echo "<td id='box'>".++$i."</td>";
									
									//foreach ($value as $value1){
								echo "<td id='box'>".htmlspecialchars(@$value['student_name'])."</td>";
								echo "<td id='box'>".htmlspecialchars(@$value['student_rollNo'])."</td>";																		
								echo "<td id='box'>".htmlspecialchars(@$value['exam_status'])."</td>";
							echo"</tr>";
					
					 }
					?>
					</table>
					</center>
					<br>
					
							  <input id="tbtn" align="bottom" type="submit" value="Back" name="btn_T_PF_Aca_Search_Back">
							  <input type="hidden" value="<?php echo UC_T_STD_PF_AC_BACK;?>" name="usecase">
							  <input type="hidden" value="<?php echo ACT_T_STD_PF_AC_BACK;?>" name="action">                     
       </form>
    </div>
    </div>	
<?php 		
		}
     }
}