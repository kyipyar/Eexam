<?php
class T_StudentInfoDao extends DAO{
	
		/////////getting academic name(FirstYear/SecondYear/ThirdYear) for select box////////////////
		public function getT_Academic(){
			     	$sql="select * from academic";
			     	$this->openDB();
			     	$this->prepareQuery($sql);
			     	$result=$this->executeQuery();
			     	
			     	return $result;
				}
	
		/////////////getting major name(Normal/CS/CT) for select box////////////////
		public function getT_Major(){
			     	$sql="select distinct(major_name) from major";
			     	$this->openDB();
			     	$this->prepareQuery($sql);
			     	$result=$this->executeQuery();
			     	
			     	return $result;	     
				}

		///////////////////getting Student's Information (roll No)//////////////////////
		public function getT_StudentInfo($aa){
				
			    $sql="SELECT student.student_id,
			    			student.student_name,
			    			student.student_rollNo,
			    			sitexam_detail.total_mark ,
			    			sitexam_detail.exam_status 
			    	FROM student, sitexam_detail
			    	WHERE student.student_rollNo=:aa AND
			    		 student.student_id=sitexam_detail.student_student_id";
			    
		     	$this->openDB();
		     	$this->prepareQuery($sql);
		     	$this->bindQueryParam(':aa', $aa);
		     	$result=$this->executeQuery();	     	
		     	return $result;   	     
		}
		
		////////////////////getting student's mark Detail Information///////////////// 
		public function getStudentInformationDetailList($student_id){
			
					$sql="SELECT student.student_id,
								student.student_name,
								student.student_rollNo,
								sitexam_detail.total_mark,
								sitexam_detail.exam_status
						FROM sitexam_detail,student
						WHERE 	student.student_id=sitexam_detail.student_student_id AND
								student.student_id=:student_id ";
					
					$this->openDB();
					$this->prepareQuery($sql);
					$this->bindQueryParam(':student_id', $student_id);
					$result=$this->executeQuery();
					return $result;
				}
	//////////////////////////mark Alll////////////////////////
		public function getMarkAll($student_id){
					$sql="SELECT subject.subject_name,sitexam.marks
							FROM sitexam_detail,subject,sitexam
							WHERE 	subject.subject_id=sitexam.subject_subject_id AND
								sitexam.student_student_id=sitexam_detail.student_student_id AND
								sitexam.student_student_id=:student_id";
					
					$this->openDB();
					$this->prepareQuery($sql);
					$this->bindQueryParam(':student_id', $student_id);
					$result=$this->executeQuery();
					return $result;
		}
	
		/////////////////////getting Student's Information (academic and Major)//////////////////////
		public function getT_FY_StudentInfo($FY,$Normal){
			//echo "~~~~~~~~`".$FY.$Normal;		  		
			$sql="SELECT student.student_id,student.student_name, student.student_rollNo, sitexam_detail.total_mark, sitexam_detail.exam_status
					FROM sitexam_detail, major, student, student_detail
					WHERE major.major_name = :normal
					AND major.academic_academic_id =:FY
					AND student_detail.major_id = major.major_id
					AND sitexam_detail.student_student_id = student_detail.student_id
					AND student.student_id = student_detail.student_id";
									
							$this->openDB();
							$this->prepareQuery($sql);
							$this->bindQueryParam(':normal',$Normal );
						    $this->bindQueryParam(':FY', $FY);
							$result=$this->executeQuery();
						    $this->closeDB();	  
						    return $result;
					}

		////////////////////////getting student's info Fill result////////////////////
				public function getT_FY_StudentInfoandFillResult($FY,$Normal)
					{
						$sql="SELECT sitExam.marks,sitExam.student_student_id
										FROM sitExam, student_detail, major
										WHERE sitExam.student_student_id = student_detail.student_id
										AND student_detail.major_id = major.major_id
										AND major.major_name = :normal
										AND major.major_id =:FY";
							$this->openDB();
							$this->prepareQuery($sql);
							$this->bindQueryParam(':normal',$Normal );
						    $this->bindQueryParam(':FY', $FY);
							$result=$this->executeQuery();
						    $this->closeDB();	
						     
						     	return $result;
					}
					
		//////////////////saving student's Mark Status /////////////////	
					
				public function saveTotalMarkandStatus($tm,$status,$srno){
						$sql="insert into sitexam_detail values(null,:total_mark,:exam_status,null,2,1,:sid)";
						$this->openDB();
							$this->prepareQuery($sql);
							$this->bindQueryParam(':total_mark',$tm );
						    $this->bindQueryParam(':exam_status',$status);
						    $this->bindQueryParam(':sid',$srno);
							$result=$this->executeQuery();
						     $this->closeDB();					     
					}
					
	///////////////Number of Student for previous Next//////////////////
				public function getT_NoOfStudent()
					{
						$sql="select count(*) from student";
					
						$this->openDB();
						$this->prepareQuery($sql);
						$result=$this->executeQuery();
						return ($result[0][0]);
					}
					public function getTotalMark($sid){
						$sql="select marks,subject_exam_status from sitexam where student_student_id=:sid";
							$this->openDB();
							$this->prepareQuery($sql);
							$this->bindQueryParam(':sid',$sid);						    
							$result=$this->executeQuery();
						     $this->closeDB();
						     return $result;
					}
					public function getT_StudentID($rno)
					{
						/*echo "~~~~~~~~~~~~~~~~~~~~~";
						echo "<pre>";
						print_r($rno);
						echo "</pre>";*/
						$sql="select student_id from student where student_rollNo=:sno";
							$this->openDB();
							$this->prepareQuery($sql);
							$this->bindQueryParam(':sno',$rno);						    
							$result=$this->executeQuery();
						     $this->closeDB();
						     return $result;
					}
}