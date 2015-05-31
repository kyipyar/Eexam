<?php
abstract class View{
	//private $title;
	  public function __construct(){
	 	//$this->title=$title;
	  }
	  
	  function displayHeader(){	  		  
	  		//include 'header.php';	?>
<html>
<head>
	<title>Online Exam </title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="./js/confirm.js"></script>
  
</head>
<body>
	<div id="bg">
		<div id="main">				
			<div id="header">	
				<div id="logo"><a href="#">Online Exam</a>
					<h2><a href="http://www.metamorphozis.com/" id="metamorph">Design by awp3b</a></h2>
				</div>
			</div>
						
	  	
		<?php 	
			if(isset($_SESSION['student']))
			{
	  			//echo "session alive";
	  			include 'StdTopMenuAferLogin.php';
			}
			elseif (!isset($_SESSION["student"]))
	  		//else
	  		{
	  			//echo "session destroyed";
	  			include 'StdTopMenuBeforeLogin.php';
	  		}?>
	  		<div id='content_bg'>	
	  			<div id='content'>
	 		<?php // to check out student, staff, teacher
	 		
			if(isset($_SESSION['student']))
			{	
				if(!isset($_SESSION['newuser']))		  				
					include 'rightMenuStudent.php';
			}
			elseif(!isset($_SESSION['student']))
			{					  				
				include 'StdLogin.php';
			}
		}
		abstract protected function displayBody();
			
		function displayFooter(){?>	
					</div>
				<?php include 'footer.php';?>
				</div>
			</div>
		</div>
	</body>	
</html>
	  	<?php  
	  }
	  public function display(){
	  	 $this->displayHeader();
	  	 $this->displayBody();
	  	 $this->displayFooter();
	  }
}    
    