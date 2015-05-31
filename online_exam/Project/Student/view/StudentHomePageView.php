<?php
class StudentHomePageView extends View{
	
	public  function __construct(){
		parent::__construct();
		
	}
	public function displayBody(){				 
		?>				
          	<div id="left">
			<h1> Welcome, <?php echo $_SESSION['student']->getStudentName();?></h1>
				<div class="text">
                <p>Now you can enjoy our examination!!!!<br />
                <br />
			      The questions in this examination are quizz. So you had to pratice your related subject as a professtional. <br />
			      - After you sat the exam, you can check out your examination result.<br />
			      - Moreover, if you are not satisfied your profile, you can update it.<br />			      
			      </p>       
			   </div>
		
			</div>	     	            
	 

<?php
		
	
	}
}