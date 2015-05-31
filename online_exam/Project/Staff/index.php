<?php
include 'config/config.php';
include 'config/define.php';

//view
include 'view/view.php';
include 'view/HomePageView.php';
include 'view/TeacherHomePageView.php';
include 'view/StaffHomePageView.php';
include 'view/StudentRegisterationView.php';
include 'view/StudentRegisterConfirmView.php';
include 'view/StudentRegisterationCompleteView.php';
include 'view/UpdateProfileView.php';
include 'view/UpdateProfileLinkConfirmView.php';
include 'view/UpdateProfileLinkCompleteView.php';
//student pass or fail
include 'view/StdPassFailView.php';
include 'view/PassFailResultView.php';

//staff and teacher registration ..........
include 'view/StaffRegistrationView.php';
include 'view/StaffRegistrationConfirmView.php';
include 'view/StaffRegistrationCompleteView.php';

//student list .............
include 'view/Student_ListIHomeView.php';//StudentListHomeView
include 'view/Student_ListRollNoView.php';  //studentlist
include 'view/Student_ListRollNoSearchView.php';
include 'view/Student_ListRollNoDetailView.php';
include 'view/Student_ListAMJView.php';
include 'view/Student_ListAMJSearchView.php';
include 'view/Student_ListAMJDetailView.php';

//T_student's Mark Info
include 'view/T_StudentMarkHomeView.php';//T_student's Info Home 
include 'view/T_StudentMarksView.php';//T_student's Info rollno
include 'view/T_StudentMarkInfoView1.php';//T_student's Info (RollNo SearchBtn)
include 'view/T_StudentMarksInfoView.php';//T_student's Info academic and major
include 'view/T_StudentMarkInfoView2.php';//T_student's Info (Academic and major SearchBtn)
include 'view/T_StudentMarkDetailInfoView_RollNo.php';//T_student's Detail Information(rollno)
include 'view/T_StudentMarkDetailInfoView_ACMJ.php';//T_student's Detail information(Academic and major)


//pass/fail
include 'view/StudentPassFailView.php';//home
include 'view/StudentPassFailView1.php';//by Roll no
include 'view/StudentPassFailView2.php';//by Academic
include 'view/StudentPassFailRollNoSearchView.php'; //roll search view
include 'view/StudentPassFailAcademicSearchView.php';


//Question View
include 'view/TeacherQuestionView.php';
include 'view/TeacherQuestionListView.php';
include 'view/TeacherQuestionListShowView.php';
include 'view/UpdateQuestionEditView.php';
include 'view/UpdateQuestionEditConfirmView.php';
include 'view/UpdateQuestionEditCompleteView.php';
 

//control
include 'control/FrontController.php';
include 'control/StaffBrowseLinkController.php';
include 'control/LoginController.php';
include 'control/StudentRegisterLinkController.php';
include 'control/UpdateProfileLinkController.php';
include 'control/T_StudentMarksInfoController.php';//T_student's Information
include 'control/StdPassFailController.php';//for Student pass or fail
include 'control/StaffRegisterLinkController.php';//for staff and teacher registration
include 'control/StaffStudentListController.php';// for student list
include 'control/_file_upload.php';//photo upload

include 'control/StudentPassFailController.php'; //Pass/fail

include 'control/T_QuestionListController.php'; //Question View start
include 'control/UpdateQuestionController.php';

//model
include 'model/dao/DAO.php';
include 'model/dao/SteacherDao.php';
include 'model/dao/T_StudentInfoDao.php';//T_student's Information
include 'model/dao/StdPFDao.php';//......Student pass or fail...//
include 'model/dao/STaffTeacherDao.php';//.....staff and teacher registration......//
include 'model/dao/LoginNameDao.php';
include 'model/dao/StaffStudentDao.php';//.....for student list.......//

include 'model/dao/StudentpfDAO.php';//student Pass fail

//include 'model/dao/TeacherQuesDAO.php';//Teacher Question
include 'model/dao/QuestionUPDao.php';//Teacher Question update


include 'model/entity/StdLink.php';
include 'model/entity/stdLinkNew.php';
include 'model/entity/Teacher.php';
include 'model/entity/Student.php';
include 'model/entity/StaffTeacher.php';
include 'model/entity/Studentpf.php';//student pass fail
include 'model/entity/stdRnoNPwd.php';

include 'model/entity/TeacherQes.php';//Teacher Question
//include 'model/entity/QuestionUP.php'; //Question list

//QUESTION UPLOAD
//control
include 'control/TeacherUploadController.php';

//view
include 'view/T_QuestionCompleteView.php';
include 'view/T_QuestionConfirmView.php';
include 'view/T_QuestionEditView.php';
include 'view/TeacherQuestionSearchView.php';

//model
include 'model/dao/TeacherQuesDAO.php';
include 'model/entity/QuestionUP.php';


session_cache_limiter('none');
session_start();
$control = new FrontController();
$page=$control->execute();
$page->display();