<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Open Tools 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130803

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">PM INSTITUTIONS</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="try.html" accesskey="2" title="">HOME PAGE</a></li>	
             <li class="active"><a href="student.html" accesskey="1" title="">SIGNOUT</a></li>	
        		
			</ul>
	</div>
</div>



<div id="page" class="container">
			<h1>STUDENT LEAVE APPLY</h1>
	<div id="content">
	  <div id="onecolumn">
        <form action="next.php" method="post">
        <p></p>
     
      <p>
        <label for="rollno" class="rollno"><strong>ROLLNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
       
        <input id="rollno" name="rollno"
<?php
session_start();
echo"input type=text placeholder=$_SESSION[uwr]";
$id=$_SESSION['uwr'];
?>

<label for="name" class="name" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
        <input id="name" name="name" 
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
$r=mysql_query("select * from student where sid='".$id."'") ;
$s=mysql_fetch_array($r);
$_SESSION['sn']=$s['sname'];
echo"input type=text placeholder=$_SESSION[sn]";
?>

</br></br>
   <label for="branch" class="branch" ><strong>BRANCH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
     <input id="branch" name="branch" 
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
$r1=mysql_query("select cname from course,student where sid='".$id."' and student.cid=course.cid") ;
$s1=mysql_fetch_array($r1);
$_SESSION['sc']=$s1['cname'];
echo"input type=text placeholder=$_SESSION[sc]";
?>


</br>
     
    <label for="sem" class="sem" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEM NO.&nbsp;&nbsp;&nbsp;</strong></label>
        <input id="sem" name="sem" 
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
$r2=mysql_query("select semno from student where sid='".$id."'") ;
$s2=mysql_fetch_array($r2);
$_SESSION['sm']=$s2['semno'];


echo"input type=text placeholder=$_SESSION[sm]";
?> 
        
      
</br></br>
        <label for="std" class="std" ><strong>START DATE</strong></label>
      <input id="std" name="stdd" 
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
$r3=mysql_query("select startdate from semester,student where sid='".$id."' and student.semno=semester.semno") ;
$s3=mysql_fetch_array($r3);
$_SESSION['sd']=$s3['startdate'];
echo"input type=text placeholder=$_SESSION[sd]";
?>
      
        <label for="todt" class="todt" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END DATE&nbsp;</strong></label>
      <input id="todt" name="todt" 
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
$r3=mysql_query("select enddate from semester,student where sid='".$id."' and student.semno=semester.semno") ;
$s3=mysql_fetch_array($r3);
$_SESSION['se']=$s3['enddate'];
echo"input type=text placeholder=$_SESSION[se]";
?>

</br>        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEAVE TYPE
          <select name="type1">
          <option>Select</option>
            <option value="l">LEAVE</option>
            <option value="m">MEDICAL</option>
            <option value="e">EXEMPTION</option>
          </select>
        </h4>
         </p>
          <p>
        <label for="reason" class="reason" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REASON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
        <input id="reason" name="reason" required type="text"/>
        </p>
        
		
  <h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAY TYPE&nbsp;&nbsp;&nbsp;
          <select name="type2">
            <option>Select</option>
            <option value="h">HALF DAY</option>
            <option value="f">FULL DAY</option>
            <option value="c">CONTINUOUS DAYS</option>
          </select>
        </h4>
         </p>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
       <input type="submit" value="Continue"/>
    
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
		</div>
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
