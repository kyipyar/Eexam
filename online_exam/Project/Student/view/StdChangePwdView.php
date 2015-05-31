<?php
class StdChangePwdView extends View{
	private $pwd;
	private $err_msg_pwd;
	
	function __construct($pwd1,$error=Null){
		$this->pwd=$pwd1;
		$this->err_msg_pwd=$error;
	}
	public function displayBody(){
		//echo "Kyi Pyar".count($this->err_msg_pwd)."Lwin";
		?>
		
			<div id="left">
			<form method="post">
			<h1> Change Password!!</h1>
			<br><br><br>
				<table id="stylePass">
					<tr>
						<td><br>Current Password:</td>
						<td><br><input type="password" id="box" name="txtcurpwd" value="" /><font color='red'>***
							<?php if (isset($this->err_msg_pwd["pwd"]))
							echo $this->err_msg_pwd["pwd"]; 
							if (isset($this->err_msg_pwd["notMatch"]))
							echo $this->err_msg_pwd["notMatch"];
							?>
						</font></td>
					</tr>
					<tr>
						<td><br>New Password:</td>
						<td><br><input type="password" id="box" name="txtnewpwd" value="" /><font color='red'>***
						<?php if (isset($this->err_msg_pwd["cpwd"]))
							echo $this->err_msg_pwd["cpwd"]; 
							if (isset($this->err_msg_pwd["notnewMatch"]))
							echo $this->err_msg_pwd["notnewMatch"];
							if (isset($this->err_msg_pwd["pwdwrong"]))
							echo $this->err_msg_pwd["pwdwrong"];
							?>
						</font></td>
					</tr>
					<tr>
						<td><br>Confrim New Password:</td>
						<td><br><input type="password" id="box" name="txtcfnewpwd" value="" /><font color='red'>***
							<?php if (isset($this->err_msg_pwd["cfpwd"]))
							echo $this->err_msg_pwd["cfpwd"]; 
							?>
						</font></td>
					</tr>
					<tr>
					<?php if (isset($this->err_msg_pwd["all"]))
							echo $this->err_msg_pwd["all"]; 
					?>
						<td align="center">
							<input type="submit" id="submitBtn" name="btnSTDNewPwd" value="Change" onClick="(window.confirm('Are you sure to change your password?'));"/>
								<input type="hidden" name="usecase" value="<?php echo UC_PF_PWD;?>">
								<input type="hidden" name="action" value="<?php echo ACT_STD_NEW_PWD;?>">
								<input type="hidden" name="pwd" value="<?php echo $this->pwd;?>">
							</td>
						<td align="center"><input type="submit" id="submitBtn" name="btnSTDNewPwdCancel" value="Cancel" />
							<input type="hidden" name="usecase" value="<?php echo UC_PF_PWD;?>">
							<input type="hidden" name="action" value="<?php echo ACT_PF_RE_PWD;?>">							
						</td>
					</tr>
				</table>
			</form>
		
			</div>
		
		<?php 
	}
}