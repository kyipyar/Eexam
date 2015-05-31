<?php

class StudentProfileView extends View{	
	
    private $error_msg; 
   // private $title;
	public function __construct($error=NULL){
		//parent::__construct($title);
		//$this->title=$tt;
		$this->error_msg=$error;	
			
	}
		
	public function displayBody(){	
		//echo "<h2>".$this->title."<h2>";
		// for DOB
		?>
			<html>
		<head>
		<title>
		Staff Registration	
		</title>
		<link rel="stylesheet" type="text/css" media="all" href="./css/jsDatePick_ltr.min.css" />
      <script type="text/javascript" src="./js/jsDatePick.min.1.3.js"></script>
     <script type="text/javascript">
      window.onload = function(){
		 new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"			
		});
	};
</script>			
		</head>	
		<?php 
		if(isset($_SESSION['student']))
			$student=$_SESSION["student"];
		else 
			$student=new Student();	
			/*echo "IN STU PROFILE VIEW";
			echo "<pre>";
		print_r($_SESSION['student']);
		echo "</pre>";	*/
		?>
		
	<form method="post" enctype="multipart/form-data">
		<table style="text-align:left;margin-left:0px; width:98%;">	
		<tr><td colspan='3'>Please upload your photo firstly:</td></tr>		
			<tr><td>Photo:</td>	
				<td colspan="2">
					
						<input type="file" name="upload">
						<input type="submit" value="Upload" name="uploadPhoto">
						<font color=red>***<br>
								<?php 
									if(isset($this->error_msg["photo"]))
									echo $this->error_msg["photo"];
								?>
								</font>
						<input type="hidden" name="usecase" value="<?php echo UC_STD;?>">
						<input type="hidden" name="action" value="<?php echo ACT_STD_PHOTO;?>">
					
				</td>	
			</tr>
		</table>	
		</form>
		<form method="post">
		<table id="aa">
		<tr><td></td>
					<td>	
							<img src="photos/<?php echo $student->getStudentPhoto();?>" alt="photo" width='160' height='150'>
								
					</td>
		</tr>			
		<tr>
		<td>Full Name:</td>
		<th align="left"><input type="text" id="box" name="stdname" value="<?php echo $student->getStudentName(); ?>" disabled></th></tr>		
		<tr><td>Rollno:</td>
		<th align="left"><input type="text" id="box" name="txtrno" value="<?php echo $student->getStudentRollNo();?>"disabled></th></tr>
		<tr><td>DOB:</td>
		<th align="left"><input type="text" id="inputField" name="txtdob" value="<?php echo $student->getStudentDateOfBirth();?>">
		<font color=red>***<br>
					<?php 
						if(isset($this->error_msg["dob"])){
						echo $this->error_msg["dob"];}
						if(isset($this->error_msg["dobinvalid"])){
							echo "hello";
						echo $this->error_msg["dobinvalid"];}
					?>
					</font></th></tr>
		<tr><td>NRC:</td>
		<th align="left"><input type="text" id="box" name="txtnrc" value="<?php echo $student->getStudentNRCno();?>"disabled></th></tr>
		<tr><td>Fathername:</td>
		<th align="left"><input type="text" id="box" name="txtfname" value="<?php echo $student->getStudentFatherName();?>">
		<font color=red>***<br>
					<?php 
						if(isset($this->error_msg["fname"]))
						echo $this->error_msg["fname"];
					?>
					</font></th></tr>
		<tr><td>Adress:</td>
		<th align="left"><textarea id="box" name="txtaddress" rows="3" cols="25" ><?php echo @$student->getStudentAddress();?></textarea></th>
		</tr>
		<tr><td>Phno:</td>
			<td><input type="text" id="box" name="txtpno" value="<?php echo @$student->getStudentPhno();?>"></td>
		</tr>
		<tr>
	   <td>Email:</td>
	   <th  align="left"><input type="text" id="box" name="txtemail" value="<?php echo @$student->getStudentEmail();?>"></th>	
		</tr>
		
		<!-- 
		<tr><th>Password:</th>
		<th align="left"><input type="text" id="box" name="txtpwd" value="<?php // $student->getStudentPwd();?>">
		<font color=red>***<br>
					<?php /*
						if(isset($this->error_msg["pwdwrong"]))
						echo $this->error_msg["pwdwrong"];
					?>
					<?php 
						if(isset($this->error_msg["pwd"]))
						echo $this->error_msg["pwd"];
					?>
		
					
			</font></th></tr>
			<tr><th>ConfirmPassword:</th>
			<th><input type="text" name="txtcnpwd" value="<?php $student->getStudentPwd();?>">
			<font color=red>***<br>
					<?php 
						if(isset($this->error_msg["cpwd"]))
						echo $this->error_msg["cpwd"];
					?>
					<?php if (isset($this->error_msg["equal"]))
					echo $this->error_msg["equal"]; */
					?>
					</font></th></tr> -->
				
				
		    <tr>
		    <td align="center">
	        <input id="submitBtn" type="submit" align="middle"  value="Profile Fill" name="btnfill" >
			<input type="hidden" name="usecase" value="<?php echo UC_PF;?>">
			<input type="hidden" name="action" value="<?php echo ACT_PF_CNF;?>"></td>
			
		
				
			
			</tr>
		
		
		
		
		
		</table>	
		</form>
		<font color="red">
		<?php if (isset($this->error_msg["all"]))
		echo $this->error_msg["all"]; 
		?>
		
		</font>
		
		
		<?php }
	
	
	}	
