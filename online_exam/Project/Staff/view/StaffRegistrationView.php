<?php
class StaffRegistrationView extends View{
	
	//for constructor
    private $error_msg;
    public function __construct($title,$error_msg=NULL){
	parent::__construct($title);
	$this->error_msg=$error_msg;
	}
	public function displayBody(){		
	if(isset($_SESSION["teacher"]))
	    $staff=$_SESSION["teacher"];
	  
     else 
		 $staff= new StaffTeacher();
		  
	   
		?>
		<html>
		<head>
		<title>
		     Teacher/Staff Registration	
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
		<body>
		<div id="left">		    
		<form method="post" enctype="multipart/form-data">
		<table style="text-align:left;margin-left:0px; width:98%;">	
		<tr><th>Photo:</th>	
		<td></td>
			
			<td colspan="2">
			<input type="file" name="upload">
			<input type="submit" value="Upload">
		   <font color=red size="1pt">***<br>
					<?php 
						if(isset($this->error_msg["photo"]))
						    echo $this->error_msg["photo"];
					?>
			</font> 
			
			<input type="hidden" name="usecase" value="<?php echo UC_SREG;?>">
			<input type="hidden" name="action" value="<?php echo ACT_SREG_PHOTO;?>">
			
			</td>	
			
		</tr>
		</table>
		</form>
	
	<form method="post">
	<center>
	<table>	
	  <tr>
	    <th></th>	    
	  <td align="left"><img src="images/<?php  echo $staff->getTeacherPhoto();?>" alt="photo" width='120' height='80'>
	
	   </td>
	 </tr> 			
	 <tr>
	    <th align="left">Name:</th>
	     <td><input type="text" name="staffname" value="<?php echo $staff->getTeacherName();?>">
	     <font color=red size="1pt">***
	     <?php 
	     if(isset($this->error_msg["staffname"]))
						echo $this->error_msg["staffname"];	     
	     
	     ?>
	     
	     </font>
	     </td>
	 </tr>
	 <tr>
	    <th align="left">NRC:</th>
	     <td>  
	       <select name="nrc_code" size="1" >
		<option value="<?php echo $staff->getTeacherNrcno();?>" >1</option>
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
		<option>14</option>
		</select>
		/<input type="text" name="nrcName" size="6" value="<?php echo $staff->getTeacherNrcname();?>">(N)<input type="text" name="nrcNo" size="6" value="<?php echo $staff->getTeacherNrcnrcsel();?>">
		<font color=red size="1pt">***
		<?php
         if(isset($this->error_msg["nrcName"]))
						echo $this->error_msg["nrcName"];	
		 if(isset($this->error_msg["nrcNo"]))
		     echo $this->error_msg["nrcNo"];    				     
	     
		
		?>
		</font>
		 </td>	 
	 </tr>
	 <tr>
	  <th align="left">Date of Birth:</th>
	     <td><input type="text" id="inputField" name="dob" value="<?php echo $staff->getTeacherDob();?>">
	     <font color=red size="1pt">***
	      <?php 
	     if(isset($this->error_msg["dob"]))
						echo $this->error_msg["dob"];	     
	     
	     ?>
	     </font>
	     </td>
	 </tr>
	 <tr>
	    <th align="left">Father name:</th>
	     <td><input type="text" name="fname" value="<?php echo $staff->getTeacherFname();?>">
	     <font color=red size="1pt">***
	      <?php 
	     if(isset($this->error_msg["fname"]))
						echo $this->error_msg["fname"];	     
	     
	     ?>
	     </font>
	     </td>
	 </tr>
	 <tr>
	    
	    <th align="left">Gender:</th>
	     <td> <!--  <input type="radio" name="sgender" checked="checked" value="male" disabled>Male
	               -->
	     <input type="radio" name="sgender"
	          <?php
	          
	           if($staff->getTeacherGender()=="male")
	                       {  echo 'checked="checked"';
	                         
	                        }
				?>" value="male" >Male
	          <!--  <input type="radio" name="sgender" checked="checked" value="male" disabled>Male
	              -->        
	         <input type="radio" name="sgender" 
	            <?php 
	            if($staff->getTeacherGender()=="female")
	                       {  echo 'checked="checked"';
	                         
	                        }
	              ?>" value="female" >Female<br/>
	     <font color=red size="1pt">***
	     <?php 
	     if(isset($this->error_msg["sgender"]))
						echo $this->error_msg["sgender"];	     
	     
	     ?>     
	     
	     </font>
	   
	     </td>
	 </tr>	
	 
	 <tr>
	    
	    <th align="left">Role:</th>
	     <td> 
	     <input type="radio" name="role"
	          <?php
	          
	           if($staff->getRole()=="teacher")
	                       {  echo 'checked="checked"';
	                         
	                        }
				?>" value="teacher" >Teacher
	                
	         <input type="radio" name="role" 
	            <?php 
	            if($staff->getRole()=="staff")
	                       {  echo 'checked="checked"';
	                         
	                        }
	              ?>" value="staff" >Staff<br/>
	     <font color=red size="1pt">***
	     <?php 
	     if(isset($this->error_msg["role"]))
						echo $this->error_msg["role"];	     
	     
	     ?>     
	     
	     </font>
	   
	     </td>
	 </tr>	
	 
	 <tr>
	    <th align="left">Phone Number:</th>
	     <td><input type="text" name="phonum" value="<?php echo $staff->getTeacherPhno();?>">
	   
	     </td>
	 </tr> 	
	  <tr>
	    <th align="left">Address:</th>
	     <td><textarea name="txtaddress" rows="3" cols="25" ><?php echo $staff->getTeacherAddress();?></textarea>
	     <font color=red size="1pt">***
	      <?php 
	     if(isset($this->error_msg["txtaddress"]))
				echo $this->error_msg["txtaddress"];	     
	     
	     ?>
	     </font>	     
	     </td>
	 </tr>
	 	<tr>
	   <th></th>
	     <td>
	         <input id='submitBtn' type="submit" name="btnstaffregister" value="Register">
	         <input type="hidden" name="usecase" value="<?php echo UC_SREG;?> ">
				<input type="hidden" name="action" value="<?php echo ACT_SREG_CNF;?> ">
			    
				
	         <input id='submitBtn' type="submit" name="btncancle" value="Cancel">
	         <input type="hidden" name="usecase" value="<?php echo U_ST_HP;?> ">
				<input type="hidden" name="action" value="<?php echo A_ST_HP;?> ">
	         
	     </td>
	 </tr> 
	</table>
	</center>	
	</form>
	</div>
	
	</body>	
	</html>
	
 
<?php 	}
	
}
?>