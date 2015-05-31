<?php
class Student_ListRollNoSearchView extends View{
	private $stud_info;
 public function __construct($title,$stud_info){
 	
 	parent::__construct($title);
 	$this->stud_info=$stud_info;
 	
 }	
	
public function displayBody(){
	
$stud_info=$this->stud_info;
	?>
	<div id="left">
	     <div id="stdRegTable">
	              <h1 align="center">Student List</h1><br/><br/>
	             
		  <form method="post">
		      <!--  <div style="width:250px;float:left;"> -->
		             
		        <table>
		           <tr>
		               <td>Student_Roll_number:</td>
		                 <td><input id="text" type="text" name="txtRollnumbersearch" value="" ></td>	
		                 	
	                     <td><input id='submitBtn' type="submit" name="btnStudListRoll_Num" value="Search">
		                    <input name="usecase" type="hidden" value="<?php echo UC_STDLIST;?>">		
		                	<input name="action" type="hidden" value="<?php echo ACT_STDLIST_ROLLNUM;?>">
			           </td>	
		          </tr>
		      </table>
		     <!-- </div> -->
		      <br/><br/>
		   
		    <table border=1 id="box">
		       <tr id='box' >
		           <th id="box"><font size=2px>No</font></th >
		            <th id="box"><font size=2px>Student ID</font></th>
		           <th id="box"><font size=2px>Student Name</font></th>
		           <th id="box"><font size=2px>Student Roll_No</font></th>
		           <th id="box"><font size=2px>Student Phono</font></th>
		           <th id="box"><font size=2px>Student address</font></th>
		           <th id="box"></th>		 
		       </tr>
		     
		       <?php 	
		       $i=0;	       	
				foreach ($stud_info as $key=>$value){
						echo "<tr id='box'>";
							
							$i=$i+1;		
							echo "<td id='box'>$i</td>";
							
							//foreach ($value as $value1){
							    echo "<td id='box'>".htmlspecialchars($value['student_id'])."</td>";
								echo "<td id='box'>".htmlspecialchars($value['student_name'])."</td>";
								echo "<td id='box'>".htmlspecialchars($value['student_rollNo'])."</td>";	
								echo "<td id='box'>".htmlspecialchars($value['student_phno'])."</td>";								
								echo "<td id='box'>".htmlspecialchars($value['student_address'])."</td>";?>
								
							 	<td id='box'>							 	
							 	<form method="post">							 	
							 	 <input id='submitBtn' type="submit" value="Detail" name="btn_Staff_Studlistdetail">
										<input type="hidden" value="<?php echo UC_STDLIST;?>" name="usecase">
										<input type="hidden" value="<?php echo ACT_STDLIST_ROLLNODETAIL; ?>" name="action">
										 <input type="hidden" name="student_ST_id" value="<?php  echo $value['student_id'];?>">
								 </form>
								 </td>
						<?php echo "</tr>\n";
					}?>
		         
		     
		
		    </table>
		
	</form>
	 </div>
   </div>
			
	<?php }
	
}	