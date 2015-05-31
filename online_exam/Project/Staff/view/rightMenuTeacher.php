<div id="right">
    	<div id="archives">
    	
				<h2>Categories</h2>
				<ul>  
				<form method="post">
				<li><input id="stdLink" type="submit" name="btnQuestionUpload" value="Upload New Questions">
					    <input type="hidden" name="usecase" value="<?php echo UC_UPL; ?>">
					    <input type="hidden" name="action"  value="<?php echo ACT_Q_UPL;?>">
					  </li></form>
					  
					<form method="post">
										
					<li><input id="stdLink" type="submit" name="btnTHomeStdInfo" value="View Student's Exam Info">
					    <input type="hidden" name="usecase" value="<?php echo UC_T_HOME; ?>">
					    <input type="hidden" name="action"  value="<?php echo ACT_T_HOME;?>">
					  </li>
					  </form>			  
					  					  
					  <li>
					     <form method="post">
						<input type="submit" id="stdLink" value="View  Pass/Fail Student" name="btnHomeStdPF">
						<input type="hidden" name="usecase" value="<?php echo UC_STD_PF; ?>">
						<input type="hidden" name="action" value="<?php echo ACT_STD_PF; ?>">						
						</form>	
					  </li>				
					
					<li><form method="post">
						<input id="stdLink" type="submit" name="btnTechStudentList" value="Student Lists">
					    <input type="hidden" name="usecase" value="<?php echo UC_STDLIST; ?>">
					    <input type="hidden" name="action"  value="<?php echo ACT_STDLIST_DSP;?>">
						</form>		
					</li>
					<li><form method="post">
						<input id="stdLink" type="submit" name="btnteaUpdPro" value="Update Profile">
						<input type="hidden" name="usecase" value="<?php echo UC_UPDPRO;?> ">
						<input type="hidden" name="action" value="<?php echo ACT_TEAUPDPRO_EDT;?> ">
						</form>
					</li>
					
					<li>
						<form method="post">
						<input type="submit" id="stdLink" value="View Questions" name="btnHomeVQ">
						<input type="hidden" name="usecase" value="<?php echo UC_T_V_QUE; ?>">
						<input type="hidden" name="action" value="<?php echo ACT_T_V_QUE; ?>">						
						</form>	
					</li>
					
                    </ul>
                    </form>
         </div>
				
</div>