<?php
class StaffStudentListController{
   public function renderStaffStudentListHome(){
 	
 	    return new Student_ListHomeView(PT_ST_STD_HOME);
 	 }	
 
   public function renderStaffStudentListRollNo(){
 	
 	
 	  return new Student_ListRollNoView(PT_ST_STD_ROLLNUM);
 	
    }	
 
    public function renderStaffStudentListRollNoSearch(){
          
  		 $roll_number=@$_POST["txtRollnumbersearch"];//database  	    	 
 	    $studlist=new StaffStudentDao();
 	    $stud_info=$studlist->getS_StudentlistInfo($roll_number);
 	       
 	    //for error
  		  if (strlen($roll_number)==0){
 	         $error_msg["roll_number"]=ERR_ST_ROLLNUM_NULL;
 	      
 	       return new  Student_ListRollNoView(PT_ST_STD_ROLLNUM,$error_msg);     ;
 	    } 	    
 	    
 	   return new Student_ListRollNoSearchView(PT_ST_STD_SEARCH,$stud_info);
  	
     }
     public function renderStaffStudentListRollNoDetail(){    //rollno detail
     	 $stud_id=@$_POST["student_ST_id"];
     	 $slistdetail=new StaffStudentDao();
     	 $s_detail=$slistdetail->getS_Studentlistdetail($stud_id);     	
     	
       return new 	Student_ListRollNoDetailView(PT_ST_STD_DETAIL,$s_detail);
     	
     	
     }
     public function renderStaffStudentListAMJ(){      //academic and major 
     	     $studlist=new StaffStudentDao();
			$studlist_academic=$studlist->getST_Academic();
			$studlist_major=$studlist->getST_Major();
     	
     	return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major);
     	
     	
     	
     }
     public function renderStaffStudentListAMJSearch(){
     	  $studlist=new StaffStudentDao();
			$studlist_academic=$studlist->getST_Academic();
			$studlist_major=$studlist->getST_Major();
     	
			$studacademic=@$_POST["academic"];
			$studmajor=@$_POST["major"];
			
			$error_msg=array();	
		   if(($studacademic==null) && ($studmajor==null)){
			    $error_msg['acad_maj']=ERR_ACAMA_NULL;
			    return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
		        }
		   elseif(($studacademic==null) &&($studmajor!=null)) 
		        {
					$error_msg["acd_err"]=ERR_ST_AMJA_NULL;
				    return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
				}
		   elseif (($studacademic!=null)&& ($studmajor==null))
				{
					 $error_msg["maj_err"]=ERR_ST_AMJM_NULL;
				     return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
				}
		       elseif (($studacademic=="FirstYear")&& ($studmajor=="CT"))
		       {
		       	   $error_msg["acmaj_err"]=ERR_ST_FCT_NULL;
		       	   return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
		       } 
		       elseif (($studacademic=="FirstYear")&&($studmajor=="CS"))
		       {
		       	   $error_msg["acamajfcs_err"]=ERR_ST_FCS_NULL;
		       	   return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
		       	
		       }
		       elseif (($studacademic=="SecondYear")&&($studmajor=="Normal"))
		       {
		       	    $error_msg["acmajsn_err"]=ERR_ST_SN_NULL;
		       	   return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
		       }
		       elseif (($studacademic=="ThirdYear")&&($studmajor=="Normal"))
		       {
		       	     $error_msg["acmajtn_err"]=ERR_ST_TN_NULL;
		       	   return new Student_ListAMJView(PT_ST_STD_AMJ,$studlist_academic,$studlist_major,$error_msg);
		       }
		      else{
	
                  $studac_maj=new StaffStudentDao();
		         $studlistac_maj=$studac_maj->getST_StudentlistAcdMaj($studacademic,$studmajor);
			
			       return new Student_ListAMJSearchView(PT_ST_STD_AMJSEARCH,$studlist_academic,$studlist_major,$studlistac_maj);
		      }
     }
     
     public function renderStaffStudentListAMJDetail(){     	
     	   $stud_amj_id=@$_POST["student_ST_amj_id"];
     	 $amjlistdetail=new StaffStudentDao();
     	 $s_amjdetail=$amjlistdetail->getS_Studentlistdetail($stud_amj_id);
     	 return new Student_ListAMJDetailView(PT_ST_STD_AMJDETAIL,$s_amjdetail); 
     	
     }   
}