<?php
class Student_ListHomeView extends View{
	
 public function __construct($title){
 	parent::__construct($title);	
 	
 }
public function displayBody(){?>
 
    <div id="left">
     <center>
        <div id="stdRegTable">
          <h1>Student List</h1>
          <br/><br/><br/>
	<form method="post">  
	     <table>
	      
	       <tr>
	            <td><p align="center"><font size="2pt">Search the Student list from Roll Number</font> </p></td>
	       		<td>
	       		       		
	       		<input id='submitBtn' type="submit"  value="Roll Number" name="btnStudRollnum_search">
				<input type="hidden" name="usecase" value="<?php echo UC_STDLIST;  ?>">
				<input type="hidden" name="action" value="<?php echo ACT_STDLIST_RSEARCH; ?>">		       		
	       		
	       	 </td>
	       </tr>
	       <tr></tr>
	       <tr></tr>
	           
	       <tr> 	           
	           <td><p align="center"><font size="2pt">Search the Student list from Academic and Major</font></p></td>
	           <td> 
	                   		
	       		<input id='submitBtn' type="submit"  value="Academic and Major" name="btnStudAMj_search">
				<input type="hidden" name="usecase" value="<?php echo UC_STDLIST; ?>">
				<input type="hidden" name="action" value="<?php echo ACT_STDLIST_AMJSEARCH; ?>">	       		
	       		          
	           
	          </td>
	       </tr>
	          
	     </table>	
	
	 
	</form>
	 </div>
	   </center>
	</div>

<?php }	
}