<?php
class TeacherDao extends DAO{
	public function getT_Academic(){
	     	$sql="select * from academic";
	     	$this->openDB();
	     	$this->prepareQuery($sql);
	     	$result=$this->executeQuery();
	     	
	     	return $result;
		}
	     
	public function getT_Major(){
	     	$sql="select distinct(major_name) from major";
	     	$this->openDB();
	     	$this->prepareQuery($sql);
	     	$result=$this->executeQuery();
	     	
	     	return $result;	     
		}
	     
	public function getT_StudentInfo($aa){
		echo "Hello".$aa."Dueeeeee";
			    $sql="select student.student_name,student.student_rollNo,sitExam.total_marks ,sitExam.exam_status from student left join sitExam on student.student_id=sitExam.student_id where student.student_rollNo=:aa";
		     	$this->openDB();
		     	$this->prepareQuery($sql);
		     	$this->bindQueryParam(':aa', $aa);
		     	$result=$this->executeQuery();
		     	print_r($result);
		     	return $result;	     	     
		}
	
	public function getT_FY_StudentInfo($FY,$Normal){
		//echo "mamammamammamamamm";
		$sql="SELECT student.student_name,
					student.student_rollNo, 
					sitExam.total_marks,
					sitExam.exam_status
			FROM sitExam,student,student_detail, major, academic 
			WHERE 	student_detail.student_id=student.student_id AND
					major.academic_academic_id=academic.academic_id AND 
					major.major_id=student_detail.major_id AND 
					sitExam.student_id=student.student_id AND
					major.major_name=:normal AND 
					academic.academic_name=:FY";
		
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(':normal',$Normal );
		    $this->bindQueryParam(':FY', $FY);
			$result=$this->executeQuery();
					
		     //	echo "<pre>";
		     //	print_r($result);
		     //	echo "</pre>";
		     	
		     	return $result;
	}
	
	
}