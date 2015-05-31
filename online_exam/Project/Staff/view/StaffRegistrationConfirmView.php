<?php
class StaffRegistrationConfirmView extends View{
	
	//for constructor
    public function __construct($title){
	parent::__construct($title);
	}
	public function displayBody(){?>
	<div id="left">
	<form method="post">
	<center>
	<table>	
	 <tr >
	    <th>Photo:</th>
	  <td >
	  <img src="images/<?php  echo @$_SESSION["teacher"]->getTeacherPhoto();?>" alt="photo" width='120' height='80'>
	   </td>
	 </tr> 
	 <tr >
	    <th>Name:</th>
	     <td><input type="text" name="staffname" value="<?php echo @$_SESSION["teacher"]->getTeacherName();?>"disabled>
	     </td>
	 </tr>
	 <tr >
	    <th>NRC:</th>
	     <td>         	     
	          <input type="text" name="nrc" value="<?php echo @$_SESSION["teacher"]->getTeacherNrc();?>"disabled>
	     </td>
	 </tr>
	 <tr>
	    <th>Date of Birth:</th>
	     <td><input type="text" name="dob" value="<?php echo @$_SESSION["teacher"]->getTeacherDob();?>" disabled>
	     </td>
	 </tr>
	 <tr >
	    <th >Father name:</th>
	     <td><input type="text" name="fname" value="<?php echo @$_SESSION["teacher"]->getTeacherFname();?>" disabled>
	     </td>
	 </tr>
	 <tr>
	    <th>Gender:</th>
	     <td>  
	      
	    <input type="radio" name="sgender" <?php
	          
	           if(@$_SESSION["teacher"]->getTeacherGender()=="male")
	                       {  echo 'checked="checked"';
	                         
	                        }
				?> value="male" disabled>Male
	     
	     <input type="radio" name="sgender" <?php
	          
	           if(@$_SESSION["teacher"]->getTeacherGender()=="female")
	                       {  echo 'checked="checked"';
	                         
	                        }?> value="female" disabled>Female<br/>
         
	     </td>
	 </tr>	
	 <tr>
	    <th>Phone Number:</th>
	     <td><input type="text" name="phonum" value="<?php echo @$_SESSION["teacher"]->getTeacherPhno();  ?>" disabled>
	     </td>
	 </tr> 	
	
	  <tr>
	    <th>Address:</th>
	     <td>
	     <textarea name="txtaddress" rows="3" cols="25" disabled><?php echo @$_SESSION["teacher"]->getTeacherAddress();?></textarea>
	   
	     </td>
	 </tr>
	 	<tr>
	   <td>
	        <input type="hidden" name="login" value="<?php echo @$_SESSION["teacher"]->getTeacherlogin_name();?>">
	         <input type="hidden" name="passw" value="<?php echo @$_SESSION["teacher"]->getTeacherloginpassword();?>">
	     </td>    
	     <td>
	         <input id='submitBtn' type="submit" name="btnRegisterComfim" value="Confrim">
	         <input type="hidden" name="usecase" value="<?php  echo UC_SREG;?> ">
				<input type="hidden" name="action" value="<?php echo ACT_SREG_CMP;?> ">
				
	         <input id='submitBtn' type="submit" name="btnStaffConfimcancle" value="Cancle">
	         <input type="hidden" name="usecase" value="<?php  echo UC_SREG;?> ">
			<input type="hidden" name="action" value="<?php echo ACT_SREG_EDT;?> ">
	         
	     </td>
	 </tr> 
	</table>
	</center>	
	</form>
	</div>
	
	<?php }
	
	}?>