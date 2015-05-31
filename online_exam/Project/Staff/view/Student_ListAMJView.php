<?php
class Student_ListAMJView extends View{
	private $studlist_academic,$studlist_major;
	private $error_msg;
public function __construct($title,$studlist_academic,$studlist_major,$error_msg=NULL){
	parent::__construct($title);
	$this->studlist_academic=$studlist_academic;
	$this->studlist_major=$studlist_major;
	$this->error_msg=$error_msg;
}	
 public function displayBody(){
   $studlist_academic=$this->studlist_academic;
   $studlist_major=$this->studlist_major;
 
 	
 	?>
 	<div id="left">
 	  <center>
 	    <div id="stdRegTable">
 	       <h2>Student List:</h2>
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
 			</form>		 
 	                <font color="red">*** 
	                  <?php 
	                      if(isset($this->error_msg['acad_maj']))
	                        echo $this->error_msg['acad_maj'];
	                       if(isset($this->error_msg["acd_err"]))  //error_msg name same
	                         echo $this-> error_msg["acd_err"];
	                        
	                     if(isset($this-> error_msg["maj_err"]))  //error_msg name same
	                         echo $this-> error_msg["maj_err"];
	                      if(isset($this-> error_msg["acmaj_err"])) 
	                         echo $this->error_msg["acmaj_err"]; 
                          if(isset($this->error_msg["acamajfcs_err"])) 
	                         echo $this-> error_msg["acamajfcs_err"]; 
	                       if(isset($this-> error_msg["acmajsn_err"])) 
	                         echo $this-> error_msg["acmajsn_err"];
	                        if(isset($this->error_msg["acmajtn_err"])) 
	                         echo $this->error_msg["acmajtn_err"];                       
	                
	                    ?>
	                    </font>
	         </div>           
	       </center> 
	                    
 	</div>
 	
<?php  }		
}