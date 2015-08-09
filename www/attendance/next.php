<?php 
 session_start();	 	  
		$con=mysql_connect("localhost","root","");
		if(!$con)
		 die('Could Not Connect:'.mysql_error());
		 else
		   echo 'Connected';
		
 	     mysql_select_db("package",$con);

      
 
         
		 if($_REQUEST['type1']=="l")
		 {
			 $_SESSION['type']="LEAVE";
		 }

		  if($_REQUEST['type1']=="m")
		 {
			 $_SESSION['type']="MEDICAL";
		 }
		  if($_REQUEST['type1']=="e")
		 {
			 $_SESSION['type']="EXEMPTION";
		 }
		
		 $_SESSION['reason']=$_POST['reason'];
		 
		  	 
		if($_REQUEST['type2']=="h")
		 {
	   		 header ("location:half.php");
			 
 		 }
		 if($_REQUEST['type2']=="f")
		 {
			 header ("location:full.php");
		 }
		 if($_REQUEST['type2']=="c")
		 {
			 header ("location:continuous.php");
		 }
		 
		 ?>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="SUBMIT" value="Continue"/>
         
         </form>
		  <!--p><img src="images/pic01.png" width="580" height="300" alt="" /></p-->

            
            
			
			
		  <!--p>This is Open Tools ,a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org">FCT</a>.  The photo used in this template is from <a href="http://fotogrph.com/">Fotogrph</a>.  This free template is released under a <a href="http://creativecommons.org/licenses/by/3/">Creative Commons Attributions 3.0</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
		</div>
		<div id="two-column">
			<div class="box-content">
				<h2 class="title title01">Nulla luctus eleifend</h2>
				<p>Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque quis.</p>
			</div-->
		  <!--div class="box-content">
				<h2 class="title title02">Maecenas luctus lectus</h2>
				<p>Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet. In posuere  odio quisque semper augue mattis maecenas ligula.</p>
			</div-->
		<!--/div>
	</div>
	<!--div id="sidebar">
		<div id="sbox1"-->
        
            <!--ul class="list-style1">
				<li class="first">
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus, cursus egestas at sem. </p>
					<p><a href="#" class="link-style">Read More</a></p>
				</li>
				<li>
					<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus  at sem. </p>
					<p><a href="#" class="link-style">Read More</a></p>
				</li>
			</ul>
		</div>
		<div id="sbox2">
			<h2>Testimonials</h2>
			<p class="testimonial">Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
			<div class="author"><img src="images/pic03.jpg" width="80" height="80" alt="" /><span class="name">Juan Dela Cruz</span><span class="position">Company CEO</span><span>MyCompany, LLC</span></div>
		</div-->
		<!--div id="sbox3">
        <p></p>
            <h2><a href="#" accesskey="2" title="">PROFILE</a></h2>
            <p></p>
			<!--p></p>
            <h2><a href="leave.php" accesskey="2" title="">LEAVE ENTRY</a></h2>
            <p></p-->
            <!--p></p>
            <h2><a href="#" accesskey="2" title="">COURSE DETAILS</a></h2>
            <p></p>
            
			<!--h2>Vestibulum luctus</h2>
			<ul class="style3">
				<li class="first"><a href="#">Consectetuer adipiscing elit</a></li>
				<li><a href="#">Metus aliquam pellentesque</a></li>
				<li><a href="#">Suspendisse iaculis mauris</a></li>
				<li><a href="#">Urnanet non molestie semper</a></li>
				<li><a href="#">Proin gravida orci porttitor</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="footer" class="container">
	<div id="fbox1">
		<h2>Aenean elementum</h2>
		<ul class="style1">
			<li class="first"><a href="#">Consectetuer adipiscing elit</a></li>
			<li><a href="#">Metus aliquam pellentesque</a></li>
			<li><a href="#">Suspendisse iaculis mauris</a></li>
			<li><a href="#">Urnanet non molestie semper</a></li>
			<li><a href="#">Proin gravida orci porttitor</a></li>
		</ul>
	</div>
	<div id="fbox2">
		<h2>Vestibulum luctus</h2>
		<ul class="style1">
			<li class="first"><a href="#">Consectetuer adipiscing elit</a></li>
			<li><a href="#">Metus aliquam pellentesque</a></li>
			<li><a href="#">Suspendisse iaculis mauris</a></li>
			<li><a href="#">Urnanet non molestie semper</a></li>
			<li><a href="#">Proin gravida orci porttitor</a></li>
		</ul>
	</div>
	<div id="fbox3">
		<h2>Etiam malesuada</h2>
		<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Donec leo. Vivamus fermentum nibh in augue.</p>
		<ul class="style2">
			<li><a href="#"><img src="images/social03.png" width="32" height="32" alt="" /></a></li>
			<li><a href="#"><img src="images/social01.png" width="32" height="32" alt="" /></a></li>
			<li><a href="#"><img src="images/social04.png" width="32" height="32" alt="" /></a></li>
			<li><a href="#"><img src="images/social02.png" width="32" height="32" alt="" /></a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html>
