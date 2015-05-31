<?php
class Student_ListRollNoView extends View{
	private $error_msg;
	public function __construct($title,$error_msg=NULL){		
		parent::__construct($title);	
		$this->error_msg=$error_msg;
	   }
	   
	public function displayBody(){
	
		?>
	 <div id="left">
	   <center>
	     <div id="stdRegTable">
	         <h1>Student List </h1>
	         <br/><br/><br/>
	   <form method="post">
	         <table>
	             
	             <tr>	               
	               <th colspan="2">
	                 <p>  Enter Student Roll No .(eg.1CST-1,2CS-1,3CT-1,....)</p>
	               </th>     
	             </tr>	           
	             <tr>
	                 <th>
	                    <p>  Roll Number: </p>
	                 </th>
	                 <td>
	                    <input type="text" id="stext" name="txtRollnumbersearch">           
	                    
	                    <input id='submitBtn' type="submit" name="btnStudListRoll_Num" value="Search">
						<input name="usecase" type="hidden" value="<?php echo UC_STDLIST;?>">
						<input name="action" type="hidden" value="<?php echo ACT_STDLIST_ROLLNUM;?>">
						
						 <font color="red">***
						 <br>
	                  <?php 
	                     if(isset($this->error_msg["roll_number"]))  //error_msg name same
	                         echo $this->error_msg["roll_number"];	                                
	                    
	                    ?>
	                    </font>						
	                                        
	                 </td>
	              </tr>
	             
	                
	              
	         
	         </table>
	   </form>
	   </div>
	 </center>
	 </div>	
	
					
<?php }
	
}