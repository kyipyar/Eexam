<?php
class StudentPassFailController{
	public function renderStudentPassFail(){
		return new StudentPassFailView(PT_T_STD_PF);
	}
	
     public function  renderStudentPassFailRoll(){
          return new StudentPassFailView1(PT_T_STD_Roll,"");
     }
     
     public function renderStudentPassFailAcademic(){
     	    $statusdao=new StudentpfDAO();
			$status_academic=$statusdao->getT_Academic();
			$status_major=$statusdao->getT_Major();			
			
         return new StudentPassFailView2(PT_T_STD_AcMj,$status_academic,$status_major);
     }
     
     
     public function renderStudentPassFailRollNoSearch(){
     		 echo" ddddddd";
          	 $txtRoll_No_Search=$_POST["txtRoll_No_search"]; 
			 $status=new StudentpfDAO();
			 $Std_pf=$status->getT_StudentStatus($txtRoll_No_Search);
		     print_r($Std_pf);
		     if(strlen($txtRoll_No_Search)=="" ){
				$error_msg["txtRoll_No_search"]=ERR_T_ROLLNO_NULL;
				return new StudentPassFailView1(PT_ERROR,$error_msg);	
				}
     	
        return new StudentPassFailRollNoSearchView(PT_T_STD_Roll_Search,$Std_pf);
     }
     
     public function renderStudentPassFailAcademicSearch(){  
      if   (!isset($_SESSION["academic"]))
         	 $_SESSION["academic"]=$_POST["academic"];
         	 
      if  ( !isset($_SESSION["major"]))						
			$_SESSION["major"]=$_POST["major"];
      
     	   // $academic=$_POST["academic"];
			//$major=$_POST["major"];
			
      
			
			//echo ".......kkklll".$academic;
			//echo "mmmmmmmm". $major;
			//echo "session of academic <br>".$_SESSION["academic"];
			//echo "kkkkkkk"; print_r($_SESSION["major"]);
		
     	    $statusdao=new StudentpfDAO();
			$status_academic=$statusdao->getT_Academic();
			$status_major=$statusdao->getT_Major();	
			
			/*echo "<pre>";
			print_r ($status_academic);
			echo "</pre>";
			echo "<pre>";
			print_r ($status_major);
			echo "</pre>";*/
			
			
		   // echo "mamamama";
			
		
			
			
			      /*  $error_msg=array();
					if(($academic==null) && ($major==null)){
						$error_msg['null']=Error_Null;
						return new StudentPassFailView2(PT_ERROR,"","",$error_msg);
					}
					else{
						if($academic==null) $error_msg['Error_null_academic']=Error_One_Null;
						if($major==null) $error_msg['Error_null_major']=Error_One_Null; 
						}
						if(!empty($error_msg)){
						return new StudentPassFailView2(PT_ERROR,"","",$error_msg);
						}
						else {
								if($academic=="FirstYear" && $major!="Normal")
									{$error_msg['FirstYear_error']=Error_For_All;}
									
								if($academic=="SecondYear" && $major=="Normal")
									{$error_msg['SecondYear_error']=Error_For_All;}
									
								if($academic=="ThirdYear" && $major=="Normal")
									{$error_msg['ThirdYear_error']=Error_For_All;}
								}		
								if(!empty($error_msg)){
								return new StudentPassFailView2(PT_ERROR,"","",$error_msg);
								}
								else {*/
			
			                           $status=new StudentpfDAO();
						              // $student_pf_status=$status->getT_Studentpf($academic,$major);
						               $student_pf_status=$status->getT_Studentpf($_SESSION["academic"],$_SESSION["major"]);
						               //echo "std pass fail status";
						              //echo "<pre>";
						              // print_r($student_pf_status);
						              // echo "</pre>";
			
								return new StudentPassFailAcademicSearchView(PT_T_STD_Academic_Search,$status_academic,$status_major, $student_pf_status);
						
     	       
			}		
}	      
     
     
     
     
      
	
						   									
							
     	

					    
						
						
		