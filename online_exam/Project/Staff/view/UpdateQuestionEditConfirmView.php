<?php
class UpdateQuestionEditConfirmView extends View{
	public function __construct(){
		
	}
	public function displayBody(){?>
	<div id="left">
	   <div class="text">
		<p>Are you sure you want to updat this Question?</p>
		<form method="post">
			<table>
				<tr>
				
				
				<tr>
					<td id="text">Question:</td>
					<td><textarea id="box" cols="40" rows="5" name="question" disabled> 
							<?php echo $_SESSION["question"]->getQes();?>
						</textarea> <font color="red"> <?php 
								//if (isset($this->err_msg["qes"]))
								//echo $this->err_msg["qes"];
								?> </font>
					</td>
				</tr>
				<tr>
					<td id="text">Possible AnswerA:</td>
					<td><input id="box" type="text" name="ans1"
						value="<?php echo $_SESSION["question"]->getPosAnsA();?>" disabled> <font
						color="red"> <?php 
									//if (isset($this->err_msg["ans1"]))
									//echo $this->err_msg["ans1"];
									?> </font>
					</td>
				</tr>
				<tr>
					<td id="text">Possible AnswerB:</td>
					<td><input id="box" type="text" name="ans2"
						value="<?php echo $_SESSION["question"]->getPosAnsB();?>" disabled> <font
						color="red"> <?php 
									//if (isset($this->err_msg["ans2"]))
									//echo $this->err_msg["ans2"];
									?> </font>
					</td>
				</tr>

				<tr>
					<td id="text">Possible AnswerC:</td>
					<td><input id="box" type="text" name="ans3"
						value="<?php echo $_SESSION["question"]->getPosAnsC();?>" disabled> <font
						color="red"> <?php 
									//if (isset($this->err_msg["ans3"]))
									//echo $this->err_msg["ans3"];
									?> </font>
					</td>
				</tr>

				<tr>
					<td id="text">Possible AnswerD:</td>
					<td><input id="box" type="text" name="ans4"
						value="<?php echo $_SESSION["question"]->getPosAnsD();?>" disabled> <font
						color="red"> <?php 
									//if (isset($this->err_msg["ans4"]))
									//echo $this->err_msg["ans4"];
								?> </font>
					</td>
				</tr>

				<tr>
					<td id="text">Correct Answer:</td>
					<td><input id="box" type="text" name="corans"
						value="<?php echo $_SESSION["question"]->getCorAns();?>" disabled> <font
						color="red"> <?php 
										//if (isset($this->err_msg["corans"]))
										//echo $this->err_msg["corans"];
										?> </font>
					</td>
				</tr>
				<font color="red"> <?php 
										//if (isset($this->err_msg["all"]))
										//echo $this->err_msg["all"];
										//NoT Math ERROR
										//if(isset($this->err_msg["not_match"]))
										//echo "Not include with correct answer";
										?> </font>

				<tr>
					<td></td>
					<td>
						<input type="submit" id="tbtn" value="Confirm"
						name="btnUpdateEditConfirmQuestion"> <input type="hidden" name="usecase"
						value="<?php echo UC_UPD_EDT_QUES;?>"> <input type="hidden"
						name="action" value="<?php echo ACT_UPD_EDT_CMP; ?>">
						
						<input type="submit" id="tbtn" value="Cancel"
						name="btnUpdateEditConfirmQuestionCancel"> <input type="hidden" name="usecase"
						value="<?php echo UC_UPD_EDT_QUES;?>"> <input type="hidden"
						name="action" value="<?php echo ACT_UPD_EDT_QUES; ?>">
					</td>
				</tr>
			</table>
		</form>
	</div>
 </div>
<?php }
}