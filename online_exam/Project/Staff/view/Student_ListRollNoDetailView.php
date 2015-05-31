<?php
class Student_ListRollNoDetailView extends View{
	private $s_detail;
	public function __construct($title,$s_detail){
		
		parent::__construct($title);
		$this->s_detail=$s_detail;
		
	}
	
	public function displayBody(){
	$s_detail=$this->s_detail;
		
	?>
		
   <div id="left">
	   
	     <center>
	      <div id="stdRegTable">
	        <h2 align="center">Student List </h2><br/><br/>
	       <?php 
	        foreach ($s_detail as $value){
	       
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
		    <input id='submitBtn' type="submit" name="btnstuddetailback" value="Back">
		    <input type="hidden" name="usecase" value="<?php echo UC_STDLIST; ?>">
		    <input type="hidden" name="action" value="<?php echo ACT_STDLIST_RSEARCH; ?>">		  
	        </form>	
		 
	         <?php } ?>
	         </div>
	         
	   </center>
	   
  </div>
		
<?php 	}	
}
