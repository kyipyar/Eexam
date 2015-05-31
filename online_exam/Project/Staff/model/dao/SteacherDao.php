<?php
class SteacherDao extends DAO{    

	public function getTeacherRollbyId($teacher_roll_id){		
	if (@$_POST["loginName"]=="Teacher")
		$teacher_roll_id=1;
	if (@$_POST["loginName"]=="Staff") 
		$teacher_roll_id=2;
	
     $sql="SELECT * FROM teacher where teacher_roll_id=:teacher_roll_id";
     $this->openDB();
     $this->prepareQuery($sql);
     $this->bindQueryParam(":teacher_roll_id", $teacher_roll_id);
     
     $result=$this->executeQuery();
     return $result;     
     }    
     
     public function saveLinkStudent(){ 	
 		$name=$_SESSION["stdLink"]->getStdName();
 		$nrc=$_SESSION["stdLink"]->getNrcCode()."/".$_SESSION["stdLink"]->getNrcName()."(N)".$_SESSION["stdLink"]->getNrcNo();
 		$pwd="awp".mt_rand(100000,999999);
 				if($_SESSION["stdLink"]->getClass()=="First Year")
							    $rnoClass=1;
				if($_SESSION["stdLink"]->getClass()=="Second Year")
							    $rnoClass=2;
				if($_SESSION["stdLink"]->getClass()=="Third Year")
							    $rnoClass=3;
				if($_SESSION["stdLink"]->getMajor()=="Normal")
							   $rno=$rnoClass."CST";
				if($_SESSION["stdLink"]->getMajor()=="CS")
							   $rno=$rnoClass."CS";
				if($_SESSION["stdLink"]->getMajor()=="CT")	
							   $rno=$rnoClass."CT";
 		
 		if($rno=="1CST")
 		$sql="SELECT student_rollNo from student where student_rollNo like '%1CST%'";
 		if($rno=="2CS")
 		$sql="SELECT student_rollNo from student where student_rollNo like '%2CS%'";
 		if($rno=="2CT")
 		$sql="SELECT student_rollNo from student where student_rollNo like '%2CT%'";
 		if($rno=="3CS")
 		$sql="SELECT student_rollNo from student where student_rollNo like '%3CS%'";
 		if($rno=="3CT")
 		$sql="SELECT student_rollNo from student where student_rollNo like '%3CT%'";
 		
 	    $this->openDB();
     	$this->prepareQuery($sql);
     	$result=$this->executeQuery();
     	$RollNo=$rno."-".(sizeof($result)+1);
 		//echo $RollNo; 		
 		
        //$sql="insert into student values(null,:student_name,null,:student_pwd,:student_rollNo,null,null,null,null,null,:student_NRCno,null)";
 		$sql="insert into student values(null,:student_name,:student_pwd,:student_rollNo,null,null,null,null,null,:student_NRCno,null)";
        $this->openDB();
        $this->prepareQuery($sql);        
        $this->bindQueryParam(":student_name",$name);
        $this->bindQueryParam(":student_pwd", $pwd);
        $this->bindQueryParam(":student_rollNo",$RollNo);           
		$this->bindQueryParam(":student_NRCno", $nrc);    
        
        $result=$this->executeUpdate();   

        	  $class=$_SESSION["stdLink"]->getClass();
        	  //echo "## $class";
        	  if($class=="First Year") $acd_id=1;
        	  if ($class=="Second Year")$acd_id=2;
        	  if($class=="Third Year") $acd_id=3;
        	  /////////
        	  //echo "@@@ $acd_id";
        	  $sql2="select max(student_id) as 'last_id' from student";        	  
		        $this->prepareQuery($sql2);          
		        $this->beginTrans();
		        $result=$this->executeQuery();		       
        	 	$stdid=$result[0]['last_id'];
        	  
        	  
        	  //////////
			 $mjr_id=$_SESSION["stdLink"]->getMajor();
        		if($mjr_id=='Normal')$mjr_id=1;
        		elseif(($mjr_id=='CS') && ($acd_id==2))$mjr_id=2;
        		elseif(($mjr_id=='CT') && ($acd_id==2))$mjr_id=3;
        		elseif(($mjr_id=='CS') && ($acd_id==3))$mjr_id=4;
        		elseif(($mjr_id=='CT') && ($acd_id==3))$mjr_id=5;
        	echo " ~~~~~~~~$stdid ~~~~~~$acd_id~~~~~~~~~$mjr_id";
        	$sql1="insert into student_detail(student_detail_id,student_id,academic_id,major_id) values(null,:sid,:acdid,:mjrid)";
        	$this->openDB();
        	 $this->prepareQuery($sql1);        
	        $this->bindQueryParam(":sid",$stdid);
	        $this->bindQueryParam(":acdid", $acd_id);
	        $this->bindQueryParam(":mjrid",$mjr_id);        
			$result=$this->executeUpdate(); 
			/*echo "<pre>";
			print_r($result);
			echo "</pre>";   */
			$stdrawdata=new stdRnoNPwd();
			$stdrawdata->setstdPwd($pwd);
			$stdrawdata->setstdRno($RollNo);
			return $stdrawdata;
			   	
     }	
	
