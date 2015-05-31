<?php
class StudentSitExamController{

	public function renderChoseMjrSitExam(){
		$s=new Student();		
		$id=$_SESSION['student']->getStudentId();
		
		$stddetail=new StudentDao();		
		$allsub=$stddetail->getMjrNAcdbyID($id);
		/*echo "<pre>";
		print_r($allsub);
		echo "</pre>";*/
		$finishSub=$stddetail->getSubidAfterSitExam($id);			
		$choosed_major=$allsub;		
		//if(!empty($choosed_major)){			
				$_SESSION['choosed_major']=$choosed_major;	
		//}
		//	else return new stdFinishSitExamView("",PT_NO_SUBJECT_TO_SIT_EXAM)	;	
		
		return new sitExamMjrChoView();
	}
	
	public function renderStdSitExam($previous=null){
		$correctAns=array();
		$i=0;
		//to carry subject ID//
			if(isset($_SESSION['subject_id']))
			{
				$subid=$_SESSION['subject_id'];
				
			}
			else {
				$subid=$_POST['subjectId'];			
			}		
			
		//for require Field ERRor
		if($subid==null)
		{
			$err_msg_sub['suberr']=ERR_SUB_CHOSE;
		}
		if(!empty($err_msg_sub)){
			return new sitExamMjrChoView($err_msg_sub);
		}		
		
		
		else {
			//start of sitting exam;
		if(!isset($_SESSION['subject_id']))
		{
			$_SESSION['subject_id']=$subid;
			//echo "%%%%%%%%%%".$subid;
		}
		$stdsubject=new StudentDao();		
		$id=$_SESSION['student']->getStudentId();
		//for checking finish anser
		$finishSub=$stdsubject->getSubidAfterSitExam($id);
		
		foreach ($finishSub as $value){
		
			if($value['subject_subject_id']==$subid)
			{//echo "************".$subid;
				$err_msg_sub['finished']=ERR_SUB_CHOSE_FINISH;
				unset($_SESSION['subject_id']);				
				return new sitExamMjrChoView($err_msg_sub);
			}
			
		}
		if(count($finishSub)==count($_SESSION['choosed_major']))
		{
			return new stdFinishSitExamView("",PT_NO_SUBJECT_TO_SIT_EXAM);
		}
		
		
		$resultCorAns=$stdsubject->getcorrectanswerbySubId($subid);				
		
		$i=1;
		$resultquestion=$stdsubject->getquestionbySubId($subid);
		foreach ($resultCorAns as $corretans){
			
			$correctAns[$i]=$corretans['correct_answer'];
			$i++;
		}
		$_SESSION['correctAns']=$correctAns;		
		return new stdSittingExamView($resultquestion);
		}
	}
	public function renderStdSitExamFinish(){
		
			
		$ans=$_POST['ans'];			
		$mark=0;
		$stdans=array();
		$corAns=$_SESSION['correctAns'];
		for($i=1;$i<=count($corAns);$i++){
			if(@$ans[$i]==null)
			{
				$stdans[$i]="no answer";
			}
			else {
				$stdans[$i]=$ans[$i];
			}
		}	
		/*echo "<pre>";
		print_r($stdans);
		echo "</pre>";*/
		///////calculate the mark 1 subject and 1 questions for 5 marks///////////////////
		
		for($i=1;$i<=count($corAns);$i++){
			if($corAns[$i]==$stdans[$i])
			{
				$mark+=5;
			}
			
		}	
		$sub_status='Fail';
		if($mark>=80)
		{
			$sub_status='Destination';
		}
		elseif ($mark>=65 && $mark<80)
		{
			$sub_status='Credit';
		}
		elseif ($mark>=50 && $mark<=64)
		{
			$sub_status='Pass';
		}
		else $sub_status='Fail';
		$stdmark=new StudentDao();	
		
		$stdmark->stdMarksSave($mark,$sub_status);		
		if(isset($_SESSION['subject_id'])) unset($_SESSION['subject_id']);
		if(isset($_SESSION['correctAns'])) unset($_SESSION['correctAns']);	
		if(isset($_SESSION['choosed_major'])) unset($_SESSION['choosed_major']);
		if(isset($_SESSION['question_no'])) unset($_SESSION['question_no']);
		//if(isset($_SESSION['page'])) unset($_SESSION['page']);
		//if(isset($_SESSION['student_answer']))unset($_SESSION['student_answer']);
		return new stdFinishSitExamView($mark);
	}
	
}

