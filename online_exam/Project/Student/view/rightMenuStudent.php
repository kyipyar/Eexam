
<div id="right">
    	<div id="archives">
				<h2>Categories</h2>
				<ul>
					<li> <!-- <a href="StudentProfileUpdateView.php">Update Profile</a></li> -->
						<form method="post">
							<input  id="stdLink" type="submit" name="btnStdUpdateProfile" value="Update Profile" />
							<input type="hidden" name="usecase" value="<?php echo UC_STD_UPD;?>" />
							<input type="hidden" name="action" value="<?php echo ACT_STD__PF_UPD;?>" />
						</form>
						
					<li>
					<form method="post">
						 <input id="stdLink" type="submit" value="Change Password" name="btnStdResetPwd" >
						<input type="hidden" name="usecase" value="<?php echo UC_PF_PWD;?>">
						<input type="hidden" name="action" value="<?php echo ACT_PF_RE_PWD;?>">
					</form>
			
					
					<li><!-- <a href="1.php">Sit the Exam</a></li> -->
						<form method="post">
							<input id="stdLink" type="submit" name="btnStdSitExam" value="Sit the Exam" />
							<input type="hidden" name="usecase" value="<?php echo UC_STD_SIT_EXAM; ?>" />
							<input type="hidden" name="action" value="<?php echo ACT_STD_SIT_EXAM; ?>" />
						</form>
						
                </ul>
         </div>
				
       	</div>
       