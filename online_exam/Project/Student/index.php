<?php
//STD config
include 'config/define.php';
include 'config/config.php';

//STD  view
include 'view/view.php';
include 'view/StudentLoginView.php';
include 'view/StudentProfileView.php';
include 'view/ProfileConfirmView.php';
include 'view/StudentHomePageView.php';
include 'view/StdChangePwdView.php';
include 'view/sitExamMjrChoView.php';
include 'view/stdSittingExamView.php';
include 'view/stdFinishSitExamView.php';
include 'view/StudentUpdateProfileCompleteView.php';
include 'view/StudentUpdateProfileConfirmView.php';
include 'view/StudentUpdateProfileView.php';
include 'view/About_Us.php';
include 'view/Contact_Us.php';


//STD controller
include 'control/FrontController.php';
include 'control/StudentHomePageController.php';
include 'control/ProfileFillController.php';
include 'control/StudentSitExamController.php';
include 'control/UpdateProfileConfirmController.php';



//STD  MOdel
include 'model/DAO/DAO.php';
include 'model/DAO/StudentDao.php';

include 'model/entity/Student.php';


include 'control/_file_upload.php';

session_cache_limiter('none');
session_start();

 $control=new FrontController();
$page= $control->execute();
$page->display();
