<?php
class T_StudentMarksView extends View{
	private $title,$error,$calculate;
	public function __construct($title,$errorSMS,$calculate=null){
		parent::__construct($title);
		$this->error=$errorSMS;
		$this->calculate=$calculate;
		
	}
	
 	public function displayBody(){ ?>
 	<div id="left">
 			<div class="text">
	   				<p id="text" align="center"> Student's Mark Information....</p><br>
		
		<form method="post">	
		<table>	<tr ><td colspan=4 id="text">Enter Student Roll No .(eg.1CST-1,2CS-1,3CT-1,....)</td></tr>
		<tr><td id="text" colspan=2>Roll_No:</td>
		<td colspan=2><input id="box" type="text" name="txtRoll_No_search" value="">
					<font id="errmsg">
					<?php 
						if(isset($this->error["txtRoll_No_search"]))
						echo "***";
					?></font>
							
			<input id="box" type="submit" name="btnRoll_noSearch" value="Search">
			<input name="usecase" type="hidden" value="UC_ROLLNO_MARK_SEARCH">
			<input name="action" type="hidden" value="ACT_ROLLNO_MARK_SEARCH">
			</td></tr>
			</table>											  
			</form>		
			</div>
			</div>
		 <?php }
 }