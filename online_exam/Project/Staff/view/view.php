<?php
abstract class View{
	
	  public function __construct(){
	  	//$this->title=$title;
	  }
	  
	  function displayHeader(){	  		  
	  		  //include 'header.php';	?>				
				  	<head>
					<meta http-equiv="content-type" content="text/html; charset=utf-8" />
					<title>Online Exam </title>
					<meta name="keywords" content="" />
					<meta name="description" content="" />
					<link href="css/styles.css" rel="stylesheet" type="text/css" />
					<div id="bg">
					<div id="main">				
						<div id="header">	
							<div id="logo"><a href="#">Online Exam</a>
								<h2><a href="http://www.metamorphozis.com/" id="metamorph">Design by awp3b</a></h2></div>
						</div>
					
							
						
			<?php 	    
			
			
			
						if(isset($_SESSION["teacher_role_id"]) )
							//if (!isset($_SESSION["staff_role_id"]))
							    include 'StdTopMenuAferLogin.php';
						
				 		if (isset($_SESSION["staff_role_id"]))
				 			//if(!isset($_SESSION["teacher_role_id"]))
								include 'StdTopMenuAferLogin.php';
							
												
						if (!isset($_SESSION["staff_role_id"]))
								if (!isset($_SESSION["teacher_role_id"]))
							
					  			 include 'StdTopMenuBeforeLogin.php';
					  		
					  		
					  		
					  		?>
					  		
					  		<div id='content_bg'>	
					  			<div id='content'>
					 		<?php // to check out student, staff, teacher
					 		
					 		
					 			if (isset($_SESSION["teacher_role_id"]))
					 			   	include 'rightMenuTeacher.php';
	  						
							    if(isset($_SESSION["staff_role_id"]))
										  				
									include 'rightMenuStaff.php';
						
			
					  			
	   }
		abstract protected function displayBody();
	
		function displayFooter(){	
	?>
							
							<?php
							echo "</div>";
							 include 'footer.php';
							echo "</div></div></div>";
							?>
			</html>
	  	<?php  
	  }
	  public function display(){
	  	 $this->displayHeader();
	  	 $this->displayBody();
	  	 $this->displayFooter();
	  }
}    
    
