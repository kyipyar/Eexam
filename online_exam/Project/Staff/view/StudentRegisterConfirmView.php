<?php
class StudentRegisterConfirmView extends View{



private  $title;
public function __construct($title){
	parent::__construct($title);
	$this->title=$title;
	
	
	
	
	
	//$this->stdLink=$stdLink;
	
	
}

public function displayBody(){
	
	

	if(isset($_SESSION["stdLink"]))
  		$stdLink=$_SESSION["stdLink"];
  	else 
  		$stdLink = new StdLink();
  
  
  
	?>

	
	<div id="left">
	
		
					<form method="post">
					<div id="stdRegTable">
					<h1><?php echo $this->title;?></h1>
					<br>
					<br>
					<hr/>
					<table id="stdTable">
					<tr>
						<th></th>
						<td></td>
					
					</tr>
					<tr>
					
						<th>Student Name:</th>
						<td><input type="text" name="StdName" value="<?php echo $stdLink->getStdName();?>" disabled id="txtBox"><font color=red>***</font></td>
						
					</tr>
					
					<tr>
						<th><br>NRC:</th>
						<td><br><select name="nrc_code" size="1" id="txtBox">
							<option><?php echo $stdLink->getNrcCode();?></option>
							
							</select>
							/<input type="text" name="nrcName" size="6" value="<?php echo $stdLink->getNrcName();?>" disabled id="txtBox">
							(N)<input type="text" name="nrcNo" size="6" value="<?php echo $stdLink->getNrcNo();?>" disabled id="txtBox"><font color=red>***</font>
							</td>
					</tr>
					
					<tr>
						<th></th>
						<td><br>
							<?php if($stdLink->getGender()=="male"){?>
							<input type="radio" name="gender" value="male" checked="checked" disabled>Male <br>
							<input type="radio" name="gender" value="female" disabled>Female<?php }?>
							
							<?php if($stdLink->getGender()=="female"){?>
							<input type="radio" name="gender" value="male" disabled>Male <br>
							<input type="radio" name="gender" value="female" checked="checked" disabled>Female<?php }?>
							
							
							
							</td>
							
					</tr>
					
					<tr>
						<th><br>Class:</th>
						<td><br>
							
														
							<select  name="class" size="1" id="txtBox">
									<option><?php echo $stdLink->getClass();?></option>
									
								</select><font color=red>***</font>
							
							
						</td>
						
						
					</tr>
					
					<tr>
						<th><br><br><br><br>Major:</th>
						<td><br>
						<p style=font-size:9pt;color:red>Please Choose Normal for First Year </p>
						<p style=font-size:9pt;color:red>CS and CT for Second Year and Third Year</p><br>
							<select  name="major" size="1" id="txtBox">
								<option><?php echo $stdLink->getMajor();?></option>
								
							</select><font color=red>***</font>
							
								<?//php// foreach ($linkMajor as $key=>$value) {?>
										<!--  <option><?php //echo $value["major_name"] ?>	</option>-->
										<?php //}?>
							
						</td>
					</tr>
					
					<tr>
						<th></th>
						<td><br><input id="submitBtn"  type="submit" name="btnStdRegConfirm" value="Confirm">
							<input type="hidden" name="usecase" value="<?php echo UC_STD_REG?>">
							<input type="hidden" name="action" value="<?php echo ACT_STD_CNF?>">
							
							<input id="submitBtn" type="submit" name="btnStdRegConfirmCancel" value="Cancel">
							<input type="hidden" name="usecase" value="<?php echo U_STD_HP?>">
							<input type="hidden" name="action" value="<?php echo A_STD_HP?>">
							 
							
							</td>
							
					</tr>
					
					</table>
					</div>
					</form>	
					
							
							
											
</div>	 
	

<?php }

}