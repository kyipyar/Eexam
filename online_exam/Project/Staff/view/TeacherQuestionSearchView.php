<?php

class TeacherQuestionSearchView extends View{
	//private $err_msg;
	private $academic_all;
 public function  __construct($title,$academic_all){
 	parent::__construct($title);
 	//$this->err_msg=$err_msg;
 	$this->academic_all=$academic_all;
 }
 
 public function displayBody(){ 			
	?>	
 <div id="left">
			<h1>Welcome to Teachers!</h1>	
            	<div class="text" align="center">Question Uploading</div><br>
				<div class="text"> <br>
				 
     <form method="post">
      <table>
          <tr>
 			 <td id="text">Academic:</td> 			
 			 <td><select name="academic">
 			 <?php		 
 			  	foreach ($this->academic_all as $academic){ ?> 			 
				 			<option value="<?php echo  $academic['academic_id']?>"><?php echo $academic['academic_name']?></option><?php 
 			 }?>
				 		
 			     </select>
 			  </td>
 			 <td id="text">Major:</td>
 			 <td> <select name="course">
		 			<option value="Normal">Normal</option>
		 			<option value="CS">CS</option>
		 			<option value="CT">CT</option>		
		 			
 				  </select>
 			  </td> 				
 			</tr>						
 		    </table>
 		    <table>
 		    		<tr>
 		    			<td>
		 					<input type="submit" id="tbtn" value="Search" name="btnSearch">
		 					<input type="hidden" name="usecase" value="<?php  echo UC_T_EDT?>">
		 					<input type="hidden" name="action" value="<?php  echo ACT_T_EDT?>">
 				    	</td>
 				    </tr>
 			</table>	
 			
 		</form>
 	</div>
 	</div>
<?php }
}