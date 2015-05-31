<?php
class T_StudentMarksInfoController{
	public function renderT_StudentMarksHomePage(){
				return new T_StudentMarkHomeView(PT_T_STD_HOME);
				}
	
	/////////////////////...T_student's marks information(Roll No)...////////////////////////////

	public function renderT_StudentMarksInfo(){//student mark information from Roll No 
				return new T_StudentMarksView(PT_T_STD_INFO,"");
				}
			
	public function renderT_StudentRollNoSearch(){//student mark information from rollNo txtbox
				$txtRoll_No_Search=@$_POST["txtRoll_No_search"];
				$_SESSION['txtRoll_No_search']=$txtRoll_No_Search;
				$Mark=new T_StudentInfoDao();
				$MarkDetail_Info=$Mark->getT_StudentInfo($txtRoll_No_Search);				
								
				if(strlen($txtRoll_No_Search)==0 ){
					$error_msg["txtRoll_No_search"]=ERR_T_ROLLNO_NULL;
					return new T_StudentMarksView(PT_ERROR,$error_msg);	
					}
						
				return new T_StudentMarkInfoView1(PT_T_SMIV,$MarkDetail_Info);
				}
	
	public function renderT_StudentMarksDetailInfo1(){//Detail student Mark Information (roll No)
				$student_id=@$_POST["student_dtl_id"];
				$teacherdao=new T_StudentInfoDao();
				$student_list=$teacherdao->getStudentInformationDetailList($student_id);
				$student_mark=$teacherdao->getMarkAll($student_id);
				return new T_StudentMarkDetailInfoView_RollNo(PT_STD_DETAIL_INFO,$student_list,$student_mark);
				}

	//////////////////////....T_student's marks information(Academic and Major)....///////////////////////////////////

	public function renderT_StudentMarksDetailInfo2(){//Detail student Mark Information (Academic and Major)
				$student_id=@$_POST["student_dtl_id"];
				$teacherdao=new T_StudentInfoDao();
				$student_list=$teacherdao->getStudentInformationDetailList($student_id);
				$student_mark=$teacherdao->getMarkAll($student_id);
				
				return new T_StudentMarkDetailInfoView_ACMJ(PT_STD_DETAIL_INFO,$student_list,$student_mark);
				}
	
	public function renderT_StudentMarksInfo_AcMj(){//student's Mark info from Academic and Major
				$markInfodao=new T_StudentInfoDao();
				$MarkDetail_academic=$markInfodao->getT_Academic();
				$MarkDetail_major=$markInfodao->getT_Major();
						
				return new T_StudentMarksInfoView(PT_T_STD_INFO,$MarkDetail_academic,$MarkDetail_major);
				}
	
	public function renderT_StudentMarksInfo_AcMjSearch($start_row){//student's mark info from Search button
					
					$markInfodao=new T_StudentInfoDao();
					$MarkDetail_academic=$markInfodao->getT_Academic();
					$MarkDetail_major=$markInfodao->getT_Major();
					
					$academic=$_POST["academic"];
					$major=$_POST["major"];
					
					$error_msg=array();
					if(($academic==null) && ($major==null)){
						$error_msg['null']=Error_Null;
						return new T_StudentMarksInfoView(PT_ERROR,$MarkDetail_academic,$MarkDetail_major,$error_msg);
					}
					else{
						if($academic==null) $error_msg['Error_null_academic']=Error_One_Null;
						if($major==null) $error_msg['Error_null_major']=Error_One_Null; 
						}
						if(!empty($error_msg)){
						return new T_StudentMarksInfoView(PT_ERROR,$MarkDetail_academic,$MarkDetail_major,$error_msg);
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
								return new T_StudentMarksInfoView(PT_ERROR,$MarkDetail_academic,$MarkDetail_major,$error_msg);
								}
								else {// echo"hhhhhhh";
										$Mark=new T_StudentInfoDao();
										$MarkDetail_Info=$Mark->getT_FY_StudentInfo($academic,$major);
										/*if(empty($MarkDetail_Info)){
											
											$MarkDetail=$Mark->getT_FY_StudentInfoandFillResult($academic,$major);
											$totalmark=0;
											$flag=0;
											$exam_status='pass';
											foreach ($MarkDetail as $value)
											{
												$sid=$value['student_student_id'];
												$totalmark+=$value['marks'];
												if($flag==0){	
													if($value['marks']<50){
														$exam_status='Fail';
														$flag=1;
													}
												}											
											}
											//echo "~~~~~".$totalmark.$exam_status."~~~~~~";
											$Mark->saveTotalMarkandStatus($totalmark,$exam_status,$sid);
										$MarkDetail_Info=$Mark->getT_FY_StudentInfo($academic,$major,$start_row);
											
										}
										
										$noOfStudent=$Mark->getT_NoOfStudent();	*/
										return new T_StudentMarkInfoView2(PT_T_SMIV,$MarkDetail_academic,$MarkDetail_major, $MarkDetail_Info);
								}				
					}	
				public function renderCalculateMark(){
					$txtRoll_No_search=$_SESSION['txtRoll_No_search'];
					$MarkDetail_Info=new T_StudentInfoDao();
					$Std_idobj=$MarkDetail_Info->getT_StudentID($txtRoll_No_search);
					$Std_id=$Std_idobj[0]['student_id'];
					$tchstumarkinfo=new T_StudentInfoDao();					
					$MarkDetail=$tchstumarkinfo->getTotalMark($Std_id);
					/*echo "<pre>";
					print_r($MarkDetail);
					echo "</pre>";*/
					$flag=0;
					$status='Pass';
					$markarray=array();
					$i=0;
					$totalmark=0;
					
					foreach ($MarkDetail as $mark){
						$totalmark+=$mark['marks'];
						$markarray[$i++]=$mark['marks'];;
						 if ($flag==0)
						 {				 	
						 	if($mark['marks']<50){
						 		{
						 			$flag=1;
						 			$status='Fail';
						 		}
						 	}
						 }
						 
						
					}
					if($flag==0){
						for($k=0;$k<count($markarray);$k++)
						{
							if($markarray[$k]>=65) $status="Credit";
							else break;
						}
					
					}
					echo "total mark is $totalmark and exam is $status";
					$SaveMark=new T_StudentInfoDao();
					$SaveMark->saveTotalMarkandStatus($totalmark,$status,$Std_id);
					$teacherdao=new T_StudentInfoDao();
				    $student_list=$teacherdao->getStudentInformationDetailList($Std_id);
							
				return new T_StudentMarkDetailInfoView_ACMJ(PT_STD_DETAIL_INFO,$student_list);
					
				}								
}

	/////////////////////////////////////////////////////////////////////////////////////////////////////