<?php
class TeacherQuesDAO extends DAO{
	    
		public function getMajorbyID(){
		$sql="select subject_id,subject_name from subject";
		$this->openDB();
		$this->prepareQuery($sql);
		//$this->bindQueryParam(":major_major_id",$major_major_id);
		$result=$this->executeQuery();
		return $result;
		
		//print_r($result);
	}
	
		public function getquestionbySubId($subject_id){
		
		$sql="select questions.questions_id,questions.question_status,questions.questions,questions.correct_answer,possibleanswers.possible_answerA,possibleanswers.possible_answerB,possibleanswers.possible_answerC,possibleanswers.possible_answerD from questions,possibleanswers where questions.questions_id=possibleanswers.questions_id and questions.subject_id=:subject_id;";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":subject_id",$subject_id);
		$result=$this->executeQuery();
		return $result;
		}
	public function getquestionbyQuesId($question_id){
		
		$sql="select questions.questions_id,questions.questions,questions.correct_answer,possibleanswers.possible_answerA,possibleanswers.possible_answerB,possibleanswers.possible_answerC,possibleanswers.possible_answerD from questions,possibleanswers where questions.questions_id=possibleanswers.questions_id and questions.questions_id=:questions_id;";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":questions_id",$question_id);
		$result=$this->executeQuery();
		return $result;
		}
		
		
		public function getsubbyacaNmajor($mid){
			//$sql="select subject.subject_id,subject.subject_name from subject,major where major.academic_academic_id=:ac and subject.major_major_id=:mj;";
			$sql="select subject_id,subject_name from subject where major_major_id=:mj";
			$this->openDB();
			$this->prepareQuery($sql);
			//$this->bindQueryParam(":ac",$acd);
			$this->bindQueryParam(":mj",$mid);
			$result=$this->executeQuery();
			return $result;
			
		}
		/*public function extractLastQuestionId(){
			$sql="select max(questions_id) from questions order by questions_id desc";
			$this->openDB();
			$this->prepareQuery($sql);
			
			$result=$this->executeQuery();
			
			return $result[0]["questions_id"];
		}*/
		public function saveQuestions(){
			//echo "Question is upload here";
			$sql="insert into questions values(null,:que,:corans,1,:subid)";
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(":que",$_SESSION['QesPos']->getQes());
			$this->bindQueryParam(":corans",$_SESSION['QesPos']->getCorAns());
			$this->bindQueryParam(":subid",$_SESSION['QesPos']->getsubId());
			$this->beginTrans();
			$result=$this->executeUpdate();
			if($result)
				$this->commitTrans();
			else 
			$this->rollbackTrans();
			
			$sql="select max(questions_id) as 'last_id' from questions order by questions_id desc";
			$this->prepareQuery($sql);
			$result=$this->executeQuery();
			$lastQuesId=$result[0]["last_id"];
			
			$sql="insert into possibleanswers values(null,:ans1,:ans2,:ans3,:ans4,:lastQuesId)";
			$this->prepareQuery($sql);
			$this->bindQueryParam(":ans1",$_SESSION['QesPos']->getPosAnsA());
			$this->bindQueryParam(":ans2",$_SESSION['QesPos']->getPosAnsB());
			$this->bindQueryParam(":ans3",$_SESSION['QesPos']->getPosAnsC());
			$this->bindQueryParam(":ans4",$_SESSION['QesPos']->getPosAnsD());	
			$this->bindQueryParam(":lastQuesId", $lastQuesId);		
			$this->beginTrans();
			$result=$this->executeUpdate();
			if($result)
				$this->commitTrans();
			else 
			$this->rollbackTrans();
		}
		
			public function getmajoridwithAacdNMjr($acd,$mjr){
			//echo "<br><br><br>AC is".$aca. "course is".$mjr;
			$sql="select major_id from major where major_name=:mj and academic_academic_id=:ac";
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(":ac",$acd);
			$this->bindQueryParam(":mj",$mjr);
			$result=$this->executeQuery();			
			return $result;
		     }
		
		   public function getmajoridwithAacdNMjrTeacher($acd,$mjr){
			
			
			
			//echo "<br><br><br>AC is".$acd. "...........course is".$mjr;
			
			//echo "<br>In Dao, Academic id is -> ".$acd;
			//echo "<br>In Dao, Major id is ->".$mjr;
			
			$sql ="select subject.subject_id,subject.subject_name from subject,major where major.academic_academic_id=:ac and major.major_name=:mj and major.major_id=subject.major_major_id;";
			//$sql="select major_id from major where major_name=:mj and academic_academic_id=:ac";
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(":ac",$acd);
			$this->bindQueryParam(":mj",$mjr);
			$result=$this->executeQuery();

			//echo "<br>Subject List---><pre>";print_r($result);echo "</pre>";
			
			return $result;
		}
		
		
			public function getacademicall(){
			$sql="select * from academic";
			$this->openDB();
			$this->prepareQuery($sql);			
			$result=$this->executeQuery();
			return $result;
			
		}
		
		
	      public function changeQuestionStatus($question_status,$question_id){
				if($question_status==1)
						$sql="update questions set question_status=0 where questions_id=:question_id";
				elseif($question_status==0)
						$sql="update questions set question_status=1 where questions_id=:question_id";
			
				$this->openDB();
				$this->prepareQuery($sql);
				$this->bindQueryParam(":question_id", $question_id);
				
				$this->beginTrans();
				$result=$this->executeUpdate();
				if($result)
					$this->commitTrans();
				else 
					$this->rollbackTrans();
	}
}