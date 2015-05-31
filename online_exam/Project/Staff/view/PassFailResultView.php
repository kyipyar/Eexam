<?php
class PassFailResultView extends View{

	private $title,$studentList,$maxpage;
	public function __construct($title,$studentList,$maxpage){
	parent::__construct($title);
	$this->title=$title;
	$this->studentList=$studentList;
	$this->maxpage=$maxpage;

	
	
	}

public function displayBody(){
	
	$studentList=$this->studentList;


	
	
	?>             
	  

					<div id="left">
						<h1><?php echo $this->title;?></h1>	
						
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
							    <input id="submitBtn"type="submit" name="btnPFSearch" value="Search">
							    <input type="hidden" name="usecase" value="U_PF">
							    <input type="hidden" name="action" value="A_PF">
							    
			                </form>
			                <br>
			                <br>
			                <br>
			                
			            <?php
			            	if(count($studentList)==0)
			            	{
			            		echo "There is no information for student List!!!!!";
			            		} 
			            		else{
			            ?>
			               
			                	 
			                
			                <table id="PF_Table">
			                	<tr >
			                		<th>No</th>
			                		<th >Name</th>
			                		<th >RollNo</th>
			                		<th >Result</th>
		                	</tr>
		                	
		                		<?php $j=1;
		                		if(isset($_SESSION['no'])){
										$No=$_SESSION['no'];					
								}
									else $No=1;
		                		?>
		                	     <?php ?>
			                	<?php foreach ($studentList as $key =>$value){?>
			                	
			                	<tr>
			                		<td style="border:1px solid black"><?php echo $No;?></td>
			                		<td style="border:1px solid black"><?php echo $value['student_name'];?></td>
			                		<td style="border:1px solid black"><?php echo $value['student_rollNo'];?></td>
			                		<td style="border:1px solid black"><?php echo $value['exam_status'];?></td>
			                		<?php 
			                	      $No++;}
			                		$_SESSION['no']=$No;?>
			                	</tr>
			                	
			                	
			                
			               
			                 <form method="post">
			                
			               <?php  if ($_SESSION['page']!=1){?>
				            <tr><td><br>
							<input style="float:left" id="submitBtn" type="submit"  name="btn_PorF_Previous" value="Previous" />		
							<input type="hidden" name="usecase" value="<?php echo UC_PorF_Previous;?>" />
							<input type="hidden" name="action" value="<?php echo ACT_PorF_Previous;?>" /> 
							</td>
							<?php 	} if ($_SESSION['page']!=$this->maxpage){?>
			                <td></td>
			                <td></td>
			                <td></td>             
			                <td><br>
			                <input id="submitBtn" type="submit"  name="btn_PorF_Next" value="Next" />		
							<input type="hidden" name="usecase" value="<?php echo UC_PorF_Next;?>" />
							<input type="hidden" name="action" value="<?php echo ACT_PorF_NEXT;?>" /> 
							<?php }?>
							</td>
							</tr>
			                </form>
			                
			                
			                 </table>
			                 <?php }?>
			                </center>
			               
			                	
						</div>	





<?php }

}