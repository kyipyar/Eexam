<?php

class UpdateProfileView extends View{
	
		
		public function __construct($title){
			parent:: __construct($title);	
		}
	public function displayBody(){
				
		$steacher=$_SESSION["UpdateTStaff"];
		
		//echo "update data-><pre>";print_r($steacher);echo"</pre>";
		?>
		
	<div id="left">
		<form method="post">
	<center>
	<?php $photosource="photos/".$steacher->getTeacherPhoto();?>
	<img src="<?php echo $photosource;?>" alt="MyImage">
	<input type="hidden" name="photo" value="<?php echo $steacher->getTeacherPhoto();?>">
	<table border="1" id="stdRegTable">
	 <tr>
	    <th>Name:</th>
	     <td>
	     	<input type="text" value="<?php echo $steacher->getTeacherName();?>" disabled>
	     	<input type="hidden" name="staffname" value="<?php echo $steacher->getTeacherName();?>"> 
	     </td>
	 </tr>
	 <tr>
	    <th>Teacher Role: </th>
	     <td><input type="text"  
	     value="<?php 
	     		$teacherdao=new SteacherDao();
	     		//echo $steacher->getTeacherRollId();
	     		echo $teacherdao->getRoleNameByTeacherId($steacher->getTeacherRollId());?>" disabled>
	     <input type="hidden" name="rollid" value="<?php echo $steacher->getTeacherRollId();?>">
	     </td>
	 </tr> 
	 <tr>
	    <th>Gender: </th>
	     <td>
	         <input type="text" name="gender" value="<?php echo $steacher->getTeacherGender();?>" disabled>
	         <input type="hidden" name="gender" value="<?php echo $steacher->getTeacherGender();?>"> 
	     </td>
	 </tr>
	 <tr>
	    <th>Login Name: </th>
	     <td>
	     	<input type="text" name="stafflogin" value="<?php echo $steacher->getLoginName();?>" disabled>
	     	<input type="hidden" name="stafflogin" value="<?php echo $steacher->getLoginName();?>"> 
	     </td>
	 </tr>
	 <tr>
	    <th>Password: </th>
	     <td>
		     <input type="password" name="staffpwd" value="<?php echo $steacher->getTeacherPwd();?>" disabled>
		     <input type="hidden"  name="staffpwd" value="<?php echo $steacher->getTeacherPwd();?>">
	     </td>
	 </tr>
	 <tr>
		<th>NRC Number: </th>
		<td>
			<input type="text" name="nrcName" value="<?php echo $steacher->getTeacherNrc();?>" disabled>
			<input type="hidden" name="nrcName" value="<?php echo $steacher->getTeacherNrc();?>">
		</td> 
		</tr>
	 <tr>
        <th>Date of Birth: </th>
        <td>
        	<input type="text" name="dob" value="<?php echo $steacher->getTeacherDob();?>" disabled>
        	<input type="hidden" name="dob" value="<?php echo $steacher->getTeacherDob();?>">
        </td>
    </tr>
	 <tr>
	    <th>Father name: </th>
	     <td>
	     <input type="text" name="fname" value="<?php echo $steacher->getTeacherFname();?>">
	    
	     </td>
	 </tr>
	 	
	 <tr>
	    <th>Phonenumber: </th>
	     <td>
	     	<input type="text" name="phonum" value="<?php echo $steacher->getTeacherPhno();?>">
	     	
	     </td>
	 </tr> 
	 <tr>
	    <th>Address: </th>
	     <td><textarea name="txtaddress" rows="3" cols="25"><?php echo $steacher->getTeacherAddress();?>
	        </textarea>
	        
	     </td>
	 </tr>	 
	 	<tr>
	   <th></th>
	     <td>
	        <input id="submitBtn" type="submit" name="btnupdproedt" value="Update">
	        <input type="hidden" name="usecase" value="<?php echo UC_UPDPRO;?> ">
			<input type="hidden" name="action" value="<?php echo ACT_UPDPRO_CNF;?> ">
				
	         <input id="submitBtn" type="submit" name="btnUpdcancle" value="Cancle">
	        <input type="hidden" name="usecase" value="<?php echo U_ST_HP;?> ">
			<input type="hidden" name="action" value="<?php echo A_ST_HP;?> ">
	     </td>
	 </tr> 
	</table>
	</center>	
	</form>
</div>
		
<?php 	}
}