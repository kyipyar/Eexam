<?php
class T_StudentMarkHomeView extends View{
	public function displayBody(){
	
		?><div id="left">
     <center>
        <div id="stdRegTable">
          <h1>Student List</h1>
          <br/><br/><br/>
	<form method="post">  
	     <table>
	      
	       <tr>
	            <td><p align="center"><font size="2pt">Search the Student list from Roll Number</font> </p></td>
	       		<td>
	       		       		
	       		<input id='submitBtn' type="submit"  value="Roll Number" name="btnS_InfoRollNo">
				<input type="hidden" name="usecase" value="<?php echo UC_T_STD_INFO;  ?>">
				<input type="hidden" name="action" value="<?php echo ACT_T_STD_INFO; ?>">		       		
	       		
	       	 </td>
	       </tr>
	       <tr></tr>
	       <tr></tr>
	           
	       <tr> 	           
	           <td><p align="center"><font size="2pt">Search the Student list from Academic and Major</font></p></td>
	           <td> 
	                   		
	       		<input id='submitBtn' type="submit"  value="Academic and Major" name="btnS_InfoAC&MJ">
				<input type="hidden" name="usecase" value="<?php echo UC_T_STD_INFO_AcMj; ?>">
				<input type="hidden" name="action" value="<?php echo ACT_T_STD_INFO_AcMj; ?>">	       		
	       		          
	           
	          </td>
	       </tr>
	          
	     </table>	
	
	 
	</form>
	 </div>
	   </center>
	</div>
		
		
		
		
		<!-- 
		<div id="left">
			<div class="text">
	   				<p class="post">Choose One-----</p><br>
	   				</div>
	   				<div id="archives">
				<ul>					
					<li>
					<form method="post">
						<input id="text" type="submit" id="" value="Search  Student Information with Roll No." name="btnS_InfoRollNo">
						<input type="hidden" name="usecase" value="<?php UC_T_STD_INFO ; ?>">
						<input type="hidden" name="action" value="<?php ACT_T_STD_INFO ;?>">	
						</form>				 
					</li>
					
				
					<li>
						<form method="post">
						<input id="text" type="submit" id="" value="View with choosing academic and Major." name="btnS_InfoAC&MJ">
						<input type="hidden" name="usecase" value="<?php UC_T_STD_INFO_AcMj;?>">
						<input type="hidden" name="action" value="<?php ACT_T_STD_INFO_AcMj ;?>">
						
						</form>	
					</li>
				</ul>
			</div>
	   	</div> -->
		
		
<?php 		
	}
}