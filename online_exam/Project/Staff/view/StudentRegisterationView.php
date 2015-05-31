<?php
class StudentRegisterationView extends View{
	
	private $title,$error_msg;
	public function __construct($title,$error_msg=NULL){
		parent::__construct($title);
		$this->title=$title;
		$this->error_msg=$error_msg;
		
		
		
	}
	
	public function displayBody()
	{
	
			if (isset($_SESSION["stdLink"]))
				$stdLink=$_SESSION["stdLink"];
			else 
				$stdLink=new StdLink();
				
			$error_msg=$this->error_msg;	
				
				
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
						<td><input type="text" name="StdName" value="<?php echo $stdLink->getStdName();?>" id="txtBox" ><font color=red>***</font></td>
						
						
					</tr>
					<tr>
						<th></th>
						<td id="errmsg"><?php if (isset($error_msg["name"]))echo $error_msg["name"];?></td>
					</tr>
					
					
					
					
					<tr>
						<th><br>NRC:</th>
						<td><br><select name="nrc_code" size="1" id="txtBox">
						   	<?php if(@$_POST["nrc_code"]==""){?>
							   	<option>1</option>
							   	<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option><?php } 
							
							else {?>
							   	<option><?php echo $stdLink->getNrcCode();?></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option><?php }?>
							</select>
							/<input type="text" name="nrcName" size="6" value="<?php echo $stdLink->getNrcName();?>" id="txtBox">
							(N)<input type="text" name="nrcNo" size="6" value="<?php echo $stdLink->getNrcNo();?>" id="txtBox"><font color=red>***</font>
							</td>
					</tr>
					<tr>
						<th></th>
						<td id="errmsg"><?php if (isset($error_msg["nrc"]))echo $error_msg["nrc"];?></td>
					</tr>
					
					
					
					<tr>
						<th></th>
						<td><br>
						    
							<?php if($stdLink->getGender()=="male"){?>
							<input type="radio" name="gender" value="male" checked="checked" >Male <br>
							<input type="radio" name="gender" value="female" disabled>Female<?php }?>
							
							<?php if($stdLink->getGender()=="female"){?>
							<input type="radio" name="gender" value="male" >Male <br>
							<input type="radio" name="gender" value="female" checked="checked" >Female<?php }?>
							
							<?php if($stdLink->getGender()==""){?>
							<input type="radio" name="gender" value="male" >Male <br>
							<input type="radio" name="gender" value="female" >Female<?php }?>
					</tr>
					<tr>
						<th></th>
						<td id="errmsg"><?php if (isset($error_msg["gender"]))echo $error_msg["gender"];?></td>
					</tr>
					
					
					
					<tr>
						<th><br>Class:</th>
						<td><br>
								<select  name="class" size="1" id="txtBox">
								    
								    <?php if (@$_POST["class"]==""){?>
								    <option>choose..</option>
								    <option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
								    <?php } else{?>
								     
									<option><?php echo $stdLink->getClass();?></option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<?php }?>
									
								</select><font color=red>***</font>
							
							</td>
					</tr>
					<tr>
						<th></th>
						<td id="errmsg"><?php if (isset($error_msg["class"]))echo $error_msg["class"];?></td>
					</tr>
					
					<tr>
						<th><br><br><br><br>Major:</th>
						<td><br>
						<p style=font-size:9pt;color:red>Please Choose Normal for First Year </p>
						<p style=font-size:9pt;color:red>CS and CT for Second Year and Third Year</p><br>
							
							<select  name="major" size="1" id="txtBox">
							<?php if (@$_POST["major"]==""){?>
								<option>choose..</option>
								<option>Normal</option>
								<option>CS</option>
								<option>CT</option>
								<?php } else{?>
							    
								<option><?php echo $stdLink->getMajor();?></option>
								<option>Normal</option>
								<option>CS</option>
								<option>CT</option>
								<?php }?>
							</select><font color=red>***</font>
						</td>
					</tr>
					<tr>
						<th></th>
						<td id="errmsg"><?php if (isset($error_msg["major"]))echo $error_msg["major"];?></td>
					</tr>
					
					<tr>
						<th></th>
						<td><br><input id="submitBtn" type="submit" name="btnStdRegister" value="Register">
							<input type="hidden" name="usecase" value="<?php echo U_STD_EDT?>">
							<input type="hidden" name="action" value="<?php echo A_STD_EDT?>">
							
							<input id="submitBtn" type="submit" name="btnStdRegCancel" value="Cancel">
							<input type="hidden" name="usecase" value="<?php echo U_ST_HP?>">
							<input type="hidden" name="action" value="<?php echo A_ST_HP?>">
							
							</td>
							
					</tr>
					
					</table>
					</div>
					</form>	
					
					
							
</div>	 





<?php 

	
	}

}