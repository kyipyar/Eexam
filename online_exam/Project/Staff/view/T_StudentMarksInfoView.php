<?php
class T_StudentMarksInfoView extends View{
	private $title,$MarkDetailacademic,$MarkDetailmajor,$error_smg;
	public function __construct($title,$MarkDetail_academic=null,$MarkDetail_major=null,$error_smg=null){
		parent::__construct($title);
		$this->title=$title;
		$this->MarkDetailacademic=$MarkDetail_academic;
		$this->MarkDetailmajor=$MarkDetail_major;
		$this->error_smg=$error_smg;
		}
		
	public function displayBody(){
		$MarkDetail_AC=$this->MarkDetailacademic;
		$MarkDetail_MJ=$this->MarkDetailmajor;?>
		<div id="left">
 			<div class="text">
	   			<p id="text" align="center">Student's Mark Information...</p><br>					
				
				<form method="post" >
				<p >Please select correct pairs!!(Normal for First Year,CS or CT for Second Year and Third Year)</p>
				<table>
				<tr><td id="text">Academic:</td>
					<td><select name="academic" size="1" id="tbtn">
									<option value="">Choose---</option>									 
											<?php
												foreach ($MarkDetail_AC as $key=>$value) {?>
												<option value="<?php echo $value["academic_id"]?>"><?php echo $value["academic_name"]?>	</option>
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
					<td> 	<input id="box" name="BtnT_AcMj_Search" type="submit" value="Search"> 
							<input name="usecase" type="hidden" value="<?php echo UC_T_AcMj_SEARCH;?>">
							<input name="action" type="hidden" value="<?php echo ACT_T_AcMj_SEARCH;?>"></td>
				</tr>
				</table>
				</form> 
				<font color=red>
					<?php 
															
						if(isset($this->error_smg['Error_null_academic']))
						echo "You must choose Academic name.. Please select Academic name!!!";
						
						if(isset($this->error_smg['Error_null_major']))
						echo "You must choose Major name.. Please select major name!!!";
						
						if(isset($this->error_smg['FirstYear_error']))
						echo "Please choose Normal for First Year!!!";
						
						if(isset($this->error_smg['SecondYear_error']))
						echo "Please choose CS or CT for Second Year!!! ";
						
						if(isset($this->error_smg['ThirdYear_error']))
						echo "Please choose CS or CT for Third Year!!!";
						
						if(isset($this->error_smg['null']))
						echo "Please select Acdemic and Major.....";
					?></font>
			</div>
		</div>
	<?php }
}