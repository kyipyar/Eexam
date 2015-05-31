<div id="right">
    	<div id="archives">
				<h2>Login</h2>
				<form method="post">	
		<center>
		<table>
		<tr> 
		    <th>Roll No:</th>
		    <td><input type="text" id="box" name="roll_no" value="<?php if(isset($_SESSION["roll_no"])) echo $_SESSION["roll_no"]?>"></td>
		 </tr>
		  <tr>
		    <th>Password:</th>
		    <td><input type="password" id="box" name="password" value="<?php if(isset($_SESSION["pass"])) echo $_SESSION["pass"]?>"></td>
		  </tr>
		  <tr>
		    <td align="center" bgcolor="green">
		    <input type="submit" name="btnStdLogin" value="Sign In">
			<input type="hidden" name="usecase" value="<?php echo UC_STD;?>">
			<input type="hidden" name="action" value="<?php echo ACT_STD_CNF;?>"></td>
		  </tr>
		</table>
		</center>
		</form>
         </div>				
       	</div>