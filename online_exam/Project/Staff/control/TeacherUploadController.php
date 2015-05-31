<?php
class TeacherUploadController {
		public function renderTeacherSearch(){
			$academicdao=new TeacherQuesDAO();
			$academic_all=$academicdao->getacademicall();	
			if(isset($_SESSION['academic'])) unset($_SESSION['academic']);			
			if(isset($_SESSION['course'])) unset($_SESSION['course']);						
		return new TeacherQuestionSearchView(PT_T_SEAR,$academic_all); 
}

		public function renderT_QuestionEdit(){
		
						//echo"Question:".@$_POST["qes"]."<br>";
						//echo"Possible AnswerA:".@$_POST["ans1"]."<br>";
						//echo"Possible AnswerB:".@$_POST["ans2"]."<br>";
						//echo"Possible AnswerC:".@$_POST["ans3"]."<br>";
						//echo"Possible AnswerD:".@$_POST["ans4"]."<br>";
						//echo"Correct Answer:".@$_POST["corans"]."<br>";
						/*$regans1=@$_POST["ans1"];
						$regans2=@$_POST["ans2"];
						$regans3=@$_POST["ans3"];
						$regans4=@$_POST["ans4"];
						$regcorans=@$_POST["corans"];
						$regque=@$_POST["qes"];
						
						$tch=new QuestionUP();
						$tch->setPosAnsA($regans1);
						$tch->setPosAnsB($regans2);
						$tch->setPosAnsC($regans3);
						$tch->setPosAnsD($regans4);
						$tch->setCorAns($regcorans);
						$tch->setQes($regque);
						$tch->setQes($regque);
						
								//$error_msg=array();	
						
						$_SESSION["QesPos"]=$tch;
						
						if ((strlen($regque)==0) && (strlen($regans1)==0)  && (strlen($regans2)==0)  && (strlen($regans3)==0) && (strlen($regans4)==0)  && (strlen($regcorans)==0))
						{echo "PPPPP";
							$error_msg["all"]=ERR_ALL_NULL;
							return new T_QuestionEditView(PT_T_UPD_QES,$error_msg);
						}
						else{
							if (strlen($regans1)==0){
							echo "ma han su1";
						$error_msg["ans1"]=ERR_ANS1_NULL;
						//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
						}		
						if (strlen($regans2)==0){
						$error_msg["ans2"]=ERR_ANS2_NULL;
						//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
						}
						if (strlen($regans3)==0){
						$error_msg["ans3"]=ERR_ANS3_NULL;
						//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
						}
						if (strlen($regans4)==0){
						$error_msg["ans4"]=ERR_ANS4_NULL;
						// new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
						}
						if (strlen($regcorans)==0){
						$error_msg["corans"]=ERR_COR_NULL;
						//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
						}
						
						if (strlen($regque)==0){
						$error_msg["qes"]=ERR_QES_NULL;
						//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
						}
						//return new TeacherUploadNewQuestionView(PT_Q_UPL);
						
						//return new T_QuestionUploadView($error_msg);
					}
					if(empty($error_msg))	   	
							return  new T_QuestionConfirmView(PT_T_Q_CNF);
					else 
							return  new T_QuestionEditView(PT_T_EDT,$error_msg);	*/  
								if(!isset($_SESSION['academic']))
								{
									$academic=$_POST['academic'];
									$major=$_POST['course'];
									$_SESSION['academic']=$_POST['academic'];
									$_SESSION['course']=$_POST['course'];
								}
								else {									
									$academic=$_SESSION['academic'];
									$major=$_SESSION['course'];
								}
								
							echo "AC is".$academic. "course is".$major;
							$questUpload=new TeacherQuesDAO();
							$majorid=$questUpload->getmajoridwithAacdNMjr($academic,$major);
							$mid=$majorid[0]['major_id'];
							$result=$questUpload->getsubbyacaNmajor($mid);
							
							/*echo "related subject are:";
							echo "<pre>";				
							print_r($result);
							echo "</pre>";*/
							
						return  new T_QuestionEditView(PT_T_EDT,$result);						
				
		
	   }
	            public  function renderT_QuestionConfirm(){
						$regans1=@$_POST["ans1"];
						$regans2=@$_POST["ans2"];
						$regans3=@$_POST["ans3"];
						$regans4=@$_POST["ans4"];
						$regcorans=@$_POST["corans"];
						$regque=@$_POST["question"];
						//echo "QEs ".$regque;
						$regsubjectid=@$_POST['subject'];
						$tch=new QuestionUP();
						$tch->setPosAnsA($regans1);
						$tch->setPosAnsB($regans2);
						$tch->setPosAnsC($regans3);
						$tch->setPosAnsD($regans4);
						$tch->setCorAns($regcorans);						
						$tch->setQes($regque);
						$tch->setsubId($regsubjectid);
						
						
								//$error_msg=array();	
						
						$_SESSION["QesPos"]=$tch;
						
						if ((strlen($regque)==0) && (strlen($regans1)==0)  && (strlen($regans2)==0)  && (strlen($regans3)==0) && (strlen($regans4)==0)  && (strlen($regcorans)==0))
						{
							$error_msg["all"]=ERR_ALL_NULL;
							return new T_QuestionEditView(PT_T_UPD_QES,$error_msg);
						}
						else{
							
								if (strlen($regans1)==0){							
								$error_msg["ans1"]=ERR_ANS1_NULL;
								//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
								}		
								if (strlen($regans2)==0){
								$error_msg["ans2"]=ERR_ANS2_NULL;
								//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
								}
								if (strlen($regans3)==0){
								$error_msg["ans3"]=ERR_ANS3_NULL;
								//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
								}
								if (strlen($regans4)==0){
								$error_msg["ans4"]=ERR_ANS4_NULL;
								// new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
								}
								if (strlen($regcorans)==0){
								$error_msg["corans"]=ERR_COR_NULL;
								//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
								}
								if (strlen($regque)==0){
								$error_msg["qes"]=ERR_QES_NULL;
								//return new T_QuestionUploadView(PT_T_UPD_QES,$error_msg);
								}
							//return new TeacherUploadNewQuestionView(PT_Q_UPL);
							
							//return new T_QuestionUploadView($error_msg);
					}
					if(empty($error_msg))	
					{   	
							if(($regans1==$regcorans)||($regans2==$regcorans)||($regans3==$regcorans)||($regans4==$regcorans)){
								return  new T_QuestionConfirmView(PT_T_Q_CNF);
							}
							else 
							{
								$error_msg["not_match"]=ERR_QES_NULL;
								return  new T_QuestionEditView(PT_T_EDT,"",$error_msg);
								
							}
							
					}
					else 
							return  new T_QuestionEditView(PT_T_EDT,$error_msg);
		
					//return  new T_QuestionConfirmView(PT_T_Q_CNF);
		
	    }
	
	                public function renderT_QuestionComplete(){
		                //to save database
		                //print_r($_SESSION["QesPos"]);
		                $uploadQuedao=new TeacherQuesDAO();
		                $uploadQuedao->saveQuestions();
		                return new T_QuestionCompleteView(PT_T_QES_CMP);
	                }
	        
	

	
	
}