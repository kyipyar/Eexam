<?php
class UpdateQuestionController{
	public function renderUpdateEditQuestion(){
		if(!isset($_SESSION["questions_id"]))
			$_SESSION["questions_id"]=$_POST["questions_id"];
				
		if(!isset($_SESSION["question"])){
			$teacherquesdao=new TeacherQuesDAO();
			$questionResult=$teacherquesdao->getquestionbyQuesId($_SESSION["questions_id"]);
		
			$question=new QuestionUP();
			$question->setQesId($_SESSION["questions_id"]);
			$question->setQes($questionResult[0]["questions"]);
			$question->setPosAnsA($questionResult[0]["possible_answerA"]);
			$question->setPosAnsB($questionResult[0]["possible_answerB"]);
			$question->setPosAnsC($questionResult[0]["possible_answerC"]);
			$question->setPosAnsD($questionResult[0]["possible_answerD"]);
			$question->setCorAns($questionResult[0]["correct_answer"]);
			$_SESSION["question"]=$question;}
					
		return new UpdateQuestionEditView();
	}	
	public function renderUpdateEditConfirmQuestion(){
		$question=new QuestionUP();
		$question->setQesId($_SESSION["questions_id"]);
		$question->setQes($_POST["question"]);
		$question->setPosAnsA($_POST["ans1"]);
		$question->setPosAnsB($_POST["ans2"]);
		$question->setPosAnsC($_POST["ans3"]);
		$question->setPosAnsD($_POST["ans4"]);
		$question->setCorAns($_POST["corans"]);
		
		$_SESSION["question"]=$question;
		
		return new UpdateQuestionEditConfirmView();
	}
	public function renderUpdateEditCompleteQuestion()
	{
		$questionupdao=new QuestionUPDao();
		$questionupdao->updateQuestionByquestionId();
		
		//echo "Updated Question id is ->".$_SESSION["questions_id"];
		
		return new UpdateQuestionEditCompleteView();
	}
	public function renderChangeQuestionStatus(){
		
		echo"Question status when clicking Change Status->".$_POST["question_status"];
		
		$questionupdao=new TeacherQuesDAO();
		$questionupdao->changeQuestionStatus($_POST["question_status"],$_POST["questions_id"]);
		
		$teacherquesdao=new TeacherQuesDAO();
		$questionList=$teacherquesdao->getquestionbySubId($_SESSION["subject_Id"]);
		
		return new TeacherQuestionListShowView(PT_T_QES_LST, $questionList);
		
	}
}