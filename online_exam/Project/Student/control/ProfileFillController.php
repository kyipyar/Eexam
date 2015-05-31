<?php
class ProfileFillController{
	
	public function renderProfileFill($comeback=null){			
		if($comeback==null)
			{
			$dateofbirth=$_POST["txtdob"];
		   	$address=$_POST["txtaddress"];
		   	$phno=$_POST["txtpno"];
		    $email=$_POST["txtemail"];
		  	$fathername=$_POST["txtfname"];		
			}	
			else {							
				$dateofbirth=$_SESSION['student']->getStudentDateOfBirth();
				//$dateofbirth=null;
				$address=$_SESSION['student']->getStudentAddress();
				$phno=$_SESSION['student']->getStudentPhno();
				$email=$_SESSION['student']->getStudentEmail();
				$fathername=$_SESSION['student']->getStudentFatherName();			
			}
			$std=new Student();	
			$std->setStudentId($_SESSION["student"]->getStudentId());			
			$std->setStudentName($_SESSION["student"]->getStudentName());
			$std->setStudentRollNo($_SESSION["student"]->getStudentRollNo());
			$std->setStudentNRCno($_SESSION["student"]->getStudentNRCno());
			$std->setStudentPhoto($_SESSION["student"]->getStudentPhoto());
			$std->setStudentDateOfBirth($dateofbirth);
			$std->setStudentAddress($address);
			$std->setStudentPhno($phno);
			$std->setStudentEmail($email);
			$std->setStudentFatherName($fathername);	
			$std->setStudentPwd($_SESSION["student"]->getStudentPwd());
		    $_SESSION["student"]=$std;	
		  // echo "$dateofbirth is your dob";
	   	if( (strlen($dateofbirth)==0) && (strlen($address)==0) && (strlen($phno)==0)  && (strlen($fathername)==0) && (strlen($photo)==0))
	   	{
	   		$error_msg["all"]=ERR_ALL_NULL;
	   	
	   	}
		else{			
				if (strlen($dateofbirth)==0){				
					$error_msg["dob"]=ERR_DOB_NULL;		   			
				}
				else {//echo "checking DOB";			
				        $curdate=getdate();
						$year=$curdate['year'];$month=$curdate['mon'];$day=$curdate['mday'];
						$dd=$year.'-'.$month.'-'.$day;							
						if(($dd-$dateofbirth)<=16)
						{ echo "invalid dob";
							$error_msg["dobinvalid"]=ERR_DATEOFBIRD_NULL_NOT_AGE;
				           return new StudentProfileView($error_msg);
						}	
				}
			
			
			if (strlen($phno)==0){
				$error_msg["phno"]=ERR_PNO_NULL;
	   			
			}
			if (strlen($fathername)==0){
				$error_msg["fname"]=ERR_FATHERNAME_NULL;	   			
			
			}
			
			
	   	}
	   	if(!empty($error_msg))
	   	{	   
			return new StudentProfileView($error_msg);
	   	}
		else {	
			return  new ProfileConfirmView();
		}	
		
	
		
	}
	
	public function renderProfileFillfromConfirm(){
		
			$dateofbirth=$_POST["txtdob"];
		   	$address=$_POST["txtaddress"];
		   	$phno=$_POST["txtpno"];
		    $email=$_POST["txtemail"];
		  	$fathername=$_POST["txtfname"];		
		  					
			$std=new Student();	
			$std->setStudentId($_SESSION["student"]->getStudentId());			
			$std->setStudentName($_SESSION["student"]->getStudentName());
			$std->setStudentRollNo($_SESSION["student"]->getStudentRollNo());
			$std->setStudentNRCno($_SESSION["student"]->getStudentNRCno());
			$std->setStudentPhoto($_SESSION["student"]->getStudentPhoto());
			$std->setStudentDateOfBirth($dateofbirth);
			$std->setStudentAddress($address);
			$std->setStudentPhno($phno);
			$std->setStudentEmail($email);
			$std->setStudentFatherName($fathername);	
			$std->setStudentPwd($_SESSION["student"]->getStudentPwd());
		    $_SESSION["student"]=$std;	
		    
		    if( (strlen($dateofbirth)==0) && (strlen($address)==0) && (strlen($phno)==0)  && (strlen($fathername)==0) && (strlen($photo)==0))
	   		{
	   		$error_msg["all"]=ERR_ALL_NULL;
	   	
	   		}
			else{			
			if (strlen($dateofbirth)==0){				
				$error_msg["dob"]=ERR_DOB_NULL;
	   			
			}
			
			
			if (strlen($phno)==0){
				$error_msg["phno"]=ERR_PNO_NULL;
	   			
			}
			if (strlen($fathername)==0){
				$error_msg["fname"]=ERR_FATHERNAME_NULL;	   			
			
			}			
			
	   	}
	   	if(!empty($error_msg))
	   	{	 
			return new StudentProfileView($error_msg);
	   	}
		else {	
			
			return  new ProfileConfirmView();
		}	
		   
		
	}
		
