<?php
class UpdateProfileLinkConfirmView extends View{
	
	public function  __construct($title){
		parent:: __construct($title);
		//$this->teacher=$teacher;
		
	}
	
public function displayBody(){
		$teacher=$_SESSION["UpdateTStaff"];	
		//echo "update data-><pre>";print_r($teacher);echo"</pre>";
		?>
	<div id="left">
		<form method="post">
	<center>
	<?php $photosource="photos/".$teacher->getTeacherPhoto();?>
	<img src="<?php echo $photosource;?>" alt="MyImage" >
	
	<table border="1" id="stdRegTable">
	 <tr>
	    <th>Name:</th>
	     <td><input type="text" name="staffname" value="<?php echo $teacher->getTeacherName();?>" disabled>
	     </td>
	 </tr>
	 <tr>
		<th>NRC Number</th>
		<td><input type="text" name="nrcName" value="<?php echo $teacher->getTeacherNrc();?>" disabled>
		</td>
		</tr>
	 <tr>
        <th>Date of Birth</th>
        <td><input type="text" name="dob" value="<?php echo $teacher->getTeacherDob();?>" disabled>
        </td>
    </tr>
	 <tr>
	    <th>Father name:</th>
	     <td><input type="text" name="fname" value="<?php echo $teacher->getTeacherFname();?>" disabled>
	     </td>
	 </tr>
	 <tr>
	    <th>Gender:</th>
	     <td><input type="text" name="gender" value="<?php echo $teacher->getTeacherGender()?>" disabled>
	     </td>
	 </tr>	
	 <tr>
	    <th>Phonenumber:</th>
	     <td><input type="text" name="phonum" value="<?php echo $teacher->getTeacherPhno();?>" disabled>
	     </td>
	 </tr> 
	<tr>
	    <th>Password:</th>
	     <td><input type="text" name="pword" value="<?php echo $teacher->getTeacherPwd();?>" disabled>
	     </td>
	 </tr> 
	  <tr>
	    <th>Address:</th>
	     <td><textarea name="txtaddress" rows="3" cols="25"disabled><?php echo $teacher->getTeacherAddress();?> </textarea>
	     </td>
	 </tr>	 
	 <tr>
	    <th>Teacher Role:</th>
	     <td><input type="text" name="rollid" value="<?php echo $teacher->getTeacherRollId();?>" disabled>
	     </td>
	 </tr> 
	 <tr>
	   <th></th>
	     <td>
	         <input id="submitBtn" type="submit" name="btnupdproconf" value="Confirm">
	         <input type="hidden" name="usecase" value="<?php echo UC_UPDPRO;?> ">
			<input type="hidden" name="action" value="<?php echo ACT_UPDPRO_CMP;?> ">
				
	         <input id="submitBtn" type="submit" name="btnUpdcnfcancle" value="Cancel">
	        <input type="hidden" name="usecase" value="<?php echo UC_UPDPRO;?> ">
			<input type="hidden" name="action" value="<?php echo ACT_UPDPRO_EDT;?> ">
	     </td>
	 </tr> 
	</table>
	</center>	
	</form>
</div>


		
<?php 	}
}
