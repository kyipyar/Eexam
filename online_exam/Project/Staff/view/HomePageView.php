<?php
class HomePageView extends View{
	
	//for constructor
	private $title,$err_msg;
    public function __construct($title,$err_msg=NULL){
	parent::__construct($title);
	$this->title=$title;
	$this->err_msg=$err_msg;
	
	}
	public function displayBody(){
			
		$err_msg=$this->err_msg;
		?>
		

	     
       
          	<div id="left">
          	
			<h1>Welcome</h1>	
            		
				
                <form method="post">
			    <center>
			    <br><br><br>
			    <h4><font color=red><?php 
			  	{if (isset($err_msg["err"]))
			          echo $err_msg["err"];}
			        ?></font></h4>
			    <br>
			    <br>
			    <table>
			    	<tr>
			    		<th><font color=black>User Name:<br><br></font></th>
			    		<td><input type ="text" name="userName" id="textBox" ><br><br></td>
			    	</tr>
			    	
			    	<tr>
			    		<th><font color=black>Password:<br><br></font></th>
			    		<td><input type="password" name="password" id="textBox"><br><br></td>
			    	</tr>
			    	<tr>
			    		<th><br><br></th>
			    		<td><select name="loginName">
			    		<option>Choose</option>
			    		<option>Teacher</option>
			    		<option>Staff</option>
			    		
			    	</select><br>
			    	</tr>
			    	
			    	<tr>
			    		<th><br></th>
			    		<td><br>
			    			<input id="submitBtn" type="submit" name="loginBtn" value="Login">
					    	<input type="hidden" name="usecase" value="<?php echo UC_T;?>">
					    	<input type="hidden" name="action" value="<?php echo ACT_T;?>"><br><br>
					    </td>
			    	</tr>
			    </table>
			    	 	
			   
			    	
			    	
			    	
			    
			    </center>
			    </form>
 				
			      
		
			</div>
		
	
		
<?php 	}
	
}
?>