	public function renderStudentPhotoUpload(){
		$photoupload=new _file_upload();
		//$phtopath=$photoupload->store_uploaded_file("upload","/opt/lampp/htdocs/phpworkspace/Student1/images/");
		$phtopath=$photoupload->store_uploaded_file("upload","photos/");
		$arr_PhotoPath=array();
		$arr_PhotoPath=explode('/',$phtopath);
		$i=count($arr_PhotoPath)-1;		
		$photoname=$arr_PhotoPath[$i];				
		$Student=new Student();
		$Student->setStudentPhoto($photoname);
		$Student->setStudentId($_SESSION["student"]->getStudentId());	
		$Student->setStudentName($_SESSION['student']->getStudentName());
		$Student->setStudentNRCno($_SESSION['student']->getStudentNRCno());
		$Student->setStudentRollNo($_SESSION['student']->getStudentRollNo());
		$Student->setStudentPwd($_SESSION["student"]->getStudentPwd());
		$_SESSION["student"]=$Student;			
		return new StudentProfileView();
	}
	public function renderProfileFillSuccess(){ 
     $linkdao=new StudentDao();
	  $linkdao->ProfileStudentSaveLink();
	  if(isset($_SESSION['newuser']))	{
	  		unset($_SESSION['newuser']);
	  }
	return  new StudentHomePageView();
		
	}
	public function renderChangePassword(){
		$pwd=$_SESSION['student']->getStudentPwd();		
		return new StdChangePwdView($pwd);
	}
	public function renderChangePasswordSuccess(){
		$pwd=$_POST['pwd'];
		$cur_pwd=$_POST['txtcurpwd'];
		$new_pwd=$_POST['txtnewpwd'];
		$cfnew_pwd=$_POST['txtcfnewpwd'];
		
		$error_msg_pwd=array();
		if((strlen($cfnew_pwd)==0) && (strlen($cur_pwd)==0) && (strlen($new_pwd)==0)){
			$error_msg_pwd["all"]=ERR_ALL_NULL;			
		}
		else
		{
			if(strlen($cur_pwd)==0){
   			$error_msg_pwd["pwd"]=ERR_CUR_PWD_NULL;
   			}
   				   			
			if (strlen($new_pwd)==0){
				$error_msg_pwd["cpwd"]=ERR_PWD_NULL;
	   			
			}
			if (strlen($cfnew_pwd)==0){
				$error_msg_pwd["cfpwd"]=ERR_CNPWD_NULL;
	   			
			}
			
		}
		if(!empty($error_msg_pwd))
		 return new StdChangePwdView($pwd,$error_msg_pwd);
		 else
		 { if($pwd!=$cur_pwd)
				$error_msg_pwd["notMatch"]=ERR_MATCH;
			if($new_pwd!=$cfnew_pwd)
					$error_msg_pwd["notnewMatch"]=ERR_NEW_MATCH;	
   			if((strlen($new_pwd)<5) || (strlen($pwd)>9))
				$error_msg_pwd["pwdwrong"]=ERR_PWD_CODE;			
   				
		 }
		 if(!empty($error_msg_pwd))
		  	return new StdChangePwdView($pwd,$error_msg_pwd);
		 else {
		 	$stddao=new StudentDao();
		 	$stddao->chgStdPwd($new_pwd);
		 	return new StudentHomePageView();
		 }
		
	}	
	
}
