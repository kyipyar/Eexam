<?php
class StudentHomePageController{
		function renderLogin(){
			return new StudentLoginView(PT_STD_LI);	
			
		}
		function renderLoginCheck($come_back=null){
			if($come_back==null){
			if(!isset($_SESSION['student'])){
					$roll_no=@$_POST['roll_no'];
					$pass=@$_POST['password'];	
					$_SESSION["roll_no"]=$roll_no;
					$_SESSION["pass"]=$pass;
					
					if((strlen($roll_no))==0 && (strlen($pass)==0)){
						$err_msg['all_null_field']=ERR_LOGIN_ALL_NULL_FIELDS;
						return new StudentLoginView($err_msg);
					}
					else{
						if(strlen($roll_no)==0){
							$err_msg['roll_null']=ERR_LOGIN_NULL_ROLL_NO;
							
						}
						if(strlen($pass)==0){
							$err_msg['pass_null']=ERR_LOGIN_NULL_PASS_NO;
							
						}
					}
					if(!empty($err_msg)){
						return new StudentLoginView($err_msg);
					}																
			}
					
			$std_linkdao=new StudentDao();
			$std_result=$std_linkdao->getStd_Id($roll_no,$pass);
			
			if(isset($std_result[0]['student_id'])){				
				$_SESSION["student_id"]=$std_result[0]['student_id'];
			}
			
			if(empty($std_result))
			{	$err_msg['not_student_member']=ERR_NOT_STUDENT_MEMBER;	
				return new StudentLoginView($err_msg);
				}
			else {
				
				$Student=new Student();	
				$Student->setStudentId($std_result[0]['student_id']); 
				$Student->setStudentName($std_result[0]['student_name']);				
				$Student->setStudentRollNo($std_result[0]['student_rollNo']);			
				$Student->setStudentNRCno($std_result[0]['student_NRCno']);	
				$Student->setStudentPwd($std_result[0]['student_pwd']);	
				
				
				if(@$std_result[0]['student_dateOfBirth']!=null)
				
				{	$Student->setStudentDateOfBirth($std_result[0]['student_dateOfBirth']);	
					$Student->setStudentFatherName($std_result[0]['student_father_name']);
					$Student->setStudentAddress($std_result[0]['student_address']);
					$Student->setStudentEmail($std_result[0]['student_email']);
					$_SESSION['student']=$Student;
					//echo "<pre>";
					//print_r($_SESSION['student']);
					//echo "</pre>";
					if(isset($_SESSION["roll_no"]))
						unset($_SESSION["roll_no"]);
					if(isset($_SESSION["pass"]))
						unset($_SESSION["pass"]);
						
					return new StudentHomePageView();
				}
				else {
					if(isset($_SESSION["roll_no"]))
						unset($_SESSION["roll_no"]);
					if(isset($_SESSION["pass"]))
						unset($_SESSION["pass"]);
					$_SESSION['newuser']=NEW_USER;
					$_SESSION['student']=$Student;
					return new StudentProfileView();
				}
			}		
			
			}
			else return new StudentHomePageView();
}
	function renderAbout_us(){
		return new About_Us();
	}
	function renderContact_us(){
		return new Contact_Us();
	}
}