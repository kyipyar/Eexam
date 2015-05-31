<?php
class StaffHomePageView extends View{

public function __construct($title){
		parent::__construct($title);
	}
	
	public function displayBody(){
		
	
		
	?>
            
          	<div id="left">
			<h1>Welcome <?php echo $_SESSION["teacher_name"]; ?>!</h1><br>	
            	<center><div class="post">posted by awp3b</div>	</center>
				<div class="text1">
				<br><br><br><br><br><br><br>
				<p> You are allowed to use this page only if you want to the following conditions:</p><br><br>
                <p>This page includes student registeration function,staff profile edition, student list viewing and viewing of student examination results.If you want to register for new students, you want click link of student 
                   registeration.</p><br/>
			    <p>In order to update your profile data you can update your profile using update profile link. Moreover, this page consist of chances for viewing of student lists and result for each academic and major <br>
			       
			    
 				<br />
			      The Page Design : 2014 </p>       </div>
		   
			</div>
			
			   
				            
	   

<?php }
}