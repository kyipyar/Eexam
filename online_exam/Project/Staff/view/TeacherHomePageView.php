<?php
class TeacherHomePageView extends View{
	public function __construct($title=null){
		parent::__construct($title);
	}
	
	public function displayBody(){
	
	?>
		
        
<!-- header ends -->
<!-- content begins -->
<div id="content_bg">
  <div id="content">
	
          	<div id="left">
			<h1>Welcome to <?php echo $_SESSION["teacher_name"];?></h1>	
            	<div class="post">posted by awp3b</div>	
				<div class="text">
                <p>This website template is repeased under  a Creative Commons Attribution 2.5 License</p>
			    <p>We request you retain the full copyright notice below including the link to www.metamorphozis.com.<br />
			      This not only gives respect to the large amount of time given freely by the developers<br />
			      but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good 
			      reason) retain the full copyright we request you at least leave in place the<br />
			      Website Templates line, with Website Templates  linked to www.metamorphozis.com. If you refuse 
			      to include even this then support may be affected.<br />
                <br />
			      You are allowed to use this design only if you agree to the following conditions:<br />
			      - You cannot remove copyright notice from this design without our permission.<br />
			      - If you modify this design it still should contain copyright because it is based on our work.<br />
			      - You may copy, distribute, modify, etc... this template as long as link to our website remains untouched.<br />
			      For support visit <a href="http://www.metamorphozis.com/contact/contact.php">http://www.metamorphozis.com/contact/contact.php</a><br />
 				<br />
			      The Metamorphosis Design : 2014 </p>       </div>
		
			</div>	     	            
	</div>    
    </div>    

<?php }
}
