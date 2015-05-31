<?php
class StudentPassFailView2 extends View{
   private $status_academic;
   private $status_major;
   private $error;
   public function __construct($title,$status_academic=null,$status_major=null,$error_msg=null){
    parent::__construct($title);
    $this->status_academic=$status_academic;
    $this->status_major=$status_major;
    $this->error=$error_msg;
   }
   
   public function displayBody(){
   //echo "Academic page";
   $Status_AC=$this->status_academic;
   $Status_MJ=$this->status_major;?>
   	
   
   <div id="left">
			<h1>Welcome to Teachers!</h1>	
            	<div class="text" align="center">Passed/Failed Student</div><br>
				<div class="text">  
   <form method="post">
   <p>Please choose <em>"Normal" </em>for First Year and choose<em> "CS" </em>or<em> "CT"</em> for either Second Year or Third Year!!</p><br><br>
					
			 
			<table>
				<tr><td id="text">Academic:</td>
					<td><select name="academic" size="1" id="tbtn">
										<option value="A">Choose---</option>								 
											<?php
												foreach ($Status_AC as $key=>$value) {?>
												<option value="<?php echo $value["academic_id"]?>"> <?php echo $value["academic_name"]?>	</option>
												<?php } 
											?>									
										</select></td>
										<td id="text">Major:</td>
					<td><select name="major" size=1 id="tbtn">
										<option value="M">Choose--</option>								
												<?php
												foreach ($Status_MJ as $key=>$value) {?>
												<option value="<?php echo $value["major_name"]?>"><?php echo $value["major_name"]?>	</option>
												<?php } 
											?>									
										</select></td>
					<td> 	<input id="box" name="btnT_AcMj_PF_Search" type="submit" value="Search"> 
							<input name="usecase" type="hidden" value="<?php echo UC_T_AcMj_PF_SEARCH;?>">
							<input name="action" type="hidden" value="<?php echo ACT_T_AcMj_PF_SEARCH;?>"></td></tr>
				</table>
				</form> 
				<font color=red>
					<?php 
					//echo"ddd";											
						if(isset($this->error['Error_null_academic']))
						echo "You must choose Academic name.. Please select Academic name!!!";
						
						if(isset($this->error['Error_null_major']))
						echo "You must choose Major name.. Please select major name!!!";
						
						if(isset($this->error['FirstYear_error']))
						echo "Please choose Normal for First Year!!!";
						
						if(isset($this->error['SecondYear_error']))
						echo "Please choose CS or CT for Second Year!!! ";
						
						if(isset($this->error['ThirdYear_error']))
						echo "Please choose CS or CT for Third Year!!!";
						
						if(isset($this->error['null']))
						echo "Please select Acdemic and Major.....";
					?></font>
			</div>
			</div>
 <?php   }
}