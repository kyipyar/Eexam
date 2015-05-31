<?php
class Student_ListAMJSearchView extends View{
	private $title,$studlistac_maj,$studlist_academic,$studlist_major;	
 public function __construct($title,$studlist_academic,$studlist_major,$studlistac_maj){
 	
 	parent::__construct($title);
 	$this->studlist_academic=$studlist_academic;
 	$this->studlist_major=$studlist_major;
 	$this->studlistac_maj=$studlistac_maj;
 	
 }	
 public function displayBody(){
  $studlist_academic=$this->studlist_academic;
   $studlist_major=$this->studlist_major;
   $studlistacd_maj=$this->studlistac_maj;
 	
 	
 	?> 	
 	<div id="left" >
 	  <center>
 	    <div id="stdRegTable">
 	       <h2>Student List</h2>
 	       <br/><br/><br/>
 	       <form method="post">
 	       <table>
 	          <tr>
 	              <th>Academic:</th>
 	          
 	         
 	             <td>
 	              <select  name="academic"  size="1" id="sel_btn">
 	                   <option value="">  choose.... </option> 	                      	                  
 	                    <?php 
 	                    foreach ($studlist_academic as $key=>$value){?> 	                    
 	                    
 	                   <option value="<?php echo $value["academic_name"]; ?>"><?php echo  $value["academic_name"]; ?> </option>	                             
 	                   
 	                   
 	                   <?php }              
 	                  ?>
 	               </select>
 	             </td>
 	                    <th>Major:</th>
 	             <td>
 	                 <select name="major" size="1" id="sel_btn">
 	                    <option value="">choose...</option>
 	                    <?php 
 	                    foreach ($studlist_major as $key=>$value){?>	                            
 	                   
 	                    <option value="<?php echo $value["major_name"]; ?>"><?php echo $value["major_name"]; ?></option>               
 	                    <?php }
 	                     ?>
 	                  </select>
 	                </td>
 	                   <td> <input id='submitBtn' name="BtnST_StdlistAMj" type="submit" value="Search"> 
							<input name="usecase" type="hidden" value="<?php echo UC_STDLIST;?>">
				  			<input name="action" type="hidden" value="<?php echo ACT_STDLIST_AMJ;?>">
				      </td>
 	           </tr>
 	          </table>
 	          <br/><br/><br/>
 	          <table border=1 id='box'>
 	           <tr id='box'>
 	             <th id='box'><font size=2px>No</font></th>
		           <!-- <th id='box'><font size=2px>Student ID</font></th>  --> 
		           <th id='box'><font size=2px>Student Name</font></th>
		           <th id='box'><font size=2px>Student Roll_No</font></th>
		           <th id='box'><font size=2px>Student Phono</font></th>
		           <th id='box'><font size=2px>Student address</font></th>
		           <th id='box'></th>		 
 	           </tr>
 	             
		       <?php 
		       //$count=array();	
		       $i=0;	       	
				foreach ($studlistacd_maj as $key=>$value){
						echo "<tr id='box'>";
							$i=++$i;
						//	for($j=1;$j<=$i;$j++)
						//	{$count[$i]=$value["student_id"];
						//	}
							echo "<td id='box'>$i</td>";
							
							//foreach ($value as $value1){
							   // echo "<td id='box'>".htmlspecialchars($value['student_id'])."</td>";
								echo "<td id='box'>".htmlspecialchars($value['student_name'])."</td>";
								echo "<td id='box'>".htmlspecialchars($value['student_rollNo'])."</td>";	
								echo "<td id='box'>".htmlspecialchars($value['student_phno'])."</td>";								
								echo "<td id='box'>".htmlspecialchars($value['student_address'])."</td>";?>
							 	<td id='box'>
							 	  <form method="post">
							     	<input id="submitBtn" type="submit" value="Detail" name="btn_Staff_StudlistdetailAMJ">
							    	<input type="hidden" value="<?php echo UC_STDLIST;?>" name="usecase">
								    <input type="hidden" value="<?php echo ACT_STDLIST_AMJDETAIL; ?>" name="action">
								    <input type="hidden" name="student_ST_amj_id" value="<?php  echo $value['student_id'];?>">
								 </form>
								 </td>
						<?php echo "</tr>\n";
					//	print_r($count);
					}?>
		         
		              
 	          
 	          </table>
 	          
 			</form>		
 			</div>
 	  </center>
 	</div>
 	
<?php  }
}
