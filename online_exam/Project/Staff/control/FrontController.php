<?php
class FrontController{
		public function execute(){
		           if(@$_POST["usecase"]==null){
					$_POST["usecase"]=UC_FIRST;
					$_POST["action"]=ACT_FIRST_PAGE;
		
				   }
				   if(@$_POST["loginBtn"])
			     	{
			     		
			     		$_POST["usecase"]=UC_T;
			     		$_POST["action"]=ACT_T; 
			     	}
			     	
			     	
					
			     	////////////.....////////////
				   
			     	
					if(@$_POST["btnStaffHomePage"])
			     	{
			     		$_POST["usecase"]=U_ST_HP;
			     		$_POST["action"]=A_ST_HP; 		
			     		
			     		
			     	}
			     	
					if(@$_POST["btnStudentRegister"])
			     	{
			     		$_POST["usecase"]=U_STD_HP;
			     		$_POST["action"]=A_STD_HP; 		
			     		
			     		
			     	}
			     	
					if(@$_POST["btnStdRegister"])
			     	{
			     		$_POST["usecase"]=U_STD_EDT;
			     		$_POST["action"]=A_STD_EDT; 		
			     		
			     		
			     	}
			     	
					if(@$_POST["btnStdRegisterEdit"])
			     	{
			     		$_POST["usecase"]=U_STD_EDT;
			     		$_POST["action"]=A_STD_EDT; 		
			     		
			     		
			     	}
			     	
			     	if(@$_POST["btnStdRegConfirm"])
			     	{
			     		$_POST["usecase"]=UC_STD_REG;
			     		$_POST["action"]=ACT_STD_CNF; 		
			     			     		
			     	}
			     	
					if(@$_POST["btnStdRegConfirmCancel"])
			     	{
			     		$_POST["usecase"]=U_STD_HP;
			     		$_POST["action"]=A_STD_HP; 		
			     			     		
			     	}
			     	
					if(@$_POST["btnUpdPro"])
	     			{
	     				$_POST["usecase"]=UC_UPDPRO;
	     				$_POST["action"]=ACT_UPDPRO_EDT; 			
	     			}
					if(@$_POST["btnupdproedt"])
	     			{
	     				$_POST["usecase"]=UC_UPDPRO;
	     				$_POST["action"]=ACT_UPDPRO_CNF; 			
	     			}
					if(@$_POST["btnupdproconf"])
	     			{
	     				$_POST["usecase"]=UC_UPDPRO;
	     				$_POST["action"]=ACT_UPDPRO_CMP; 			
	     			}
					if(isset($_POST["btnUpdcancle"])){
			
					if(isset($_SESSION["teacher"]))
					unset($_SESSION["teacher"]);
			
						$_POST["usecase"]=U_ST_HP;
						$_POST["action"]=A_ST_HP;
					}
					if(isset($_POST["btnUpdcnfcancle"])){
						$_POST["usecase"]=UC_UPDPRO;
						$_POST["action"]=ACT_UPDPRO_EDT;
					}
			     	
					//updateteacher
					if(@$_POST["btnteaUpdPro"])
	     			{
	     				$_POST["usecase"]=UC_UPDPRO;
	     				$_POST["action"]=ACT_TEAUPDPRO_EDT; 			
	     			}
					
			     	//...student Pass or Fail...//
		          if(@$_POST["btnStudentResultInStage"])
			     	{
			     		$_POST["usecase"]=U_STD_PF_R;
			     		$_POST["action"]=A_STD_PF_R; 				     			     		
			     	}
			     	
				if(@$_POST["btnPFSearch"])
			     	{
			     		$_POST["usecase"]=U_PF;
			     		$_POST["action"]=A_PF; 				     			     		
			     	}
			     	
			     	
			     //staff and teacher registration......//
			     			  // staff and teacher registration
					  
		   if(@$_POST["btnStaffReg"])
	     	  {
	     		$_POST["usecase"]=UC_SREG;
	     		$_POST["action"]=ACT_SREG_EDT;     		
	     		
	     	  }  	   
			if(@$_POST["btnstaffregister"])
	           {
	          	$_POST["usecase"]=UC_SREG;
	         	$_POST["action"]=ACT_SREG_CNF; 		
	     		
	     		
	     	}
          if(@$_POST["btnRegisterComfim"])  //from confirm to staff home page
	     	  {
	     		$_POST["usecase"]=UC_SREG;
	     		$_POST["action"]=ACT_SREG_CMP;     		
	     		
	          }
         if(@$_POST["btnStaffHomePage"])  //from confirm to staff home page
	     	  {
	     		$_POST["usecase"]=U_ST_HP;
	     		$_POST["action"]=A_ST_HP;     		
	     		
	          }
	     	
           if(@$_POST["btncancle"])
	           {
	          	$_POST["usecase"]=U_ST_HP;
	         	$_POST["action"]=A_ST_HP; 		
	     		
	     		
	     	  }
           if(@$_POST["btnStaffConfimcancle"])
	           { 
	          	$_POST["usecase"]=UC_SREG;
	         	$_POST["action"]=ACT_SREG_EDT; 		
	     		
	     		
	     	  }
	     	  
	     	  
	     	  // for student list ......//
	     	if(@$_POST["btnStudentList"])    // from home to student List view
	     	{ 
	     		$_POST["usecase"]=UC_STDLIST;
	         	$_POST["action"]=ACT_STDLIST_DSP; 
	     		
	     		
	     		
	     	}
         if(@$_POST["btnStudRollnum_search"])    // from  student List Home to student info using roll number
	     	   { 
	     		$_POST["usecase"]=UC_STDLIST;
	         	$_POST["action"]=ACT_STDLIST_RSEARCH;    		
	     		
	         	}
	        if(@$_POST["btnStudListRoll_Num"])    // to  search student info from roll number button
	        {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_ROLLNUM;       	
	        	
	        } 
 		if(@$_POST["btn_Staff_Studlistdetail"])    // to display student list detail
	        {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_ROLLNODETAIL;       	
	        	
	        }
         if(@$_POST["btnstuddetailback"])    // to BACK  student roll number from student list detail back
	          {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_RSEARCH;       	
	        	
	          }
         if(@$_POST["btnStudAMj_search"])    // from student list Home to student info using acdmic and major
	          {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_AMJSEARCH;       	
	        	
	          }
           if(@$_POST["BtnST_StdlistAMj"])    // from student list Home to student info using academic and major
	          {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_AMJ;       	
	        	
	          }
			if(@$_POST["btn_Staff_StudlistdetailAMJ"])    // from student list Home to student info using academic and major
	          {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_AMJDETAIL;       	
	        	
	          }
	          if (@$_POST["btnstudamjdetailback"])  //for amj back
              {
	        	 
	        	$_POST["usecase"]=UC_STDLIST;
	        	$_POST["action"]=ACT_STDLIST_AMJSEARCH;       	
	        	
	          }
	          //for teacher registration.........
	          if(@$_POST["btnteachReg"])
	     	  {
	     		$_POST["usecase"]=UC_SREG;
	     		$_POST["action"]=ACT_SREG_EDT;     		
	     		
	     	  } 
		   if(@$_POST["btnTechStudentList"])    // from home to student List view
	     	  { 
	     		$_POST["usecase"]=UC_STDLIST;
	         	$_POST["action"]=ACT_STDLIST_DSP;     		
	     		
	     	  } 	   
	          
  /////////////////////....T_Student's Marks Info(Roll No)....///////////////////////////////
  		      
			if(isset($_POST["btnTHomeStdInfo"])){//T_student's marks information home page
					$_POST["usecase"]=UC_T_HOME_INFO;
					$_POST["action"]=ACT_T_HOME_INFO;
					}
					             	   	      
			if(isset($_POST["btnS_InfoRollNo"])){//T_student's marks information(Roll No) 
					$_POST["usecase"]=UC_T_STD_INFO;
					$_POST["action"]=ACT_T_STD_INFO;
					}
			
			if(isset($_POST["btnRoll_noSearch"]))//T_student's marks information Searchbtn(RollNo)
				{//echo "1111";
						$_POST["usecase"]=UC_ROLLNO_MARK_SEARCH;
						$_POST["action"]=ACT_ROLLNO_MARK_SEARCH;
					}
					
			if(isset($_POST["btn_T_DetailStudentMarkInfo1"]))//T_student's marks Detail information(RollNo)
				{
						$_POST["usecase"]=UC_T_STD_DETAIL;
						$_POST["action"]=ACT_T_STD_DETAIL;
					}
					
	/////////////////////....T_Student's Marks Info(Academic and Major)....///////////////////////////////
			
			if(isset($_POST["BtnT_AcMj_Search"]))//T_student's marks information Searchbtn(Academic and Major)
				{//echo "1111";
						$_POST["usecase"]=UC_T_AcMj_SEARCH;
						$_POST["action"]=ACT_T_AcMj_SEARCH;
					}
		
			if(isset($_POST["btnS_InfoAC&MJ"])){//T_student's marks information choosing (Academic and Major) 
					$_POST["usecase"]=UC_T_STD_INFO_AcMj;
					$_POST["action"]=ACT_T_STD_INFO_AcMj;
					}
			if(isset($_POST["BtnT_AcMj_SearchView2"])){//T_student's marks information choosing (Academic and Major) 
				echo "view II";
					$_POST["usecase"]=UC_T_AcMj_SEARCH;
					$_POST["action"]=ACT_T_AcMj_SEARCH;
					}
					
			
		if(isset($_POST["btn_T_DetailStudentMarkInfo2"]))//T_student's marks Detail information(Academic and Major)
				{echo "Due Dueeeeeee";
						//echo "<br>^^^^Student id is ->".$_POST["student_dtl_id"];
						$_POST["usecase"]=UC_T_STD_DETAIL_INFO;
						$_POST["action"]=ACT_T_STD_DETAIL_INFO;
					}
		
	
					
				
				
		///////////////////////////////Question Upload///////////////////////////////////////////////
		if(@$_POST["usecase"]=="btnQuestionUpload"){  	 //Question upload Course and Question choose
			//echo "####";
						      $_POST["usecase"]=UC_UPL;
				  	           $_POST["action"]=ACT_Q_UPL;  	     	    
				  	        } 
		 if(@$_POST["usecase"]=="btnUploadQuestion"){  //Question upload major and academic confirm	
						      $_POST["usecase"]=UC_UPD_QES;
				  	           $_POST["action"]=ACT_T_UPD_QES;  	     	   
				  	        } 
				  	        
				  	        if(@$_POST["usecase"]=="btnSearch"){  	 //Question upload Course and Question choose
						      $_POST["usecase"]=UC_T_EDT;
				  	           $_POST["action"]=ACT_T_EDT;  	     	    
				  	        } 
				  	        
				  	        if(isset($_POST["btnQesConfirmCancel"])){  //confirm cancel	
							      $_POST["usecase"]=UC_T_EDT;
					  	           $_POST["action"]=ACT_T_EDT;  	     	    
					  	        } 
				  	        
					  	    if(isset($_POST["btnQesComplete"])){  	
				  	         //	echo "***************";
						      $_POST["usecase"]=UC_T_UPD_CMF;
						      $_POST["action"]=ACT_T_UPD_CMF;  	     	    
				  	        } 
				  	        
				  	        if(isset($_POST["btnQesYES"])){  //complete yes
							      $_POST["usecase"]=UC_T_EDT;
					  	           $_POST["action"]=ACT_T_EDT;  	     	    
					  	        } 
					  	        
					  	    if(isset($_POST["btnQesNO"])){  //complete No
					  	    	if(isset($_SESSION['academic']))
					  	    		unset($_SESSION['academic']);
					  	    	if(isset($_SESSION['course']))
					  	    		unset($_SESSION['course']);
					  	    	
							    $_POST["usecase"]=UC_T;
					  	          $_POST["action"]=ACT_T_COMEBACK;
					  	         // $_POST["usecase"]=UC_SREG;  
					  	         // $_POST["action"]=ACT_SREG_CNF;	     	    
					  	        }
/////////////////////////////////////////////////////////////////////////////////////////////////////

		//Question View first Page
			if(isset($_POST["btnHomeVQ"])) {
				if(isset($_SESSION['academic']))
				unset($_SESSION['academic']);
				if(isset($_SESSION['course']))
				unset($_SESSION['course']);
				if(isset($_SESSION['subject_Id']))
				unset($_SESSION['subject_Id']);
				if(isset($_SESSION['questions_id']))
				unset($_SESSION['questions_id']);
				if(isset($_SESSION['question']))
				unset($_SESSION['question']);

				$_POST["usecase"]=UC_T_V_QUE;
				$_POST["action"]=ACT_T_V_QUE;
			}
				

			if(@$_POST["usecase"]=="btnQuestionList_Course"){  	//view Question List to Course
				$_POST["usecase"]=UC_T_V_QUE1;
				$_POST["action"]=ACT_T_V_QUE1;
			}
			if(isset($_POST["btn_YES_Maj"])){   	 //Question back to  major and academic
				if(isset($_SESSION["academic"])){
					unset($_SESSION["academic"]);
					echo "<br> academic session deleted";
				}
				if (isset($_SESSION["major"])){
					unset($_SESSION["major"]);
					echo "<br> major session deleted";
				}
				if(isset($_SESSION['subject_Id'])){
					unset($_SESSION['subject_Id']);
					echo "<br> subject session deleted";
				}

				$_POST["usecase"]=UC_T_V_QUE;
				$_POST["action"]=ACT_T_V_QUE;
			}


			if(isset($_POST["btn_T_Ques_After_chos_Major"])){  	//Questionn major chose to next

				if(isset($_SESSION["subject_Id"]))
				echo "subject id from session->".$_SESSION["subject_Id"];
					
				$_POST["usecase"]=UC_T_Ques_Major;
				$_POST["action"]=ACT_T_Ques_Major;
			}
				
			if(isset($_POST["btnBack"])){  	//Questionn major chose to next
				if(isset($_SESSION['subject_Id'])){
					unset($_SESSION['subject_Id']);
				}
				$_POST["usecase"]=UC_T_V_QUE1;
				$_POST["action"]=ACT_T_V_QUE1;
			}

			if(isset($_POST["btnUpdateFromQuesListView"])){  //complete yes
				$_POST["usecase"]=UC_UPD_EDT_QUES;
				$_POST["action"]=ACT_UPD_EDT_QUES;
			}

			if(isset($_POST["btnUpdateEditQuestion"])){  //complete yes
				$_POST["usecase"]=UC_UPD_EDT_QUES;
				$_POST["action"]=ACT_UPD_EDT_CNF;
			}
			
			if(isset($_POST["btnUpdateEditConfirmQuestion"])){  //complete yes
				$_POST["usecase"]=UC_UPD_EDT_QUES;
				$_POST["action"]=ACT_UPD_EDT_CMP;
			}
			if(isset($_POST["btnUpdateEditQuestionCancel"])){  //complete yes
				if(isset($_SESSION['questions_id']))
				unset($_SESSION['questions_id']);
				if(isset($_SESSION['question']))
				unset($_SESSION['question']);
				
				$_POST["usecase"]=UC_T_Ques_Major;
				$_POST["action"]=ACT_T_Ques_Major;
			}
			if(isset($_POST["btnUpdateEditConfirmQuestionCancel"])){  //complete yes
				$_POST["usecase"]=UC_UPD_EDT_QUES;
				$_POST["action"]=ACT_UPD_EDT_QUES;
			}
			if(isset($_POST["btnChangeStatus"])){  //change status
				$_POST["usecase"]=UC_CH_STATUS_QUES;
				$_POST["action"]=ACT_CH_STATUS_QUES;
			}
	     	
			
		    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~next Previous....//
	     	  if (isset($_POST["btn_PorF_Previous"])){			
						$_POST["usecase"]=UC_PorF_Previous;
						$_POST["action"]=ACT_PorF_Previous;
					}
	     	  
	     	  
	     	  
	     	  
	     	  
	     	  
	     	  if (isset($_POST["btn_PorF_Next"])){			
						$_POST["usecase"]=UC_PorF_Next;
						$_POST["action"]=ACT_PorF_NEXT;
					}

				if(isset($_GET['start_row']))
				$start_row=@$_GET['start_row'];
			else  
				$start_row=0;	

					
	     	   //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~next Previous....// 
					  	        
					  	        
					  	        
		        
		
					  	        
					  	        
					  	        
					  	        
			  if(isset($_GET['start_row']))
				$start_row=@$_GET['start_row'];
					else  
				$start_row=0;
				
				
			//	```````````````````````````````````````````````````````
		   if(@$_POST["usecase"]=="btnHomeStdPF"){  //home P/F by teacher
				$_POST["usecase"]=UC_STD_PF;
				$_POST["action"]=ACT_STD_PF;
			}
			
		if(isset($_POST["btnS_PFRollNo"])){                // For view T_student p/F by Roll No
				$_POST["usecase"]=UC_T_STD_PF;
				$_POST["action"]=ACT_T_STD_PF;
			}
				
			if(isset($_POST["btnS_PF_AcMj"])){             // For view T_student p/F  by Academic and Major
				$_POST["usecase"]=UC_T_STD_PF_AcMj;
				$_POST["action"]=ACT_T_STD_PF_AcMj;
			}
			if(isset($_POST["btnRoll_noSearch_PF"])){             // For view T_student p/F  Roll number search view
				$_POST["usecase"]=UC_ROLLNO_PF_SEARCH;
				$_POST["action"]=ACT_ROLLNO_PF_SEARCH;
			}

			if(isset($_POST["btnRoll_noSearch_PF_back"])){             // For view T_student p/F  Roll number search view  back
				$_POST["usecase"]=UC_ROLLNO_PF_BACK;
				$_POST["action"]=ACT_ROLLNO_PF_BACK;
			}

			if(isset($_POST["btnT_AcMj_PF_Search"])){            // For view T_student p/F  Roll number search view  back
				if(isset($_SESSION['academic']))
				unset($_SESSION['academic']);
				if(isset($_SESSION['major']))
				unset($_SESSION['major']);
				
				$_POST["usecase"]=UC_T_AcMj_PF_SEARCH;
				$_POST["action"]=ACT_T_AcMj_PF_SEARCH;
			}
			if(isset($_POST["btn_T_PF_Aca_Search_Back"])){             // For view T_student p/F  Academic search view  back
				$_POST["usecase"]=UC_T_STD_PF_AC_BACK;
				$_POST["action"]=ACT_T_STD_PF_AC_BACK;
			}
			
			
			////////////calculate the mark//////////////
			
			if(isset($_POST["btnstdMarkCalculate"])){             
				$_POST["usecase"]=UC_STD_MARK_CALCULATE;
				$_POST["action"]=ACT_STD_MARK_CALCULATE;
			}
				
		/////////////////////////////////////////////////		
		
		switch ($_POST["usecase"]){
			
		      case UC_FIRST:if($_POST["action"]==ACT_FIRST_PAGE)
					{
			    		$ctl=new LoginController();
						return $ctl->renderLogin();
				
					}
					
				case UC_T :if($_POST["action"]==ACT_T)
					{
			    		$ctl=new LogInController();
						return $ctl->renderLogIn();
				
					}
						if($_POST["action"]==ACT_T_COMEBACK)
					{
			    		$ctl=new LogInController();
						return $ctl->renderLogIn(PT_Come_Back);
				
					}
			
		   
		      
		      case U_ST_HP :if($_POST["action"]==A_ST_HP)
		      {
		      	  $ctl=new StaffBrowseLinkController();
		      	  return $ctl->renderStaffLink();	
		      	
		      	
		      	
		      }	
		      
		      case U_STD_HP :if($_POST["action"]==A_STD_HP)
		      {
		      	  $ctl=new StudentRegisterLinkController();
		      	  return $ctl->renderStudentRegisterLink();	
		      	
		      	
		      	
		      }	
		      
		     
		      
		      case U_STD_EDT :if($_POST["action"]==A_STD_EDT)
		      {
		      	  $ctl=new StudentRegisterLinkController();
		      	  return $ctl->renderStudentRegisterConfirm();	
		      	
		      	
		      	
		      }	
		      
		      case UC_STD_REG :if($_POST["action"]==ACT_STD_CNF)
		      {
		      	  
		      	  $ctl=new StudentRegisterLinkController();
		      	  return $ctl->renderStudentRegisterComplete();	
		      	
		      	
		      	
		      }	
		      
			
						case UC_UPDPRO :if($_POST["action"]==ACT_UPDPRO_EDT)
      					{
      	  					$ctl=new UpdateProfileLinkController();
      	  					return $ctl->renderUpdateProfileLinkEdit();	
      					}	
      					if($_POST["action"]==ACT_UPDPRO_CNF)
      						{
      	 						$ctl=new UpdateProfileLinkController();
      	  						return $ctl->renderUpdateProfileLinkConfirm();	
      						}
						if($_POST["action"]==ACT_UPDPRO_CMP)
      						{
      	 						$ctl=new UpdateProfileLinkController();
      	  						return $ctl->renderUpdateProfileLinkComplete();	
      						}
      						
      						//teacher profile update
						case UC_UPDPRO :if($_POST["action"]==ACT_TEAUPDPRO_EDT)
      					{
      	  					$ctl=new UpdateProfileLinkController();
      	  					return $ctl->renderUpdateProfileLinkEdit();	
      					}	
      					if($_POST["action"]==ACT_UPDPRO_CNF)
      						{
      	 						$ctl=new UpdateProfileLinkController();
      	  						return $ctl->renderUpdateProfileLinkConfirm();	
      						}
						if($_POST["action"]==ACT_UPDPRO_CMP)
      						{
      	 						$ctl=new UpdateProfileLinkController();
      	  						return $ctl->renderUpdateProfileLinkComplete();	
      						}
			
      						
      						//.....2....Student Pass or Fail............/
      						
			      		case U_STD_PF_R :if($_POST["action"]==A_STD_PF_R)
							      {
							      	  
							      	  $ctl=new StdPassFailController();
							      	  return $ctl->studentPassFail();			      	
							      }	
						//~~~~~~~~~~~~~~~~~~~~Pass or Fail~~~~~~~~~~~~~~~~~~~~~~~~//	      
								 case U_PF :if($_POST["action"]==A_PF)
							      {
							      	  
							      	 if (isset($_SESSION["studentList"]))
							      	 	unset($_SESSION["studentList"]);
							      	 
							      	  if (isset($_SESSION["page"]))
							      	  	unset($_SESSION["page"]);
							      	  if (isset($_SESSION["no"]))
							      	  	unset($_SESSION["no"]);
												      	 	
							      	  $ctl=new StdPassFailController();
							      	  return $ctl->studentPassFailResult();			      	
							      }	
				 //....................Next Previous............................// 
								case UC_PorF_Next :if($_POST["action"]==ACT_PorF_NEXT)
					      {
					      	  
					      	
					      	  $ctl=new StdPassFailController();
					      	  return $ctl->studentPassFailResult();			      	
					      }	
					      
					      
			    			case UC_PorF_Previous :if($_POST["action"]==ACT_PorF_Previous)
			    			{
					      	  $ctl=new StdPassFailController();
					      	  return $ctl->studentPassFailResult(PREVIOUS);			      	
					      }	
							      
				//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//	
							      
							      
							      
				//.................................................//
							       
					      //.................................................//
					      //staff and teacher registration.........//
					      
	  case UC_SREG:if($_POST["action"]==ACT_SREG_PHOTO)    //photo upload for staff and teacher
		      { 
				
				$ctl=new StaffRegisterLinkController();
				return $ctl->renderStaffPhotoUpload();
						
		      }			
			
      case UC_SREG:if($_POST["action"]==ACT_SREG_EDT)
			{
	    		$ctl=new StaffRegisterLinkController();
			   return $ctl->renderStaffRegisterEdit();
		
			}
       case UC_SREG:if($_POST["action"]==ACT_SREG_CNF)
           {
         	  $ctl=new StaffRegisterLinkController();
         	  return $ctl->renderStaffRegisterConfirm();   	
      	
      	
           }
       case UC_SREG:if($_POST["action"]==ACT_SREG_CMP)
           {
         	  $ctl=new StaffRegisterLinkController();
         	  return $ctl->renderStaffRegisterComplete();   	
      	
      	
           }
           
           
           // student list view.......................//
           
        case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_DSP)//for student list view
           {
         	  $ctl=new StaffStudentListController();
         	  return $ctl->renderStaffStudentListHome();   	
      	
      	
           }	
       case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_RSEARCH)//for data from database to student list view
             {
         	  $ctl=new StaffStudentListController();
         	  return $ctl->renderStaffStudentListRollNo();   	//roll num button
      	
      	
             }
       case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_ROLLNUM) //TO search roll number
             {  
       	        $ctl=new StaffStudentListController();
       	          return $ctl->renderStaffStudentListRollNoSearch(); 
              } 
	    case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_ROLLNODETAIL) //TO display detail from roll number
             {  
       	        $ctl=new StaffStudentListController();
       	          return $ctl->renderStaffStudentListRollNoDetail(); 
              } 
              
		 case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_AMJSEARCH) //TO acdmic and major button
            	 {  
       	       		 $ctl=new StaffStudentListController();
       	         	 return $ctl->renderStaffStudentListAMJ(); 
            	  }
              case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_AMJ) //TO acdmic and major button
            	 {  
       	       		 $ctl=new StaffStudentListController();
       	         	 return $ctl->renderStaffStudentListAMJSearch(); 
            	  }
                 case UC_STDLIST:if($_POST["action"]==ACT_STDLIST_AMJDETAIL) //TO ACMJ detail view
            	 {  
       	       		 $ctl=new StaffStudentListController();
       	         	 return $ctl->renderStaffStudentListAMJDetail(); 
            	  }
               //................................................// 
               	/////////////////////....T_Student's Marks Info(Roll No)....///////////////////////////////
                         	  
  	          	case UC_T_HOME_INFO: if ($_POST["action"]==ACT_T_HOME_INFO){ //for T_student Marks infomation home page
  	         	 		//echo "dddd";
							$ctl=new T_StudentMarksInfoController();
							return $ctl->renderT_StudentMarksHomePage();
							}    
  	             
  	         	case UC_T_STD_INFO: if ($_POST["action"]==ACT_T_STD_INFO){ //T_student Marks infomation
  	         	 			$ctl=new T_StudentMarksInfoController();
							return $ctl->renderT_StudentMarksInfo();
							}
				case UC_T_STD_DETAIL: if ($_POST["action"]==ACT_T_STD_DETAIL){ //T_student's Detail infomation (rollNo)
  	         	 			$ctl=new T_StudentMarksInfoController();
							return $ctl->renderT_StudentMarksDetailInfo1();
							}				
				case UC_ROLLNO_MARK_SEARCH: if ($_POST["action"]==ACT_ROLLNO_MARK_SEARCH){ //T_student marks information Searchbtn from Rollnno
	  	         	 			$ctl=new T_StudentMarksInfoController();
								return $ctl->renderT_StudentRollNoSearch();
								}
								
				/////////////////////....T_Student's Marks Info(Academic and Major)....///////////////////////////////
				
  	         	case UC_T_STD_INFO_AcMj: if ($_POST["action"]==ACT_T_STD_INFO_AcMj){ //retriving T_student Marks from infomation Major and academic
  	         	 			$ctl=new T_StudentMarksInfoController();
							return $ctl->renderT_StudentMarksInfo_AcMj();
							}
  	         	case UC_T_AcMj_SEARCH: if ($_POST["action"]==ACT_T_AcMj_SEARCH){ //retriving T_student Marks from infomation (Major and academic)
  	         			//	echo "checking of view 1 and 2";
  	         					$ctl=new T_StudentMarksInfoController();
								return $ctl->renderT_StudentMarksInfo_AcMjSearch($start_row);
							}	
  	               
  	        	case UC_T_STD_DETAIL_INFO: if ($_POST["action"]==ACT_T_STD_DETAIL_INFO){ //T_student's Detail infomation (Major and Academic)
  	        				//echo "<br>^^^^Student id is ->".$_POST["student_dtl_id"];
  	         	 			$ctl=new T_StudentMarksInfoController();
							return $ctl->renderT_StudentMarksDetailInfo2($start_row);
							}
  	          	case UC_T_STD_DETAIL_INFO: if ($_POST["action"]==ACT_T_STD_DETAIL_INFO){ //retriving T_student Marks from infomation (Major and academic)
  	         			//	echo "checking of view 1 and 2";
  	         					$ctl=new T_StudentMarksInfoController();
								return $ctl->renderT_StudentMarksInfo_AcMjSearch($start_row);
							}	
							
			/////////////////For Question upload/////////////////////////////////////
                
			  	         case UC_UPL: if ($_POST["action"]==ACT_Q_UPL){
			  	  	           		echo "1111111111";
			  	              $ctl=new TeacherUploadController();
			  	  	             return $ctl->renderTeacherSearch();   }        
  	  	     
  	  	                 
				  	  	           
				  	  	               case UC_T_EDT: if ($_POST["action"]==ACT_T_EDT){  //Question upload course and question choose
				  	               	     //echo "hhhh";	 	           		
				  	                     $ctl=new TeacherUploadController();
				  	  	                 return $ctl->renderT_QuestionEdit();   }
				  	  	                 
				  	                   case UC_UPD_QES: if ($_POST["action"]==ACT_T_UPD_QES){  echo "hhhh"; //Question upload major and academic confirm  	           		
				  	                     $ctl=new TeacherUploadController();
				  	  	                 return $ctl->renderT_QuestionConfirm();   }
				  	  	                 
			  	         			  case UC_T_UPD_CMF: if ($_POST["action"]==ACT_T_UPD_CMF){  	 
			  	  	                 			//echo "$$"; 	           		
			  	                    		 $ctl=new TeacherUploadController();
			  	  	                		 return $ctl->renderT_QuestionComplete();  
			  	  	                  }
			
				//////////////////////////////////////////////////////////////////////////  
				
                 case UC_STD_PF: if ($_POST["action"]==ACT_STD_PF){ //for student pass/fail from right menu
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFail();  						}

						
				case UC_T_STD_PF: if ($_POST["action"]==ACT_T_STD_PF){ //for student pass/fail to Roll number
					//echo "dddd";
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFailRoll(); }

				case UC_T_STD_PF_AcMj: if ($_POST["action"]==ACT_T_STD_PF_AcMj){ //for student pass/fail to Academic page
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFailAcademic(); }
						
				case UC_ROLLNO_PF_SEARCH: if ($_POST["action"]==ACT_ROLLNO_PF_SEARCH){ //for student pass/fail to Roll number search view
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFailRollNoSearch(); }

				case UC_ROLLNO_PF_BACK: if ($_POST["action"]==ACT_ROLLNO_PF_BACK){ //for student pass/fail to Roll number search view  to back
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFail(); }
						
				case UC_T_AcMj_PF_SEARCH: if ($_POST["action"]==ACT_T_AcMj_PF_SEARCH){ //for student pass/fail to academic search view
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFailAcademicSearch(); }
						
				case UC_T_STD_PF_AC_BACK: if ($_POST["action"]==ACT_T_STD_PF_AC_BACK){ //for student pass/fail to academic search view  to back
					$ctl=new StudentPassFailController();
					return $ctl->renderStudentPassFail(); }
			  ///////////////////////////////////////////////////////////////////////////////////////

					case UC_T_V_QUE: if ($_POST["action"]==ACT_T_V_QUE){  	//View Question Academic
					$ctl=new T_QuestionListController();
					return $ctl->renderT_QuestionList();   }

				case UC_T_V_QUE1: if ($_POST["action"]==ACT_T_V_QUE1){  	  	//View Question Search
					$ctl=new T_QuestionListController();
					return $ctl->renderTeacherQuestionList();   }



				case UC_T_Ques_Major: if ($_POST["action"]==ACT_T_Ques_Major){  //Question major to next
					$ctl=new T_QuestionListController();
					return $ctl->renderT_Question_Major_Qes();   }
					/////////////////////////////////////////////////////////////////////////////////////////
					
				case UC_UPD_EDT_QUES:if($_POST["action"]==ACT_UPD_EDT_QUES){
											$ctl =new UpdateQuestionController();
											return $ctl->renderUpdateEditQuestion();
										}
										if($_POST["action"]==ACT_UPD_EDT_CNF){
											$ctl =new UpdateQuestionController();
											return $ctl->renderUpdateEditConfirmQuestion();
										}
										if($_POST["action"]==ACT_UPD_EDT_CMP){
											$ctl =new UpdateQuestionController();
											return $ctl->renderUpdateEditCompleteQuestion();
										}

				case UC_CH_STATUS_QUES:if($_POST["action"]==ACT_CH_STATUS_QUES){
											$ctl =new UpdateQuestionController();
											return $ctl->renderChangeQuestionStatus();
										}
					
			  	  	                  
			  	  	                  
			  	  	                  
			  	  	                  
			  	 ////////////////////////////////////////////////////////// 	                  
			  	  	                  
					      
					   case UC_LOGOUT:if($_POST["action"]==ACT_LOGOUT_PAGE)
							{
								echo "here to login page!!!!";
								
								if (isset($_SESSION["teacher_role_id"]))
									unset($_SESSION["teacher_role_id"]);
								if (isset($_SESSION["staff_role_id"]))
									unset($_SESSION["staff_role_id"]);
								if (isset($_SESSION["teacher_id"]))
									unset($_SESSION["teacher_id"]);
								if (isset($_SESSION["staff_id"]))
									unset($_SESSION["staff_id"]);
									
									
									
								$ctl=new LoginController();
								return $ctl->renderLogin();
						
							}   
							
							///////////////////////
							
				case UC_STD_MARK_CALCULATE:if($_POST["action"]==ACT_STD_MARK_CALCULATE){					
											$ctl =new T_StudentMarksInfoController();
											return $ctl->renderCalculateMark();
										}
					      
		}
			
}
	
	
	
	
	
}