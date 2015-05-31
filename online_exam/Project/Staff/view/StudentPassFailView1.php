<?php
class StudentPassFailView1 extends View{
	private $title,$errorSMS;
   public function __constuct($title,$errorSMS=null){
      parent::__construct($title);
      $this->errorSMS=$errorSMS;
   }
   
   public function displayBody(){
   
   	?>
   
   <div id="left">
			<h1>Welcome to Teachers!</h1>	
            	<div class="text" align="center">Passed/Failed Student</div><br>
				<div class="text">  
   <form method="post">
   	<p id="text">Enter Student Roll No .(eg.1CST-1,2CS-1,3CT-1,..)</p><br><br>
     <table>
			<tr>
				<td id="text">Roll_No:</td>
			    <td><input id="box" type="text" size="8" name="txtRoll_No_search">
			    	
			    	<font color=red>
					<?php 
						if(isset($this->errorSMS["txtRoll_No_search"]))
						echo "***";
					?>
					</font>
						
					<input type="submit" id="tbtn" name="btnRoll_noSearch_PF" value="Search">
					<input name="usecase" type="hidden" value="UC_ROLLNO_PF_SEARCH">
					<input name="action" type="hidden" value="ACT_ROLLNO_PF_SEARCH">
				</td>
			</tr>	
	</table>
			
	</form>
	</div>
	</div>
  <?php  }
}