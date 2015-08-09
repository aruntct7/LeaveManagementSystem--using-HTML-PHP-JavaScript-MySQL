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

			<li><a href="try.html" accesskey="2" title="">HOME</a></li>	
             <li class="active"><a href="student.html" accesskey="1" title="">SIGNOUT</a></li>		

	</div>
</div>
<div id="page" class="container">
			<h1>STUDENT LEAVE ENTRY</h1>
	<div id="content">
	 <!-- <div id="onecolumn"> 
-->        <form action="con1.php" method="post"/>
        <p></p>
        <h3>CONTINUOUS DAYS LEAVE</h3>
        <p><br  /></p>
      <p>      
        <label for="fdate" class="fdate" ><strong>LEAVE FROM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
        <input id="fdate" name="fdate" required type="date"/>
        
        <label for="tdate" class="tdate" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
        <input id="tdate" name="tdate" required type="date"/>
        </p>
        
        <p>
        <label for="fsession" class="fsession" ><strong>FROM SESSION&nbsp;</strong></label>
                  <select name="fsession">
            <option>Select</option>
            <option value="fn">FORENOON</option>
            <option value="an">AFTERNOON</option>          
          </select> <label for="tsession" class="tsession" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO SESSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                  <select name="tsession">
            <option>Select</option>
            <option value="fn">FORENOON</option>
            <option value="an">AFTERNOON</option>
          </p>
          <p> 
             </br>
            <input type="submit" value="APPLY"/>
          </p>


</form>