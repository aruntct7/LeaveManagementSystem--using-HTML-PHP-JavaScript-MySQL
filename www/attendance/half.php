
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
		     
print_r($_SESSION);			 
			     
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">PM INSITUTIONS</a></h1>
	</div>
	<div id="menu">
		<ul>
        <li><a href="try.html" accesskey="2" title="">HOME</a></li>	
             <li class="active"><a href="student.html" accesskey="1" title="">SIGNOUT</a></li>

	
		</ul>
	</div>
</div>
<div id="page" class="container">
			<h1>STUDENT LEAVE ENTRY</h1>
	<div id="content">
	  <div id="onecolumn">
        <form action="final.php" method="post">

        <p></p>
        <h3>HALF A DAY LEAVE</h3>
        <p><br  /></p>
      <p>      
        <label for="ldate" class="ldate" ><strong>LEAVE DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
        <input id="ldate" name="ldate" required type="date"/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="session" class="session" ><strong>SESSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label>
                  <select name="session">
            <option>Select</option>
            <option value="fn">FORENOON</option>
            <option value="an">AFTERNOON</option>
            </select>                
          </p>
          <p><br  /></p>   
         
		                
          <p>
            <input type="submit" value="APPLY" />
          </p>
      <p><br /></p>
      <p></p> 
    
    </p>
    </form>
