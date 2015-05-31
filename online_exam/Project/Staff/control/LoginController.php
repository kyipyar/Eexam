<?php
class LoginController{
public function renderLogIn($comeback=null){
	if($comeback!=null){
		return new TeacherHomePageView();
	}
	else {
	if (@$_SESSION["teacher_role_id"])
		unset($_SESSION["teacher_role_id"]);
	if (@$_SESSION["staff_role_id"])
		unset($_SESSION["staff_role_id"]);
		
	if (isset($_SESSION["teacher_id"]))
		unset($_SESSION["teacher_id"]);
	if (isset($_SESSION["staff_id"]))
		unset($_SESSION["staff_id"]);
		
	if (isset($_SESSION["UpdateTStaff"]))
		unset($_SESSION["UpdateTStaff"]);

	if (@$_POST["loginName"]=="Teacher")
		$teacher_roll_id=1;
	if (@$_POST["loginName"]=="Staff") 
		$teacher_roll_id=2;
	
		
	$LinkTeacherId= new SteacherDao();
	$result=$LinkTeacherId->getTeacherRollbyId(@$teacher_roll_id);
	
	
	
	foreach ($result as $key =>$value)
	{
			if ($value["login_name"]==$_POST["userName"])
			 	if (@$value["password"]==$_POST["password"])
			 	
			 	 	 
			 	{ 	
			 		$teacher_id= $value['teacher_id'];
			 		$teacher_roll_id=$value["teacher_roll_id"];
			 		$teacher_name=$value["teacher_name"];
			        $condition=TRUE;}
			        
			    else 
			    	$condition=FALSE;
			 

	}		
	
 
	
		if (@$condition)
			if ($_POST["loginName"]=="Teacher")
			{$_SESSION["teacher_role_id"]=$teacher_roll_id;
			$_SESSION["teacher_id"]=$teacher_id;
			$_SESSION["teacher_name"]=$teacher_name;
			return new TeacherHomePageView(PT_HP);}
			
	    if (@$condition)
	    	if ($_POST["loginName"]=="Staff")
	    	{$_SESSION["staff_role_id"]=$teacher_roll_id;
			$_SESSION["staff_id"]=$teacher_id;
			$_SESSION["teacher_name"]=$teacher_name;
	    	return new StaffHomePageView(PT_HP);}
	
		if (!@$condition)    
		   if(@$_POST["loginName"]!="")
		    if (@$_POST["password"]!="")
		  	$err_msg["err"]=ERR_MSG;
			return new HomePageView(PT_HP,@$err_msg);
			
	
	
	
	

	}

	}
}