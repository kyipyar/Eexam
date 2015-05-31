<?php
class StudentDao extends DAO{
public function getStd_Id($rno,$pass){
		
		$sql="select * from student where student_rollNo=:rno and student_pwd=:pass";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":rno",$rno);
		$this->bindQueryParam(":pass",$pass);
		$result=$this->executeQuery();		
		return $result;
	}
	
	public function ProfileStudentSaveLink(){
	/*echo  "All DATA IN SESSION";
	echo "</pre>";
	print_r($_SESSION['student']);
	echo "</pre>";*/
	//$sql="Update student set student_name=:stdname, student_rollNo=:rollno, student_photo=:photo ,student_dateOfBirth=:dob,student_NRCno=:nrc, student_father_name=:fname, student_address=:address, student_email=:email, student_phno=:pno, student_pwd=:pwd where student_id=:std_id";
	$sql="Update student set student_name=:stdname, student_rollNo=:rollno, student_photo=:photo ,student_dateOfBirth=:dob,student_NRCno=:nrc, student_father_name=:fname, student_address=:address, student_email=:email, student_phno=:pno where student_id=:std_id";
	$this->openDB();
	$this->prepareQuery($sql);	
	$this->bindQueryParam(":stdname", $_SESSION['student']->getStudentName());	
	$this->bindQueryParam(":rollno",$_SESSION['student']->getStudentRollNo());
	$this->bindQueryParam(":dob",$_SESSION['student']->getStudentDateOfBirth());
	$this->bindQueryParam(":nrc",$_SESSION['student']->getStudentNRCno() );
	$this->bindQueryParam(":fname",$_SESSION['student']->getStudentFatherName());
	$this->bindQueryParam(":address",$_SESSION['student']->getStudentAddress());
	$this->bindQueryParam(":email",$_SESSION['student']->getStudentEmail());
	$this->bindQueryParam(":pno",$_SESSION['student']->getStudentPhno());
	//$this->bindQueryParam(":pwd",$_SESSION['student']->getStudentPwd());
	$this->bindQueryParam(":photo", $_SESSION['student']->getStudentPhoto());	
	$this->bindQueryParam(":std_id", $_SESSION['student']->getStudentId());
	//echo "Hello";
	$this->beginTrans();
	$result=$this->executeUpdate();
	
	if($result)
	$this->commitTrans();
	else 
	$this->rollbackTrans();
	
	
	}
	public function chgStdPwd($pwd){
		//echo "@@".$_SESSION['student']->getStudentId()."!!".$pwd;
		$sql="Update student set student_pwd=:pwd where student_id=:std_id";
		$this->openDB();
		$this->prepareQuery($sql);	
		$this->bindQueryParam(":pwd",$pwd);
		$this->bindQueryParam(":std_id", $_SESSION['student']->getStudentId());
		$this->beginTrans();
		$result=$this->executeUpdate();		
		if($result)
		$this->commitTrans();
		else 
		$this->rollbackTrans();
		
	}
public function getMjrNAcdbyID($id){
		$sql="select subject.subject_id,subject.subject_name from subject,student_detail where subject.major_major_id=student_detail.major_id and student_detail.student_id=:id;";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":id",$id);
		$result=$this->executeQuery();
		return $result;
	}
	public function getSubidAfterSitExam($id){
		$sql="select * from sitexam where student_student_id=:id;";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":id",$id);
		$result=$this->executeQuery();
		return $result;
	}
	public function getcorrectanswerbySubId($subid)
	{
		$sql="select questions.questions,questions.correct_answer,possibleanswers.possible_answerA,possibleanswers.possible_answerB,possibleanswers.possible_answerC,possibleanswers.possible_answerD from questions,possibleanswers where questions.questions_id=possibleanswers.questions_id and questions.subject_id=:sid and questions.question_status=1;";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":sid",$subid);
		$result=$this->executeQuery();
		return $result;
	}
	public function getquestionbySubId($subid)
	{// echo "subjec is $subid and start is $start_from";
		$sql="select questions.questions_id,questions.questions,questions.correct_answer,possibleanswers.possible_answerA,possibleanswers.possible_answerB,possibleanswers.possible_answerC,possibleanswers.possible_answerD from questions,possibleanswers where questions.questions_id=possibleanswers.questions_id and questions.subject_id=:sid and questions.question_status=1;";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":sid",$subid);
		//$this->bindQueryParam(":start",$start);
		$result=$this->executeQuery();
		/*echo "Result is ";
		echo "<pre>";
		print_r($result);
		echo "</pre>";*/
		return $result;
	}
	public function getStdById($std_id){
		//echo "@@".$_SESSION['student']->getStudentId()."!!".$pwd;
		
		$sql="Select * from student where student_id=:std_id";
		$this->openDB();
		$this->prepareQuery($sql);	
		
		$this->bindQueryParam(":std_id", $std_id);
		$result=$this->executeQuery();
		
		return $result;		
	}
	public function saveUpdateProfile(){
		$sql="Update student set student_name=:stdname, student_father_name=:fname, student_address=:address, student_email=:email, student_phno=:pno where student_id=:std_id";
		
		$this->openDB();
		$this->prepareQuery($sql);	
		$this->bindQueryParam(":stdname", $_SESSION['StudentUpdateProfile']->getStudentName());	
		$this->bindQueryParam(":fname",$_SESSION['StudentUpdateProfile']->getStudentFatherName());
		$this->bindQueryParam(":address",$_SESSION['StudentUpdateProfile']->getStudentAddress());
		$this->bindQueryParam(":email",$_SESSION['StudentUpdateProfile']->getStudentEmail());
		$this->bindQueryParam(":pno",$_SESSION['StudentUpdateProfile']->getStudentPhno());
		$this->bindQueryParam(":std_id", $_SESSION['student_id']);
		
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
		$this->commitTrans();
		else 
		$this->rollbackTrans();	
	}
	public function stdMarksSave($mark,$substatus){
		//echo $mark."~~~".$_SESSION['subject_id']."~~~~~~~".$_SESSION['student']->getStudentId();
		$sql="insert into sitexam values(null,:mark,:status,:stdid,:subid);";
		$this->openDB();
		$this->prepareQuery($sql);	
		$this->bindQueryParam(":mark", $mark);	
		$this->bindQueryParam(":status", $substatus);
		$this->bindQueryParam(":stdid",$_SESSION['student']->getStudentId());
		$this->bindQueryParam(":subid",$_SESSION['subject_id']);		
		$this->beginTrans();
		$result=$this->executeUpdate();		
		if($result)
		$this->commitTrans();
		else 
		$this->rollbackTrans();	
		echo "######### $result";
		
	}
}