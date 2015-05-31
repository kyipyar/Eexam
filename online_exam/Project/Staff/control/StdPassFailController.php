<?php
class StdPassFailController{
	public function studentPassFail(){
		
		$StdPFDao=new StdPFDao();
		$academic=$StdPFDao->getAcademic();
		$_SESSION["Allacademic"]=$academic;
		
		
		
		return new StdPassFailView(PT_STD_PF);
	}
	
	public function studentPassFailResult($previous=NULL){
		
		$academic=@$_POST["academic"];
		$major=@$_POST["major"];
		
		
		if (isset($_SESSION["studentList"]))
		$studentList=$_SESSION["studentList"];
		
		else
		
		{
			
			$StdPFDao= new StdPFDao();
			$studentList=$StdPFDao->getStudentList($academic,$major);
		
		    $_SESSION["studentList"]=$studentList;}
		
				
		/////////////////////for paging////////
		
		
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } 
		
		if(!isset($_SESSION['page'])){
			
				$page=0;
				$_SESSION['page']=$page;
		}
		if($previous!=null)
		{
			$page=$_SESSION['page'];
			$page--;
			$_SESSION['page']=$page;
			$_SESSION['no']-=6;
		}
		else{
			$page=$_SESSION['page'];
			$page++;
			$_SESSION['page']=$page;
		}
		
		
		$totalrow=count($_SESSION["studentList"]);		
		$maxpage=ceil($totalrow/5); // total page
		if(@$page<1) $page=1;
		if(@$page>$maxpage) $page=$maxpage;
		$start_from = ($page-1) * 5;
		
		///////////////////
		
		
				
		$rno=substr(@$studentList[0]['student_rollNo'], 0,4);
		
		
		$StdPFDao= new StdPFDao();
		$studentListLimit=$StdPFDao->getStudentListLimit($rno,$start_from);
		
				
		   if(@$_POST["academic"]=="FirstYear")
  				if ($_POST["major"]!="Normal")
				  	$error_msg["err"]=PF_ERR_MSG;
  					
			if(@$_POST["academic"]=="SecondYear")
  				if ($_POST["major"]!="CS" && $_POST["major"]!="CT" )
				  	$error_msg["err"]=PF_ERR_MSG;	
				  	
			if(@$_POST["academic"]=="ThirdYear")
  				if ($_POST["major"]!="CS" && $_POST["major"]!="CT")
				  	$error_msg["err"]=PF_ERR_MSG;		
 			

			if(empty($error_msg))	  
				  	return new PassFailResultView(PT_STD_PF,$studentListLimit,$maxpage);
			else return new StdPassFailView(PT_STD_PF,$error_msg);
		
		 
		    
	}
	
	
}




