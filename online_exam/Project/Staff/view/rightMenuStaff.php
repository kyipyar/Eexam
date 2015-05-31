<div id="right">
    	<div id="archives">
    			<form method="post">
				<h2>Categories</h2>
				<ul>
					<li>
						<input id="stdLink" type="submit" name="btnStudentRegister" value="Student Registeration">
						<input type="hidden" name="usecase" value="U_STD_HP">
						<input type="hidden" name="action" value="A_STD_HP">
					
					
					</li>
							
					<li><input id="stdLink" type="submit" name="btnStaffReg" value="Teacher/Staff Registeration">
					    <input type="hidden" name="usecase" value="<?php echo UC_SREG;?> ">
				        <input type="hidden" name="action" value="<?php echo ACT_SREG_EDT;?> ">
									
					</li>
					<li>
						<input id="stdLink" type="submit" name="btnUpdPro" value="Update Profile">
						<input type="hidden" name="usecase" value="<?php echo UC_UPDPRO;?> ">
						<input type="hidden" name="action" value="<?php echo ACT_UPDPRO_EDT;?> ">
					</li>
					<li><input id="stdLink" type="submit" name="btnStudentList" value="Student Lists">
					    <input type="hidden" name="usecase" value="<?php echo UC_STDLIST; ?>">
					    <input type="hidden" name="action"  value="<?php echo ACT_STDLIST_DSP;?>">
									
					</li>
					
					<li><input id="stdLink" type="submit" name="btnStudentResultInStage" value="Student Result">
						<input type="hidden" name="usecase" value="U_STD_PF_R">
						<input type="hidden" name="action" value="A_STD_PF_R"></li>
					
					              
				</ul>
				</form>
         </div>
				
        </div>
