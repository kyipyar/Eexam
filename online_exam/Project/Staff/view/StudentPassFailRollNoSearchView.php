<?php
class StudentPassFailRollNoSearchView extends View{
	private $Std_pf;
    public function __construct($title,$Std_pf){
    
    	parent::__construct($title);
    	$this->Std_pf=$Std_pf;
    }
    
    
    public function displayBody(){
    //echo"roll search view";
    
    	$stdpf=$this->Std_pf;
    ?>
    
   <form method="post">
    
   	<p id="text">Enter Student Roll No .(eg.1CST-1,2CS-1,2CT-1,3CS-1,3CT-1)</p><br><br>
     <table>
			<tr>
				<td id="text">Roll_No:</td>
			    <td><input id="box" type="text" size="8" name="txtRoll_No_search">
			    	
			    	<font color=red>
					<?php 
						if(isset($this->error["txtRoll_No_search"]))
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
	<br><br>	
	
	
	<?php if(count($this->Std_pf)==0){?>
					<div id="left">
			 			<div class="text">
				   				<p id="text" align="center">Passed/Failed Student...</p><br>
				   				There is still no Exam Sit Record for this student list.....
				   		</div>
    				</div>
				<?php }
				else{?>
				<div id="left">
		 			<div class="text">
			   				<p id="text" align="center">Passed/Failed Student...</p><br>
	
<form method="post" >  						
			
	<table border=1 id="box">
		<tr>
			<th id="box">No</th>
			<th id="box">Student Name</th>
			<th id="box">Student Roll_No</th>
			<th id="box">Pass/Fail Status</th>
						
		</tr>
	
	
	<?php 	
				foreach ($stdpf as $key=>$value) {
						echo "<tr>";
							$i=0;
							$i=$i+1;		
							echo "<td id='box'>$i</td>";
							
							//foreach ($value as $value1){
								echo "<td id='box'>".htmlspecialchars($value['student_name'])."</td>";
								echo "<td id='box'>".htmlspecialchars($value['student_rollNo'])."</td>";																	
								echo "<td id='box'>".htmlspecialchars($value['exam_status'])."</td>";?>
								
								<?php echo "</tr>\n";
					}?>	
					
	
	</table>
	 </form>
	<br>	
	 
	<form method="post">
	   
		<table>
		   <tr>
				<td>
					<input type="submit" id="tbtn" name="btnRoll_noSearch_PF_back" value="Back">
					<input name="usecase" type="hidden" value="UC_ROLLNO_PF_BACK">
					<input name="action" type="hidden" value="ACT_ROLLNO_PF_BACK">
				</td>
			</tr>
		</table>	
	</form>	
	
	</div>
	</div>
  
 <?php    }
    }

}