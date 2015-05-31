<?php 
class T_QuestionEditView extends View{
 		private $error_msg;
 		private $result;
 		public function __construct($title,$res,$error_msg=NULL){
 			parent::__construct($title,$error_msg);
 			$this->error_msg=$error_msg;
 			$this->result=$res;
 			
 		}
 		
 	public  function displayBody(){
 		?>
 		
<div id="left">
	   <div class="text">
	   				<p class="post"> Please upload questions!</p><br>
	   				
                     <form method="post">
 			<!-- Subject:<select name="subject">
 			<option>101</option>
 			<option>102</option>
 			<option>103</option>
 			</select> -->
 			
 			Subject:<select name="subject">
 					<?php foreach ($this->result as $subject) { ?>
 						<option value="<?php echo $subject['subject_id'];?>"><?php echo $subject['subject_name']; ?></option>
 					<?php }?>
 						
 			</select>
 			<br>
 			<br>
 			<br>
 			
 		<table>
 			<tr>
 				<tr>
 				<td id="text">Question:</td>
 				<td>
 					<textarea id="box" cols="40" rows="5" name="question" ></textarea>
		 					 	<font color="red">
		 				    	<?php 
								if (isset($this->error_msg["qes"]))
								echo $this->$error_msg["qes"];
								?>
								<font color="red"> ***</font>     

                 </td> 		
 			</tr>
 			<tr>
 				<td id="text">Possible AnswerA:</td>
 				<td><input id="box" type="text" name="ans1">
				 				<font color="red">
				 				<?php 
									if (isset($this->error_msg["ans1"]))
									echo $this->$error_msg["ans1"];
									?>
								<font color="red"> ***</font>

 				</td>
 			</tr> 	
 			<tr>
 				<td id="text">Possible AnswerB:</td>
 				<td><input id="box" type="text" name="ans2">
 								<font color="red">
				 				<?php 
									if (isset($this->error_msg["ans2"]))
									echo $this->err_msg["ans2"];
									?>
								<font color="red"> ***</font>

 				</td> 
 			</tr>	
			
 			<tr>
 				<td id="text">Possible AnswerC:</td>
 				<td><input id="box" type="text" name="ans3">
				 				<font color="red">
				 				<?php 
									if (isset($this->error_msg["ans3"]))
									echo $this->error_msg["ans3"];
									?>
								<font color="red"> ***</font>

 				</td>
 			</tr>
 			
 			<tr>
 				<td id="text">Possible AnswerD:</td>
 				<td><input id="box" type="text" name="ans4">
 								<font color="red">
 								<?php 
									if (isset($this->error_msg["ans4"]))
									echo $this->error_msg["ans4"];
								?>
								<font color="red"> ***</font>

 				</td>
 			</tr>	
 			
 			<tr>
 				<td id="text">Correct Answer:</td>
 				<td><input  id="box" type="text" name="corans">
 									<font color="red">
					 				<?php 
										if (isset($this->error_msg["corans"]))
										echo $this->error_msg["corans"];
										?>
									</font>	 				
 				</td>
 			</tr>
 									<font color="red">
					 					<?php 
										if (isset($this->error_msg["all"]))
										echo $this->err_msg["all"];
										//NoT Math ERROR
										if(isset($this->error_msg["not_match"]))
										echo "Not include with correct answer";
										?>
									</font>	
 				 
 			<tr>
 				<td></td>
 				<td>
 					<input type="submit" id="tbtn" value="Upload" name="btnUploadQuestion">
 					<input type="hidden" name="usecase" value="<?php  echo UC_UPD_QES?>">
 					<input type="hidden" name="action" value="<?php  echo ACT_T_UPD_QES?>">
 				
 				</td>
 			</tr>						
    </table>
 		</form>
 	     </div>	
	</div>		     	            
 		
 	<?php }	
 		
 		
 }