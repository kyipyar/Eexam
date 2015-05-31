<?php

class ProfileConfirmView extends View{
	
	public  function __construct(){
		parent::__construct();
		
	}
    
	public function displayBody(){
	if(isset($_SESSION['student']))
			$student=$_SESSION["student"];
		else 
			$student=new Student();	
			
	?>
	 
	<form method="post">
	<br>
	<table>
	<tr><td>Photo:</td>
					<td>	
							<img src="photos/<?php echo @$student->getStudentPhoto();?>" alt="photo" width='160' height='150'>
								
					</td>
		</tr>
	<tr>
	   <td>Full Name:</td>
	   <td><input type="text" value="<?php echo @$student->getStudentName();?>"disabled></td>
	
	</tr>
	
	<tr>
	   <td>Rollno:</td>
	   <td><input type="text" value="<?php echo @$student->getStudentRollNo();?>"disabled></td>
	
	</tr>
		
		<tr>
	   <td>DOB:</td>
	   <td><input type="text"  name="txtrdob" value="<?php echo @$student->getStudentDateOfBirth();?>"disabled></td>
	
	</tr>
	
	<tr>
	   <td>NRC:</td>
	   <td><input type="text" value="<?php echo @$student->getStudentNRCno();?>"disabled></td>
	
	</tr>
	<tr>
	   <td>Fathername:</td>
	   <td><input type="text"  name="txtrfname"value="<?php echo @$student->getStudentFatherName();?>"disabled ></td>
	
	</tr>
	<tr>
	   <td>Address:</td>
	   <td><input type="text"  name="txtaddress" value="<?php echo @$student->getStudentAddress();?>"disabled></td>
	
	</tr>
	<tr>
	   <td>Email:</td>
	   <td><input type="text"  name="txtemail" value="<?php echo @$student->getStudentEmail(); ?>"disabled></td>
	
	</tr>
	<tr>
	   <td>Phonenumber:</td>
	   <td><input type="text"  name="txtpno" value="<?php echo @$student->getStudentPhno(); ?>"disabled></td>
	
	</tr>
	<tr>
	   <td>Password:</td>
	   <td><input type="password" name="txtpwd" value="<?php echo @$student->getStudentPwd();?>"disabled></td>
		</tr>
		
	<tr>
	   
	
	</tr>
	<tr>
	<td><input type="submit" value="Confirm" name="btnProConfirm">
	    <input type="hidden" name="usecase" value="<?php echo UC_STD;?>">
	    <input type="hidden" name="action" value="<?php echo ACT_STD_HP;?>"></td>
	<td>
		<input type="submit" value="Cancel" name="btnProConfirmCancel">
	    <input type="hidden" name="usecase" value="<?php echo UC_PF;?>">
	    <input type="hidden" name="action" value="<?php echo ACT_PF_CNF_CANCEL;?>">
	</td>
	    </tr>
		</table>
	</form>
	
	<?php }

}