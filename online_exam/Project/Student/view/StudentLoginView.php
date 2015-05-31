<?php
class StudentLoginView extends View{
	private $err_msg;
public function __construct($err_msg=null){
 		//$this->title=$title;
 		$this->err_msg=$err_msg;
 	}
	public function displayBody(){
				?>    
				 	
          	<div id="left">
          	<p>
          		<font style="color:red;font-size:12pt;font-weight:bold;text-align:center;" >
					<?php 
						if(isset($this->err_msg["all_null_field"]))
							echo $this->err_msg["all_null_field"];	
						if(isset($this->err_msg["roll_null"]))
							echo $this->err_msg["roll_null"];
						if(isset($this->err_msg["pass_null"]))
							echo $this->err_msg["pass_null"];
						if(isset($this->err_msg["not_student_member"]))
							echo $this->err_msg["not_student_member"];			
					?>
				</font>
			</p> 
				
			<h1>Welcome to Online Examination</h1>	
            	<div class="post">posted by awp3b</div>	
				<div class="text">
                <p>This website emphaizes for student who attending Computer University. ;</p>
			    <p>
			    <br />
                <br />
			      You are allowed to use this design only if you agree to the following conditions:<br />
			      - You cannot remove copyright notice from this design without our permission.<br />
			      - If you modify this design it still should contain copyright because it is based on our work.<br />
			      - You may copy, distribute, modify, etc... this template as long as link to our website remains untouched.<br />
			      For support visit <a href="http://www.metamorphozis.com/contact/contact.php">http://www.metamorphozis.com/contact/contact.php</a><br />
 				<br />
			      The Metamorphosis Design : 2014 </p>       </div>
		
			</div>	     	            
	
<?php }
}

		
		