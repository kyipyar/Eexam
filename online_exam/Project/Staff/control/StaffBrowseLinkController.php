<?php
class StaffBrowseLinkController {

	public function renderStaffLink(){
	
		if (isset($_SESSION["staff_role_id"]))
		return new StaffHomePageView(PT_ST_HP);
		
		if (isset($_SESSION["teacher_role_id"]))
		return new TeacherHomePageView(PT_TEA_HP);
	
	}

}