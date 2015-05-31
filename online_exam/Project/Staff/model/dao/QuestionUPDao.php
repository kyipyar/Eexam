<?php
class QuestionUPDao extends DAO{

	 public function saveQuestions(){
		echo "$$".$_SESSION["teacher"]->getQes();
		$sql="insert into questions values(null,:questions,:correct_answer,1)";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":questions", $_SESSION["teacher"]->getQes());
		$this->bindQueryParam(":correct_answer", $_SESSION["teacher"]->getCorAns());
		$this->beginTrans();
		$result=$this->executeUpdate();
		print_r($result);
		if($result)
			$this->commitTrans();
		else 
		$this->rollbackTrans();
	}
	public function updateQuestionByquestionId()
	{
		$sql="update questions set questions=:questions,correct_answer=:correct_answer where questions_id=:questions_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":questions", $_SESSION["question"]->getQes());
		$this->bindQueryParam(":correct_answer", $_SESSION["question"]->getCorAns());
		$this->bindQueryParam(":questions_id", $_SESSION["questions_id"]);
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 
		$this->rollbackTrans();
		
		$sql="update possibleanswers set possible_answerA=:possible_answerA,possible_answerB=:possible_answerB,possible_answerC=:possible_answerC,possible_answerD=:possible_answerD where questions_id=:questions_id";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":possible_answerA", $_SESSION["question"]->getPosAnsA());
		$this->bindQueryParam(":possible_answerB", $_SESSION["question"]->getPosAnsB());
		$this->bindQueryParam(":possible_answerC", $_SESSION["question"]->getPosAnsC());
		$this->bindQueryParam(":possible_answerD", $_SESSION["question"]->getPosAnsD());
		$this->bindQueryParam(":questions_id", $_SESSION["questions_id"]);
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 
		$this->rollbackTrans();
	}
}