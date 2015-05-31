<?php
class StudentRegisterLinkController{

public function renderStudentRegisterLink(){
	
   				
	
	
	return new StudentRegisterationView(PT_STD_REG);

}


public function renderStudentRegisterConfirm(){
	
	
			  $stdName=$_POST["StdName"];
			  $nrcCode=$_POST["nrc_code"];
			  $nrcName=$_POST["nrcName"];
			  $nrcNo=$_POST["nrcNo"];
			  $gender=@$_POST["gender"];
			  $class=$_POST["class"];
			  $major=@$_POST["major"];
			  
			  	 
			  
			  $stdLink=new StdLink();
			 // $stdLink->setLinkId($std_id);
			  $stdLink->setStdName($stdName);
			  $stdLink->setNrcCode($nrcCode);
			  $stdLink->setNrcName($nrcName);
			  $stdLink->setNrcNo($nrcNo);
			  $stdLink->setGender($gender);
			  $stdLink->setClass(@$class);
			  $stdLink->setMajor($major);
			  
			  
			  $_SESSION["stdLink"]=$stdLink;
			  
		
			   
	   
			 
			  
		//...................ERROR CHECKING......................// 
	 		
		$error_msg=array();
		
		    if(strlen($stdName)==0)
						 $error_msg["name"]=ER_NAME_NULL;
						  
						  
			if(strlen($nrcCode)==0)
					  	$error_msg["nrc"]=ER_NRC_NULL;
						 
						  
			if(strlen($nrcName)==0)
					  	 $error_msg["nrc"]=ER_NRC_NULL;
					  	 
			if(strlen($nrcName)>7)
					  	 $error_msg["nrc"]=ER_NRC_NULL;
					  	 
		    if(!preg_match("/[^0-9]/",$nrcName))
		    			 $error_msg["nrc"]=ER_NRC_NULL;
					  	 
			if(strlen($nrcNo)==0)
					  	$error_msg["nrc"]=ER_NRC_NULL;
					  	
			if(preg_match("/[^0-9]/",$nrcNo))
		    			 $error_msg["nrc"]=ER_NRC_NULL;
					  	
			if(strlen($nrcNo)>6)
					  	$error_msg["nrc"]=ER_NRC_NULL;
					  	

			if(strlen($gender)==0)
					  	$error_msg["gender"]=ER_GD_NULL;
						

			if(strlen($class)==0)
					  	$error_msg["class"]=ER_CL_NULL;
					  	
			if(strlen($major)==0)
					 	 $error_msg["major"]=ER_MJ_NULL;
					 
			if($class=="choose..")
						$error_msg["class"]=ER_CL_NULL;
						
			if($major=="choose..")
						$error_msg["major"]=ER_MJ_NULL;	
				  
			 		 
				  
				  //checking class and major
  			if(@$class=="First Year")
  				if ($major!="Normal")
				  	$error_msg["major"]=ER_MJ_NULL;
  					
					
 			if(@$class=="Second Year")
				  {if ($major!="CS" && $major!="CT")
				  		 $error_msg["major"]=ER_MJ_NULL; } 
			
 			if(@$class=="Third Year")
				  {if ($major!="CS" && $major!="CT")
				  	$error_msg["major"]=ER_MJ_NULL;
						  
				  }

			if(empty($error_msg))	  
				  	return new StudentRegisterConfirmView(PT_STD_CNF);
			else return new StudentRegisterationView(PT_STD_REG,$error_msg);
	
  }



	public function renderStudentRegisterComplete(){
		
		 	 
				
	  $steacherDao=new SteacherDao();
	 $stdrawdata=new stdRnoNPwd();
	 $stdrawdata=$steacherDao->saveLinkStudent();	
	  unset($_SESSION["stdLink"]);
		return new StudentRegisterationCompleteView(PT_STD_CMP,$stdrawdata);
		
	}


}

