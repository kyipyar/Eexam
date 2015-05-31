<?php
class StdPFDao extends DAO{

public function getAcademic(){
	
	 $sql="SELECT * FROM `academic`";
	 
     $this->openDB();
     $this->prepareQuery($sql);
     $result=$this->executeQuery();

     return $result;

}


public function getStudentList($acd,$mjr){
	echo $acd.$mjr;
			if ($acd=="FirstYear")
			 if($mjr=="Normal")
			  	$sql="SELECT student_rollNo from student where student_rollNo like '%1CST%'";
		   	 if ($acd=="SecondYear")
			 if($mjr=="CS")
			  	$sql="SELECT student_rollNo from student where student_rollNo like '%2CS%'";
			 if ($acd=="SecondYear")
			 if($mjr=="CT")
			  	$sql="SELECT student_rollNo from student where student_rollNo like '%2CT%'";
			 if ($acd=="ThirdYear")
			   if($mjr=="CS")
			  	$sql="SELECT student_rollNo from student where student_rollNo like '%3CS%'";
			 if ($acd=="ThirdYear")
			   if($mjr=="CT")
			  	$sql="SELECT student_rollNo from student where student_rollNo like '%3CT%'";
			
			  	
			
			$this->openDB();
			$this->prepareQuery(@$sql);
			$result=$this->executeQuery();	
            
			
		
			return $result;
			
					
		}
		
		
	public function getStudentListLimit($rno,$start_from){
	
	             
			
	$sql="SELECT student.student_name,sitexam_detail.exam_status,student.student_rollNo from student,sitexam_detail where student_rollNo like '%$rno%' AND student.student_id=sitexam_detail.student_student_id limit $start_from,5";		   	
			 
			
			$this->openDB();
			$this->prepareQuery(@$sql);
			$result=$this->executeQuery();	
			
			
			return $result;
			
	}
		
	

}




