<?php
class Student_ListAMJDetailView extends View{
	private $s_amjdetail;
 public function __construct($title,$s_amjdetail){
 	parent::__construct($title);
 	$this->s_amjdetail=$s_amjdetail;
 	
 }
public function displayBody(){
   $st_amjdetail=$this->s_amjdetail;
	?>
	<div id="left">
	  
	     <center>
	       <div id="stdRegTable">
	        <h2 align="center" >Student List </h2><br/><br/>
	       <?php 
	        foreach ($st_amjdetail as $value){
	       
	       ?>
		  <table>		     
		     <tr>
		         <th>Student ID: </th><td><?php echo htmlspecialchars($value['student_id']);?> </td>
		     </tr>
		     <tr>
		       <th>Student Name: </th><td><?php echo htmlspecialchars($value['student_name']);?> </td>
		    
		     </tr>
		     <tr>
		         <th>Student dateOfBirth:</th><td><?php echo htmlspecialchars($value['student_dateOfBirth']);?></td>
		     </tr>
		     <tr>
		         <th>Student email:</th><td><?php echo htmlspecialchars($value['student_email']);?></td>
		     </tr>
		     <tr>
		       <th>Student Father Name: </th><td><?php echo htmlspecialchars($value['student_father_name']);?></td>
		    
		     </tr>
		     <tr>
		         <th>Student NRCno:</th><td><?php echo htmlspecialchars($value['student_NRCno']);?></td>
		     </tr>
		     
		      </table>	
		      <br/>
		      <br/>
		     <form method="post">
		    <input id='submitBtn' type="submit" name="btnstudamjdetailback" value="Back">
		    <input type="hidden" name="usecase" value="<?php echo UC_STDLIST; ?>">
		    <input type="hidden" name="action" value="<?php echo ACT_STDLIST_AMJSEARCH; ?>">		  
	        </form>	
		 
	         <?php } ?>
	        </div> 
	   </center>
  </div>
	
<?php }		
}