	//for update
	public function getTeacherById(){
		//$teacher_id=$_SESSION["staff_id"];
		
			
			$sql="select * from teacher where teacher_id=:teacher_id";
			
			$this->openDB();
			$this->prepareQuery($sql);
			$this->bindQueryParam(":teacher_id", @$teacher_id);
			
			
			if(isset($_SESSION["staff_id"]))
				$this->bindQueryParam(":teacher_id", $_SESSION["staff_id"]);
			elseif(isset($_SESSION["teacher_id"]))
				$this->bindQueryParam(":teacher_id", $_SESSION["teacher_id"]);
			
			
			
			$result=$this->executeQuery();
			print_r(@$teacher_id);echo"</pre>";
			
			return $result;
	}
	
	public function getRoleNameByTeacherId($troll){
		$sql="select teacher_roll from teacherroll where teacher_roll_id=:teacher_roll_id";		
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":teacher_roll_id", $troll);
			
		$result=$this->executeQuery();
		
		return @$result[0]["teacher_roll"];
	}
	
	public function updateTeacher(){
		//if (isset($_SESSION["teacher"]))
        	//$teacher=$_SESSION["teacher"];
       // else 
        	//$teacher=new Teacher();
        	
        	//echo "save update page";
			$teacher=$_SESSION["UpdateTStaff"];
			
			//echo "<br>Update Father's name is ->".$teacher->getTeacherFname();
			//echo "<br>Update Address is ->".$teacher->getTeacherAddress();
			//echo "<br>Update Phone no is ->".$teacher->getTeacherPhno();
			//echo "<br>Update Id no is ->".$teacher->getTeacherId();
			$sql="update teacher set teacher_fname=:teacher_fname,teacher_address=:teacher_address,teacher_phno=:teacher_phno where teacher_id=:teacher_id";
			
			$this->openDB();
			$this->prepareQuery($sql);
			
			$this->bindQueryParam(":teacher_fname", $teacher->getTeacherFname());
			$this->bindQueryParam(":teacher_address", $teacher->getTeacherAddress());
			$this->bindQueryParam(":teacher_phno", $teacher->getTeacherPhno());
			
			if(isset($_SESSION["staff_id"]))
				$this->bindQueryParam(":teacher_id", $_SESSION["staff_id"]);
			elseif(isset($_SESSION["teacher_id"]))
				$this->bindQueryParam(":teacher_id", $_SESSION["teacher_id"]);	
				
			$this->beginTrans();
			$result=$this->executeUpdate();
			if($result)
				$this->commitTrans();
			else 
				$this->rollbackTrans();
		}
}