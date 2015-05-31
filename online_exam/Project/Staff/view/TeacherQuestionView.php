<?php
class TeacherQuestionView extends View{
	private $status_academic,$status_major;
    public function __construct($title,$status_academic=null,$status_major=null){
    	parent::__construct($title);
    	$this->status_academic=$status_academic;
    	$this->status_major=$status_major;
	}
	public function displayBody(){
		//echo "SanSan";
	$Status_AC=$this->status_academic;
    $Status_MJ=$this->status_major;
		?>
		<div id="left">
		<div class="text" align="center">Questions</div><br>
		<p class="text"> Please choose Academic and Major to View Question!!!!</p>
		<br>
		
     <form method="post">
      <table>
          <tr>
 			 <td id="text">Academic:</td>
 			 <td><select name="academic" id="tbtn">
					 	<option value="A">Choose---</option>								 
					<?php foreach ($Status_AC as $key=>$value) {?>
						<option value="<?php echo $value["academic_id"]?>"><?php echo $value["academic_name"]?>	</option>
					<?php } ?>									
				</select>
 			 </td>
 			 
 			 <td id="text">Major:</td>
 			 <td> <select name="course" id="tbtn">
		 			<option value="<?php echo "Normal";?>">Normal</option>
		 			<option value="<?php echo "CS";?>">CS</option>
		 			<option value="<?php echo "CT";?>">CT</option>		 			
 				  </select>
 			  </td> 				
 			</tr>						
 		    </table>
 		    <br>
 		    <br>
 		    <br>
		 					<p align="center"><input type="submit" id="tbtn" value="Search" name="btnQuestionList_Course">
		 					<input type="hidden" name="usecase" value="<?php  echo UC_T_V_QUE1?>">
		 					<input type="hidden" name="action" value="<?php  echo ACT_T_V_QUE1?>"></p>
 				    	
 			
 		</form>
 	</div>
 	
	<?php 	
}
}