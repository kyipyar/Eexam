<?php
class TeacherQuestionListView extends View{
	private $result;
	
	public function __construct($title,$result){
		parent::__construct($title);
		$this->result=$result;
		//print_r($this->result);
	}
	public function displayBody(){?>
		<div id="left">
		<p class="text"> Please choose Course to View Question!!</p>
		<div class="text">
		<br>
		<form method="post">
		<select name="subject_Id">	
				<option value=""> Choose ....</option>			
			<?php 
			foreach ($this->result as $subject){
					?>			
					<option value="<?php echo $subject['subject_id'];?>"><?php echo $subject['subject_name']?></option>					
				
				<?php }?>
		</select>
				<input type="submit" size="8" id="tbtn" name="btn_T_Ques_After_chos_Major" value="ViewQues:" />
				<input type="hidden" name="usecase" value="<?php echo UC_T_Ques_Major;?>" />
				<input type="hidden" name="action" value="<?php echo ACT_T_Ques_Major;?>" /> <br><br>
		<br><br>
		</form>
	  	<p class="text" >
	   		Do you want to choose Academic and Major?
	   	</p>
	   	<form method="post">
		   	<input type="submit" id="tbtn" name="btn_YES_Maj" value="Yes">
		   	<input type="hidden" name="usecase" value="<?php echo UC_T_V_QUE;?>" >
			<input type="hidden" name="action" value="<?php echo ACT_T_V_QUE;?>">
		</form>
	   
	   
	  <!--  <p class="text" align="center"> <input type="submit" id="tbtn" name="btn_No_Maj" value="No"></p> -->
		
		</div>
		</div>
<?php 	}

}