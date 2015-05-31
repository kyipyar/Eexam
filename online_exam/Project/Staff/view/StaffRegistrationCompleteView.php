<?php
class StaffRegistrationCompleteView extends View{
	private $passw;
	private $login;
	public function __construct($title,$passw,$login){
		parent::__construct($title);
		$this->login=$login;
		$this->passw=$passw;		
		
	}

	public function displayBody(){
	  

		?>  

	       <div id="left">
	          
	         
	       <center>
	       <table>
	       <tr><th>
	       </th>
	           <th>Successfully Registered.....</th>
	       </tr>
	       <tr>
	          <td>
	          <?php  if(@$_SESSION["teacher_role_id"]==1)
	                 {
	                    echo " Teacher Login name: ";	             
	                 }
	                 else 
	                 {
                          echo " Staff Login name: ";	
	                 }           
	           ?> 
	          
	           
	          </td>
	          <td>
	              <?php echo $this->login;?>
	          </td>
	       </tr>
	       <tr>
	           <td>
	             <?php  if(@$_SESSION["staff_role_id"]==2)
	                 {
	                    echo " Staff password: ";	             
	                 }
	                 else 
	                 {
                          echo " Teacher password: ";	
	                 }           
	           ?>       
	           
	           
	           
	           </td>
	           <td>
	              <?php echo $this->passw;?>
	           </td>
	       </tr>
	       <tr>
	       <td></td>
	       <td>
	       <form method="post">
			<br><input id='submitBtn' type="submit" value="Home" name="btnStaffHomePage"><br>
			<input type="hidden" name="usecase" value="<?php echo U_ST_HP;?>">
			<input type="hidden" name="action" value="<?php echo A_ST_HP;?>">
		</form>	
	       </td>
	       </tr>	       
	       </table>
		</center>
		
		</div>
	
	<?php }

}