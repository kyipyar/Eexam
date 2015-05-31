<?php
class STaffTeacherDao extends DAO{
	
	public function saveTeacherStaff(){
		
		if(@$_SESSION["roles"]==2) 		
	$sql="insert into teacher values(null,:teacher_name,:teacher_nrc,:teacher_dob,:teacher_fname,:teacher_gender,:teacher_address,:teacher_phno,:teacher_pwd,:teacher_photo,:login_name,:password,2)";	
	   else 
	    { // $role_id= $_SESSION["staff_role_id"];
	$sql="insert into teacher values(null,:teacher_name,:teacher_nrc,:teacher_dob,:teacher_fname,:teacher_gender,:teacher_address,:teacher_phno,:teacher_pwd,:teacher_photo,:login_name,:password,1)";	
	    } 
	  if(isset($_SESSION['roles']))unset($_SESSION['roles']);
	
	     $this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam("teacher_name", @$_SESSION["teacher"]->getTeacherName());
		$this->bindQueryParam("teacher_nrc", $_SESSION["teacher"]->getTeacherNrc());
		$this->bindQueryParam("teacher_dob", $_SESSION["teacher"]->getTeacherDob());
		$this->bindQueryParam("teacher_fname", $_SESSION["teacher"]->getTeacherFname());
		$this->bindQueryParam("teacher_gender", $_SESSION["teacher"]->getTeacherGender());
		$this->bindQueryParam("teacher_address", $_SESSION["teacher"]->getTeacherAddress());
		$this->bindQueryParam("teacher_phno", $_SESSION["teacher"]->getTeacherPhno());
		$this->bindQueryParam("teacher_pwd", $_SESSION["teacher"]->getTeacherPwd());
		$this->bindQueryParam("teacher_photo", $_SESSION["teacher"]->getTeacherPhoto());
		$this->bindQueryParam("login_name", $_SESSION["teacher"]->getTeacherlogin_name());
		$this->bindQueryParam("password", $_SESSION["teacher"]->getTeacherloginpassword());		
		//$this->bindQueryParam("teacher_roll_id", $role_id);		
		
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 
			$this->rollbackTrans();			
	}
	}