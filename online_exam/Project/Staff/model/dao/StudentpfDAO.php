<?php
class StudentpfDAO extends DAO{
	
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
		
	public function getT_StudentStatus($aa){
		  // echo "Hello".!!!!$aa."Dueeeeee";
			    $sql="SELECT student.student_name, student.student_rollNo, sitexam_detail.exam_status 
			          FROM student LEFT JOIN sitexam_detail ON student.student_id = sitexam_detail.student_student_id
                      WHERE student.student_rollNo = :aa";			    
		     	$this->openDB();
		     	$this->prepareQuery($sql);
		     	$this->bindQueryParam(':aa', $aa);
		     	$result=$this->executeQuery();
		     	//print_r($result);
		     	return $result;	 
		     	
		     		//echo "<pre>";
		            //print_r($result);
		           // echo "</pre>";    	     
		}
		
   public function getT_Studentpf($ac,$mj){
   	/*echo "mamammamammamamamm";
   	echo "<pre>";
			print_r ($ac);
			echo "</pre>";
			echo "<pre>";
			print_r ($mj);
			echo "</pre>";*/
   	
		$sql="SELECT student.student_name, student.student_rollNo, sitexam_detail.exam_status
				FROM sitexam_detail, student, student_detail, major, academic
				WHERE student_detail.student_id = student.student_id
					AND major.academic_academic_id = academic.academic_id
					AND major.major_id = student_detail.major_id
					AND sitexam_detail.student_student_id = student.student_id
					AND major.major_name = :mj
					AND academic.academic_id =:ac";		
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(':mj',$mj );
		    $this->bindQueryParam(':ac', $ac);
			$result=$this->executeQuery();
					
		     //echo "<pre>";
		     //print_r($result);
		     //echo "</pre>";
		     	
		     	return $result;
   		
   	
   }
   	
   
   
}