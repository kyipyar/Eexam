<?php

  
	class StudentUpdateProfileView extends View{
	
	public  function __construct(){
		parent::__construct();
	}
    
	public function displayBody(){
	//echo @$_SESSION['student']->getStudentName();
 	//print_r($_SESSION["student"]);
	?>
	 
	<form method="post">
	<br>
	<table>
	<!-- <tr><td>Photo:</td>
					<td>	
							<img src="images/<?php //echo @$_SESSION['StudentUpdateProfile']->getStudentPhoto();?>" alt="photo" width='160' height='150'>
								
					</td>
		</tr>-->
	<tr>
	   <td>Full Name:</td>
	   <td><input type="text" name="name" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentName();?>"></td>
	
	</tr>
	
	<tr>
	   <td>Rollno:</td>
	   <td>
	   	<input type="text"  value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentRollNo();?>"disabled>
	   	<input type="hidden" name="rollno" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentRollNo();?>">
	   </td>
	
	</tr>
		
		<tr>
	   <td>DOB:</td>
	   <td>
	   	<input type="text"  value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentDateOfBirth();?>"disabled>
	   	<input type="hidden" name="dob" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentDateOfBirth();?>">
	   </td>
	
	</tr>
	
	<tr>
	   <td>NRC:</td>
	   <td>
	   	<input type="text"  value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentNRCno();?>"disabled>
	   	<input type="hidden" name="nrc" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentNRCno();?>">
	   	</td>
	
	</tr>
	<tr>
	   <td>Fathername:</td>
	   <td><input type="text" name="fname"  value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentFatherName();?>"></td>
	
	</tr>
	<tr>
	   <td>Address:</td>
	   <td><input type="text"  name="address" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentAddress();?>"></td>
	
	</tr>
	<tr>
	   <td>Email:</td>
	   <td><input type="text"  name="email" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentEmail(); ?>"></td>
	
	</tr>
	<tr>
	   <td>Phonenumber:</td>
	   <td><input type="text"  name="phoneno" value="<?php echo $_SESSION["StudentUpdateProfile"]->getStudentPhno(); ?>"></td>
	
	</tr>
	<!-- <tr>
	   <td>Password:</td>
	   <td><input type="password" name="password" value="<?php //echo $_SESSION["student"]->getStudentPwd();?>"></td>
		</tr> -->
		
	<!-- <tr>
	   <td>Photo:</td>
	   <td><input type="text"  name="photo" value="<?php //echo $_SESSION["student"]->getStudentPhoto(); ?>"disabled></td>
	
	</tr> -->
	<tr>
	<td><input id="submitBtn"  type="submit" value="Update" name="btnUpdateProfileEdit">
	    <input type="hidden" name="usecase" value="<?php echo UC_STD_UPD;?>">
	    <input type="hidden" name="action" value="<?php echo ACT_STD_PF_CNF;?>"></td>
	<td>
		<input id="submitBtn" type="submit" value="Cancel" name="btnUpdateProfileEditCancel">
	    <input type="hidden" name="usecase" value="<?php echo UC_STD;?>">
	    <input type="hidden" name="action" value="<?php echo ACT_STD_CNF;?>">
	</td>
	
	
	
		    
		    </tr>
		</table>
	</form>
	
	<?php }

}