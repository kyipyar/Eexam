<?php
 class UpdateProfileConfirmController{
 	public function renderProfileConfirm(){
 		
 		$studentdao=new StudentDao();
 		$updateStudent=$studentdao->getStdById($_SESSION["student_id"]);
 		
 		$student=new Student();
 		$student->setStudentId($updateStudent[0]["student_id"]);
 		$student->setStudentName($updateStudent[0]["student_name"]);
 		$student->setStudentRollNo($updateStudent[0]["student_rollNo"]);
 		$student->setStudentDateOfBirth($updateStudent[0]["student_dateOfBirth"]);
 		$student->setStudentAddress($updateStudent[0]["student_address"]);
 		$student->setStudentPhno($updateStudent[0]["student_phno"]);
 		$student->setStudentEmail($updateStudent[0]["student_email"]);
 		$student->setStudentFatherName($updateStudent[0]["student_father_name"]);
 		$student->setStudentNRCno($updateStudent[0]["student_NRCno"]);
 		
 		if(!isset($_SESSION["StudentUpdateProfile"]))
 			$_SESSION["StudentUpdateProfile"]=$student;
 		
 		return  new StudentUpdateProfileView();
 	}
 	public function renderUpdateProfileConfirm(){
 		
 		//echo "DOB is ".$_POST["dob"];
 		//echo "NRC is ".$_POST["nrc"];
 		
 		echo "student id is ".$_SESSION["student_id"];
 		
		$student=new Student();
		$student->setStudentName($_POST["name"]);
		$student->setStudentAddress($_POST["address"]);
		$student->setStudentDateOfBirth($_POST["dob"]);
		$student->setStudentEmail($_POST["email"]);
		$student->setStudentFatherName($_POST["fname"]);
		$student->setStudentId($_SESSION["student_id"]);
		$student->setStudentNRCno($_POST["nrc"]);
		$student->setStudentPhno($_POST["phoneno"]);
		$student->setStudentRollNo($_POST["rollno"]);

		$_SESSION["StudentUpdateProfile"]=$student;
		
 		return new StudentUpdateProfileConfirmView();
 	}
 	public function renderUpdateProfileComplete(){
 		
 		$studentdao=new StudentDao();
 		$studentdao->saveUpdateProfile();
 		
 		unset($_SESSION["StudentUpdateProfile"]);
 		
 		return new StudentUpdateProfileCompleteView();
 	}
 }
 