<?php
class StdPassFailView extends View{

private $title,$err_msg;	
public function __construct($title,$err_msg=NULL)
{
	
	parent::__construct($title);
	$this->title=$title;
	$this->err_msg=$err_msg;
	
}

public function displayBody(){
	
	$err_msg=$this->err_msg;
	//$academic=$_SESSION['academic'];
	//$major=$_SESSION['major'];
	?>

      	
          	<div id="left">
			<h1><?php echo $this->title;?></h1>	
            	<div class="text">
            	<center>
            	<br><br>
			    <p>Please choose Normal for First Year. <br>
			       CS and CT for Second Year and Third Year. <br><br></p>
            	<form method="post">
			    	Academic:<select name="academic">
			    		<option>choose..</option>
			    		<?php foreach ($_SESSION["Allacademic"] as $key=>$value){?>
			    		<option><?php echo  $value["academic_name"];?></option>
			    		<?php }?>
			    	</select>
			    	Major:<select name="major">
			    		<option>choose..</option>
			    		<option>Normal</option>
			    		<option>CS</option>
			    		<option>CT</option>
			    		
			    	</select>
				    <input id="submitBtn" type="submit" name="btnPFSearch" value="Search">
				    <input type="hidden" name="usecase" value="U_PF">
				    <input type="hidden" name="action" value="A_PF">
				    
				  </form>
				  <br>
				  <font color=red><?php if (isset($err_msg["err"])) echo $err_msg["err"];?></font>
				  </center>
				  
                </div>		
			</div>	




<?php }

}