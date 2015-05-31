<?php
class Student{

	private $student_id;
	private $user_name;
	private $student_name;
	private $student_pwd;
	private $student_rollNo;
	private $student_dateOfBirth;
	private $student_address;
	private $student_phno;
	private $student_email;
	private $student_father_name;
	private $student_NRCno;
	private $student_photo;
	
	//$student_id;
	public function getStudentId(){
		return $this->student_id;
	}	
	public function setStudentId($student_id){
		$this->student_id=$student_id;
	}
	
	//user_name
	public function getUserName(){
		return $this->user_name;
	}	
	public function setUserName($user_name){
		$this->student_id=$user_name;
	}
	
	//$student_name
	public function getStudentName(){
		return $this->student_name;
	}	
	public function setStudentName($student_name){
		$this->student_name=$student_name;
	}
	
	//$student_pwd
	public function getStudentPwd(){
		return $this->student_pwd;
	}	
	public function setStudentPwd($student_pwd){
		$this->student_pwd=$student_pwd;
	}
	
	
	//$student_rollNo
	public function getStudentRollNo(){
		return $this->student_rollNo;
	}	
	public function setStudentRollNo($student_rollNo){
		$this->student_rollNo=$student_rollNo;
	}
	
	//$student_dateOfBirth
	public function getStudentDateOfBirth(){
		return $this->student_dateOfBirth;
	}	
	public function setStudentDateOfBirth($student_dateOfBirth){
		$this->student_dateOfBirth=$student_dateOfBirth;
	}
	
	//$student_address
	public function getStudentAddress(){
		return $this->student_address;
	}	
	public function setStudentAddress($student_address){
		$this->student_address=$student_address;
	}
	
	
	//$student_phno
	public function getStudentPhno(){
		return $this->student_phno;
	}	
	public function setStudentPhno($student_phno){
		$this->student_phno=$student_phno;
	}
	
	
	//$student_email
	public function getStudentEmail(){
		return $this->student_email;
	}	
	public function setStudentEmail($student_email){
		$this->student_email=$student_email;
	}
	
	
//$student_father_name
	public function getStudentFatherName(){
		return $this->student_father_name;
	}	
	public function setStudentFatherName($student_father_name){
		$this->student_father_name=$student_father_name;
	}
	
	
	//$student_NRCno
	public function getStudentNRCno(){
		return $this->student_NRCno;
	}	
	public function setStudentNRCno($student_NRCno){
		$this->student_NRCno=$student_NRCno;
	}
	
//$student_photo
	public function getStudentPhoto(){
		return $this->student_photo;
	}	
	public function setStudentPhoto($student_photo){
		$this->student_photo=$student_photo;
	}
}