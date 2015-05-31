<?php
class StaffStudentDao extends DAO{
	public function getS_StudentlistInfo($roll_number){
			
		$sql="SELECT student_id,student_name,student_rollNo,student_phno,student_address FROM student WHERE student_rollNo=:roll_number";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(':roll_number',$roll_number);
		$result=$this->executeQuery();
		return $result;
	}

	public function getS_Studentlistdetail($stud_id){
		
		$sql="SELECT student_id,student_name,student_dateOfBirth,student_email,student_father_name,student_NRCno FROM student WHERE student_id=:stud_id";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(':stud_id', $stud_id);
		$result=$this->executeQuery();
		return $result;	
		
	}
	
	public function getST_Academic(){
		    $sql="select * from academic";
	     	$this->openDB();
	     	$this->prepareQuery($sql);
	     	$result=$this->executeQuery();	     	
	     	return $result;		
		
	}
	public function getST_Major(){
		   $sql="select distinct(major_name) from major";
	     	$this->openDB();
	     	$this->prepareQuery($sql);
	     	$result=$this->executeQuery();	     	
	     	return $result;	
		
	}
	
	
	public function getST_StudentlistAcdMaj($studacademic,$studmajor){
		$sql="SELECT student.student_id,student.student_name,student.student_rollNo,student.student_phno,student.student_address 
		FROM student,major,academic,student_detail 
		WHERE academic.academic_id=major.academic_academic_id 
		AND academic.academic_id=student_detail.academic_id 
		AND major.major_id=student_detail.major_id
		 AND student.student_id=student_detail.student_id 
		 AND academic.academic_name=:studacademic AND major.major_name=:studmajor";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(':studacademic',$studacademic);
		$this->bindQueryParam(':studmajor',$studmajor);
		$result=$this->executeQuery();		
		$this->closeDB();	
		return $result;	
	}
	
}


