<?php
class StudentRegisterationCompleteView extends View{

	private $title;
	private $stdrollpwd;
public function __construct($title,$stdrollpwd=null){
	parent::__construct($title);
	$this->title=$title;
	$this->stdrollpwd=$stdrollpwd;	

}

public function displayBody(){?>

	<div id="left">
	
					<div id="stdRegTable">
							<h1 id="RegCmp">
								<?php echo $this->title; ?>					
							</h1><br><br><br><h3>
							<?php 
							echo "Student Rollno= ".$this->stdrollpwd->getstdRno()."<br><br>";
							echo "Student Password = ".$this->stdrollpwd->getstdPwd();
							?> </h3>
					</div>
	</div>

<?php }

}