<?php
class UpdateProfileLinkController{
	public function renderUpdateProfileLinkEdit(){
			
		if(!isset($_SESSION["UpdateTStaff"])){
			$steacherdao=new SteacherDao();
			$steacher=$steacherdao->getTeacherById();
		
			$teacher=new Teacher();
			$teacher->setTeacherName($steacher[0]["teacher_name"]);
			$teacher->setTeacherNrc($steacher[0]["teacher_nrc"]);
			$teacher->setTeacherDob($steacher[0]["teacher_dob"]);
			$teacher->setTeacherFname($steacher[0]["teacher_fname"]);
			$teacher->setTeacherGender($steacher[0]["teacher_gender"]);
			$teacher->setTeacherAddress($steacher[0]["teacher_address"]);
			$teacher->setTeacherPhno($steacher[0]["teacher_phno"]);
			$teacher->setTeacherPwd($steacher[0]["password"]);
			$teacher->setTeacherPhoto($steacher[0]["teacher_photo"]);
			$teacher->setTeacherRollId($steacher[0]["teacher_roll_id"]);
			$teacher->setLoginName($steacher[0]["login_name"]);
			
			$_SESSION["UpdateTStaff"]=$teacher;
		}		
		return new UpdateProfileView(PT_UPDPRO_EDT);
	}
	public function renderUpdateProfileLinkConfirm(){
		
			$teacher_name=@$_POST["staffname"];
			$teacher_nrc=@$_POST["nrcName"];
	 		$teacher_dob=@$_POST["dob"];
	 		$teacher_fname=@$_POST["fname"];
	 		$teacher_gender=@$_POST["gender"];
			$teacher_address=@$_POST["txtaddress"];
			$teacher_phno=@$_POST["phonum"];
			$password=@$_POST["staffpwd"];
			$teacher_photo=@$_POST["photo"];
			$teacher_roll_id=@$_POST["rollid"];
			$teacher_login_name=@$_POST["stafflogin"];
						
			$teacher=new Teacher();
			$teacher->setTeacherName($teacher_name);
			$teacher->setTeacherNrc($teacher_nrc);
			$teacher->setTeacherDob($teacher_dob);
			$teacher->setTeacherFname($teacher_fname);
			$teacher->setTeacherGender($teacher_gender);
			$teacher->setTeacherAddress($teacher_address);
			$teacher->setTeacherPhno($teacher_phno);
			$teacher->setTeacherPwd($password);
			$teacher->setTeacherPhoto($teacher_photo);
			$teacher->setTeacherRollId($teacher_roll_id);
			$teacher->setLoginName($teacher_login_name);
			
			$_SESSION["UpdateTStaff"]=$teacher;
			
			
		
		return new UpdateProfileLinkConfirmView(PT_UPDPRO_CNF);
	}
	public function renderUpdateProfileLinkComplete(){
		
		//$_SESSION["teacher"]=$teacher;
			//echo "to complete view~~~~~~~~~~";			
			//print_r($_SESSION["UpdateTStaff"]);
		
		$steacherdao=new SteacherDao();
		$steacherdao->updateTeacher();
		
		/*if (isset($_SESSION["UpdateTStaff"]))
		unset($_SESSION["UpdateTStaff"]);
		if (isset($_SESSION["staff_id"]))
		unset($_SESSION["staff_id"]);
		if (isset($_SESSION["teacher_id"]))
		unset($_SESSION["teacher_id"]);*/
		
		
		return new UpdateProfileLinkCompleteView(PT_UPDPRO_CMP);
	}
}