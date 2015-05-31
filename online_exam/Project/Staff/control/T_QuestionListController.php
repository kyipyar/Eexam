<?php
class T_QuestionListController{
	
		
	public function renderT_QuestionList(){
		
		     $statusdao=new StudentpfDAO();
			$status_academic=$statusdao->getT_Academic();
			$status_major=$statusdao->getT_Major();			
		
	return  new TeacherQuestionView(PT_T_QES,$status_academic,$status_major);
	}
	
	public function renderT_Question_Major_Qes()
	{
		if(!isset($_SESSION['subject_Id']))
			$_SESSION['subject_Id']=$_POST['subject_Id'];		
		
		
			
	    $teacher_Qes_id_question=new TeacherQuesDAO();
		$result=$teacher_Qes_id_question->getquestionbySubId($_SESSION['subject_Id']);		
		
		return new TeacherQuestionListShowView(PT_Ques_Show,$result);
	}
	
		public function renderTeacherQuestionList(){
		                    if(!isset($_SESSION['academic']))
								{									
									$_SESSION['academic']=$_POST['academic'];
									$_SESSION['course']=$_POST['course'];
								}
								
							//echo "AC is".$academic. "course is".$major;
							$questview=new TeacherQuesDAO();
							$subjectList=$questview->getmajoridwithAacdNMjrTeacher($_SESSION['academic'],$_SESSION['course']);
							
							//print_r($majorid);
							
							//$mid=$majorid[0]['major_id'];
							//$result=$questview->getsubbyacaNmajor($mid);
							
							/*echo "related subject are:";
							echo "<pre>";				
							print_r($result);
							echo "</pre>";*/
			
			
			return new TeacherQuestionListView(PT_T_QES_LST,$subjectList);
		}
		
}