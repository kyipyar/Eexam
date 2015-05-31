<?php
class StaffTeacher{
	private $teacher_id;
	private $teacher_name;
	private $teacher_nrc;	
	private $teacher_dob;
	private $teacher_fname;
	private $teacher_gender;
	private $role;//////staff role
	private $teacher_address;
	private $teacher_phno;
	private $teacher_pwd;
	private $teacher_photo;
	private $teacher_roll_id;
	private $teacher_nrcno;
	private $teacher_nrcname;
	private $teacher_nrcsel;
	private $login_name;    //hsuwaihnin
	private $password;

public function getTeacherNrcno(){         //
		return $this->teacher_nrcno;
		
	}
	
public function setTeacherNrcno($teacher_nrcno){
		$this->teacher_nrcno=$teacher_nrcno;		
	}	
	
public function setRole($role){
		$this->role=$role;		
	}	
public function getTeacherNrcname(){
		return $this->teacher_nrcname;
		
	}
public function setTeacherNrcname($teacher_nrcname){
		$this->teacher_nrcname=$teacher_nrcname;		
	}
public function getTeacherNrcnrcsel(){
		return $this->teacher_nrcsel;
		
	}
public function setTeacherNrcnrcsel($teacher_nrcsel){
		$this->teacher_nrcsel=$teacher_nrcsel;		
	}		
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
public function getRole(){////////////////////////staff role
		return $this->role;
		
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
public function getTeacherPwd(){         //for staff and teacher registration
		return $this->teacher_pwd;
		
	}
public function setTeacherPwd($teacher_pwd){
		$this->teacher_pwd=$teacher_pwd;		
	}
public function getTeacherPhoto(){
		return $this->teacher_photo;
		
	}
public function setTeacherPhoto($teacher_photo){
		$this->teacher_photo=$teacher_photo;		
	}
public function getTeacherRollId(){       //rollnumber search
		return $this->teacher_roll_id;
		
	}
public function setTeacherRollId($teacher_roll_id){    //rollnumber search
		$this->teacher_roll_id=$teacher_roll_id;		
	}
public function getTeacherlogin_name(){       //login name display
		return $this->login_name;
		
	}
public function setTeacherlogin_name($login_name){   //login name display
		$this->login_name=$login_name;		
	}
public function getTeacherloginpassword(){     //login password
		return $this->password;
		
	}
public function setTeacherloginpassword($password){    //login password
		$this->password=$password;		
	}
/*public function setAcademic($academic){    //academic search
		 $this->academic=$academic;
	}
	public function getAcademic(){         //academic search
		 return $this->academic;
	}
	
	public function setMajor($major){     //major search
		 $this->major=$major;
	}
	public function getMajor(){        //major search
		 return $this->major;
	}*/	
	
	
	
}