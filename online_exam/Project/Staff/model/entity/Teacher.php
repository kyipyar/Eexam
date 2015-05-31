<?php
class Teacher{
	private $teacher_id;
	private $teacher_name;
	private $teacher_nrc;
	private $teacher_dob;
	private $teacher_fname;
	private $teacher_gender;
	private $teacher_address;
	private $teacher_phno;
	private $password;
	private $teacher_photo;
	private $teacher_roll_id;
	private $login_name;
	
	
public function getTeacherId(){
		return $this->teacher_id;
		
	}
public function setTeacherId($teacher_id){
		$this->teacher_id=$teacher_id;		
	}
public function getTeacherName(){
		return $this->teacher_name;
		
	}
public function setTeacherName($teacher_name){
		$this->teacher_name=$teacher_name;		
	}
public function getTeacherNrc(){
		return $this->teacher_nrc;
		
	}
public function setTeacherNrc($teacher_nrc){
		$this->teacher_nrc=$teacher_nrc;		
	}
	
public function getTeacherDob(){
		return $this->teacher_dob;
		
	}
public function setTeacherDob($teacher_dob){
		$this->teacher_dob=$teacher_dob;		
	}
public function getTeacherFname(){
		return $this->teacher_fname;
		
	}
public function setTeacherFname($teacher_fname){
		$this->teacher_fname=$teacher_fname;		
	}
public function getTeacherGender(){
		return $this->teacher_gender;
		
	}
public function setTeacherGender($teacher_gender){
		$this->teacher_gender=$teacher_gender;		
	}
public function getTeacherAddress(){
		return $this->teacher_address;
		
	}
public function setTeacherAddress($teacher_address){
		$this->teacher_address=$teacher_address;		
	}
public function getTeacherPhno(){
		return $this->teacher_phno;
		
	}
public function setTeacherPhno($teacher_phno){
		$this->teacher_phno=$teacher_phno;		
	}
public function getTeacherPwd(){
		return $this->password;
		
	}
public function setTeacherPwd($password){
		$this->password=$password;		
	}
public function getTeacherPhoto(){
		return $this->teacher_photo;
		
	}
public function setTeacherPhoto($teacher_photo){
		$this->teacher_photo=$teacher_photo;		
	}
public function getTeacherRollId(){
		return $this->teacher_roll_id;
		
	}
public function setTeacherRollId($teacher_roll_id){
		$this->teacher_roll_id=$teacher_roll_id;		
	}
public function getLoginName(){
		return $this->login_name;
		
	}
public function setLoginName($login_name){
		$this->login_name=$login_name;		
	}
	
}