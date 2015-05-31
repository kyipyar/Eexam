<?php
class  FrontController{
	public  function execute(){
	if(@$_POST["usecase"]==null){	
			
			$_POST["usecase"]=UC_FIRST;
			$_POST["action"]=ACT_FIRST_PAGE;

		}	
	if(isset($_SESSION["student"]))
	{
		if(@$_GET["usecase"]==UC_LOGOUT){
			//echo "here....";
			$_POST["usecase"]=UC_LOGOUT;
			$_POST["action"]=ACT_LOGOUT_PAGE;
		}
	}
		///About us //
	if(@$_GET["usecase"]==UC_ABOUT){
			//echo "here....";
			$_POST["usecase"]=UC_ABOUT;
			$_POST["action"]=ACT_ABOUT;
		}
	
	//
	///Contact us //
	if(@$_GET["usecase"]==UC_Contact){
			//echo "here....";
			$_POST["usecase"]=UC_Contact;
			$_POST["action"]=ACT_Contact;
		}
	
	//
	if(isset($_POST["btnStdLogin"])){
		echo "Hello Login";
			$_POST["usecase"]=UC_STD;
			$_POST["action"]=ACT_STD_CNF;

		}		
	
	if (isset($_POST["btnProConfirm"])){	
		if(isset($_SESSION['newuser']))	unset($_SESSION['newuser']);	
			$_POST["usecase"]=UC_STD;
			$_POST["action"]=ACT_STD_HP;
		}
	if (isset($_POST["btnProConfirmCancel"])){
			
			$_POST["usecase"]=UC_PF;
			$_POST["action"]=ACT_PF_CNF_CANCEL;
		}
	if (isset($_POST["btnfill"])){			
			$_POST["usecase"]=UC_PF;
			$_POST["action"]=ACT_PF_CNF;
		}
	if (isset($_POST["btnfillCancel"])){
			if(isset($_SESSION['student']))	
			{
				unset($_SESSION['student']);
			}		
			$_POST["usecase"]=UC_FIRST;
			$_POST["action"]=ACT_FIRST_PAGE;
		}	
	if (isset($_POST["btnStdResetPwd"])){			
			$_POST["usecase"]=UC_PF_PWD;
			$_POST["action"]=ACT_PF_RE_PWD;
		}
	if (isset($_POST["btnSTDNewPwd"])){			
			$_POST["usecase"]=UC_PF_PWD;
			$_POST["action"]=ACT_STD_NEW_PWD;
		}
	if (isset($_POST["btnSTDNewPwdCancel"])){			
			$_POST["usecase"]=UC_PF_PWD;
			$_POST["action"]=ACT_PF_RE_PWD;
		}
		//update profile of student
		
	if (isset($_POST["btnStdUpdateProfile"])){			
			$_POST["usecase"]=UC_STD_UPD;
			$_POST["action"]=ACT_STD__PF_UPD;
		}
		if (isset($_POST["btnUpdateConfirm"])){			
			$_POST["usecase"]=UC_STD_UPD;
			$_POST["action"]=ACT_UPD_CMP;
		}
	
	if (isset($_POST["btnUpdateProfileEdit"])){			
			$_POST["usecase"]=UC_STD_UPD;
			$_POST["action"]=ACT_STD_PF_CNF;
		}
		
		
	if (isset($_POST["btnUpdateProfileConfirm"])){			
			$_POST["usecase"]=UC_STD_UPD;
			$_POST["action"]=ACT_STD_PF_CMP;
		}
		
		
	if (isset($_POST["btnUpdateProfileEditCancel"])){			
			$_POST["usecase"]=UC_STD;
			$_POST["action"]=ACT_STD_CNF;
		}
		
	if (isset($_POST["btnUpdateProfileConfirmCancel"])){			
			$_POST["usecase"]=UC_STD_UPD;
			$_POST["action"]=ACT_STD__PF_UPD;
		}
	if (isset($_POST["btnHomePage"])){			
			$_POST["usecase"]=UC_FIRST;
			$_POST["action"]=ACT_FIRST_PAGE_HOME;
		}
	
		
	////////////////////////////Sitting Exam;///////
	if (isset($_POST["btnStdSitExam"])){	
			if(isset($_SESSION['subject_id'])) unset($_SESSION['subject_id']);
			if(isset($_SESSION['correctAns'])) unset($_SESSION['correctAns']);
			if(isset($_SESSION['choosed_major'])) unset($_SESSION['choosed_major']);
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STD_SIT_EXAM;
		}
	if (isset($_POST["btnStdSitExamAfterchosMajor"])){			
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STD_REL_SIT_EXAM;
		}
	if (isset($_POST["btnStdfinishExam"])){				
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STDL_SIT_EXAM_FINISH;
		}
	if (isset($_POST["btnstdSitExamYES"])){				
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STD_SIT_EXAM;
		}
	if (isset($_POST["btnstdSitExamNO"])){			
			$_POST["usecase"]=UC_FIRST;
			$_POST["action"]=ACT_FIRST_PAGE_HOME;
		}
		
	if (isset($_POST["btnstd_sit_exam_Next"])){			
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STDL_SIT_EXAM_NEXT;
		}
		///////////////////Prev and Next///////////////////////
		
		
	if (isset($_POST["btnstd_sit_exam_Next"])){			
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STDL_SIT_EXAM_NEXT;
		}
	
	if(isset($_GET['start_row']))
				$start_row=@$_GET['start_row'];
			else  
				$start_row=0;
		
	////////////////////////////////////////////////////////////////////////////////
	if (isset($_POST["uploadPhoto"])){			
			$_POST["usecase"]=UC_STD;
			$_POST["action"]=ACT_STD_PHOTO;
		}
		
	
	if(@$_GET["usecase"]==UC_STD_SIT_EXAM){//for next with paging View
			
			$_POST["usecase"]=UC_STD_SIT_EXAM;
			$_POST["action"]=ACT_STDL_SIT_EXAM_VIEW;
		}
	
	
					
	switch (($_POST["usecase"])){
			case UC_FIRST:if($_POST["action"]==ACT_FIRST_PAGE)
							{
								$ctl=new StudentHomePageController();
								return $ctl->renderLogin();
						
							}
			case UC_STD:if($_POST["action"]==ACT_STD_CNF)
							{
								$ctl=new StudentHomePageController();
								return $ctl->renderLoginCheck();
						
							}
							if($_POST["action"]==ACT_STD_PHOTO)
							{
								//echo "Photo upload";
								$ctl=new ProfileFillController();
								return $ctl->renderStudentPhotoUpload();
						
							}
							if($_POST["action"]==ACT_STD_HP)
							{								
								$ctl=new ProfileFillController();
								return $ctl->renderProfileFillSuccess();
						
							}
			case UC_PF:if ($_POST["action"]==ACT_PF_CNF){							
							$ctl=new ProfileFillController();
							return $ctl->renderProfileFillfromConfirm();
						}
						if ($_POST["action"]==ACT_PF_CNF_CANCEL){												
							$ctl=new ProfileFillController();
							return $ctl->renderProfileFill(PT_come_back);
						}
			case UC_PF_PWD:if ($_POST["action"]==ACT_PF_RE_PWD){
							
							$ctl=new ProfileFillController();
							return $ctl->renderChangePassword();
						}
							
						if ($_POST["action"]==ACT_STD_NEW_PWD){
							
							$ctl=new ProfileFillController();
							return $ctl->renderChangePasswordSuccess();
						}
			case UC_STD_UPD:if ($_POST["action"]==ACT_UPD_CNF){							
							$ctl=new UpdateProfileConfirmController();
							return $ctl->renderProfileConfirm();
						}
							if ($_POST["action"]==ACT_STD_HP){							
							$ctl=new ProfileFillController();
							return $ctl->renderProfileFillSuccess();
						}
						if ($_POST["action"]==ACT_STD__PF_UPD){							
							$ctl=new UpdateProfileConfirmController();
							return $ctl->renderProfileConfirm();
						}
						if ($_POST["action"]==ACT_STD_PF_CNF){							
							$ctl=new UpdateProfileConfirmController();
							return $ctl->renderUpdateProfileConfirm();
						}
						if ($_POST["action"]==ACT_STD_PF_CMP){							
							$ctl=new UpdateProfileConfirmController();
							return $ctl->renderUpdateProfileComplete();
						}
			case UC_LOGOUT:if($_POST["action"]==ACT_LOGOUT_PAGE)
							{
								//echo "here to login page!!!!";
								if(isset($_SESSION["student"]))
									unset($_SESSION["student"]);
								$ctl=new StudentHomePageController();
								return $ctl->renderLogin();
						
							}
			case UC_ABOUT:if($_POST["action"]==ACT_ABOUT)
							{
								$ctl=new StudentHomePageController();
								return $ctl->renderAbout_us();
							}
			case UC_Contact:if($_POST["action"]==ACT_Contact)
							{
								$ctl=new StudentHomePageController();
								return $ctl->renderContact_us();
							}
			case UC_STD_SIT_EXAM:if($_POST['action']==ACT_STD_SIT_EXAM)
							{
								$ctl=new StudentSitExamController();
								return $ctl->renderChoseMjrSitExam();
							}
							if($_POST['action']==ACT_STD_REL_SIT_EXAM)
							{
								
								$ctl=new StudentSitExamController();
								return $ctl->renderStdSitExam();
							}
							if($_POST['action']==ACT_STDL_SIT_EXAM_FINISH)
							{							
								$ctl=new StudentSitExamController();
								return $ctl->renderStdSitExamFinish();
							}
							if($_POST['action']==ACT_STDL_SIT_EXAM_NEXT)
							{
								//echo "~~~~~~~~~";
								$ctl=new StudentSitExamController();
								return $ctl->renderStdSitExam();
							}
							////////////////////////////////////
							
							if($_POST['action']==ACT_STDL_SIT_EXAM_NEXT)
							{
								echo "~~~~~~~~~";
								$ctl=new StudentSitExamController();
								return $ctl->renderStdSitExam();
							}
				case UC_FIRST:if($_POST['action']==ACT_FIRST_PAGE_HOME)
								{
								$ctl=new StudentHomePageController();
								return $ctl->renderLoginCheck(PT_HOME_BACK);
						
							}
							
						
		
		
				
		}
			
	}
}	