<?php
class StaffRegisterLinkController{
	
public function renderTeacherStaffLogin(){
	
	return new TeacherStaffLoginView(PT_ST_LOG);
	
}	

public function renderStaffHomePage(){
	
	
	return new StaffHomePageView(PT_STA_HOP);	
}
public function renderStaffPhotoUpload(){
$photoupload=new _file_upload();
	$phtopath=$photoupload->store_uploaded_file("upload","images/");
      //  $phtopath=$photoupload->store_uploaded_file("upload","images/");
	    $arr_PhotoPath=array();
		$arr_PhotoPath=explode('/',$phtopath);
		$i=count($arr_PhotoPath)-1;		
		$photo=$arr_PhotoPath[$i];	
		
		$staff=new StaffTeacher();
		$staff->setTeacherPhoto($photo);
	    $_SESSION["teacher"]=$staff;		
	return new StaffRegistrationView(PT_SREG_EDT);
	
	
	
}
	
public function  renderStaffRegisterEdit(){

	
	return new StaffRegistrationView(PT_SREG_EDT);
	
}
public function renderStaffRegisterConfirm(){	
	$nrc=@$_POST["nrc_code"]."/".@$_POST["nrcName"]."(N)".@$_POST["nrcNo"];  //nrc
	$nrccode=@$_POST["nrc_code"];
	$nrcname=@$_POST["nrcName"];
	$nrcno=@$_POST["nrcNo"];
	$gender=@$_POST["sgender"];
	$role=$_POST["role"];///staff role
	$name=$_POST["staffname"];   // name
	$dob=$_POST["dob"];      //dob
	$address=@$_POST["txtaddress"];   //address
	$fname=@$_POST["fname"];
	$phone=@$_POST["phonum"];	
	$photo=@$_SESSION["teacher"]->getTeacherPhoto();
	
	if($role=='staff')
	  { 
	  	$_SESSION['roles']=2;
	   $login_name="staff".mt_rand(10,1000);  //for login name
	   $loginNameDao=new LoginNameDao();
	   $result=$loginNameDao->checkLoginName($login_name);
	  while (isset($SESSION["staff"]))
	   {
	      $login_name="staff".mt_rand(10, 1000);
	      $result=$loginNameDao->checkLoginName($login_name);	
	    }		
	  }
	else 
	{
		$_SESSION['roles']=1;
		$login_name="teach".mt_rand(10,1000);  //for login name
	    $loginNameDao=new LoginNameDao();
	    $result=$loginNameDao->checkLoginName($login_name);
	    while (isset($SESSION["teacher"]))
	    {
	        $login_name="teach".mt_rand(10, 1000);
	        $result=$loginNameDao->checkLoginName($login_name);	
	    }
	}
	
	if($role=='staff')
	{
		$pwd="st".mt_rand(10, 100000);   //for login password
	}
	else 
	{
		$pwd="te".mt_rand(10, 100000);   //for login password
	}
			
	$staff=new StaffTeacher();
	
	$staff->setTeacherNrcno($nrccode);
	$staff->setTeacherNrcname($nrcname);
	$staff->setTeacherNrcnrcsel($nrcno);
	$staff->setTeacherName($name);
	
	
	$staff->setTeacherNrc($nrc);
	$staff->setTeacherDob($dob);
	$staff->setTeacherFname($fname);
	$staff->setTeacherGender($gender);
	$staff->setTeacherAddress($address);
	$staff->setTeacherPhno($phone);
	
	$staff->setTeacherPhoto($photo);
	
	
	$staff->setTeacherlogin_name($login_name); //set login name
	$staff->setTeacherloginpassword($pwd);     //set login password
	
	@$_SESSION["teacher"]=$staff;   //OBJ TO SESSION
	
	
	//for error message
	
	
	$error_msg=array();
	
   if(strlen($name)==0)
		{	$error_msg["staffname"]=ERR_STAFFNAME_NULL;
			
		}
		
 
		
  if( strlen($nrcname)<3)
		{	$error_msg["nrcName"]=ERR_NRCNAME_NULL;
			
		}

   if(!preg_match("/[^0-9]/",$nrcname))
		{	$error_msg["nrcName"]=ERR_NRCNAME_NULL;
		}
		
	if( strlen($nrcno)<6)
		{	$error_msg["nrcNo"]=ERR_NRCNUMBER_NULL;
		}	
		
	if(preg_match("/[^0-9]/",$nrcno))
		{	$error_msg["nrcNo"]=ERR_NRCNUMBER_NULL;
		}
		
    /*if(preg_match("/[^0-9]/",$dob))
		 {
			$error_msg["dob"]=ERR_DATEOFBIRD_NULL;
		  }*/
    if(strlen($dob)==0)
		{	$error_msg["dob"]=ERR_DATEOFBIRD_NULL;
		}
		else{
			        $curdate=getdate();
					$year=$curdate['year'];$month=$curdate['mon'];$day=$curdate['mday'];
					$dd=$year.'-'.$month.'-'.$day;							
					if(($dd-$dob)<=20)
					{
						$error_msg["dob"]=ERR_DATEOFBIRD_NULL;
					}					
			
			
		}
		
		
		
    if(strlen($fname)==0)
		{	$error_msg["fname"]=ERR_FATHERNAME_NULL;
		}
    if(strlen($gender)==0)
		{	$error_msg["sgender"]=ERR_GENDER_NULL;
		}	
	
    
		
	if(strlen($photo)==0)
		{	$error_msg["photo"]=ERR_PHOTO_NULL;
		}
		
	if(strlen($address)==0)
		{	$error_msg["txtaddress"]=ERR_ADDRESS_NULL;
		}
	
	if (empty($error_msg))	
		return new StaffRegistrationConfirmView(PT_SREG_CNF);
	else 
		return new StaffRegistrationView(PT_SREG_EDT,$error_msg);
	
	
	
	
	
}
public function renderStaffRegisterComplete(){
	
	$passw=@$_POST["passw"];
	$login=@$_POST["login"];
	
	$staffdao=new STaffTeacherDao();
	$staffdao->saveTeacherStaff();	
	if(isset($_SESSION["teacher"]))
		unset($_SESSION["teacher"]);
   return new StaffRegistrationCompleteView(PT_SREG_CMP,$passw,$login);
	
}
}