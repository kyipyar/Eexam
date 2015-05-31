<?php
class StudentPassFailView extends View{
	 public function __construct($title){
	 	parent:: __construct($title);
	 	
	 }
	 public function displayBody(){
	 	//echo "Student PAss / Fail View";
	 	?>
	 	
	 	<div id="left">
			<h1>Welcome to Teachers!</h1>	
            	<div class="text" align="center">Passed/Failed Student</div><br>
				<div class="text">  Please choose the following:<br> <br>             
					<ul>					
						<li>
							<form method="post">
								<input id="text" type="submit" id="stdLink" value="Search Student Pass/Fail Result with Roll No." name="btnS_PFRollNo">
								<input type="hidden" name="usecase" value="<?php UC_T_STD_PF  ?>">
								<input type="hidden" name="action" value="<?php ACT_T_STD_PF ?>">	
							</form>				 
						</li>					    
				
					<li>
						<form method="post">
						<input id="text" type="submit" id="stdLink" value="Student Pass/Fail Result by Academic and Major." name="btnS_PF_AcMj">
						<input type="hidden" name="usecase" value="<?php UC_T_STD_PF_AcMj?>">
						<input type="hidden" name="action" value="<?php ACT_T_STD_PF_AcMj ?>">
						
						</form>	
					</li>
				</ul>						
                </div>		
			</div>	  
	 	
<?php 	 }
}