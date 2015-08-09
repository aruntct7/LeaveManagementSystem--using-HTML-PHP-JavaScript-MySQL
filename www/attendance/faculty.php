<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
		<h1><a href="#">PM INSTITUTIONS</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="try.html" accesskey="2" title="">HomePage</a></li>	
        			<li class="active"><a href="fclty.html" accesskey="1" title="">SIGNOUT</a></li>
			<!--li><a href="#" accesskey="4" title="">Contact</a></li-->
		</ul>
	</div>
</div>
<div id="page" class="container">


<form action="f2.php" method="post">


<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
$_SESSION['usr']=$_POST['username'];
$_SESSION['pwd']=$_POST['password'];
$db = new PDO('mysql:host=localhost;dbname=package','root','');

$stmt = $db->prepare('CALL facpass(?,?)');
$stmt->bindParam(1,$_SESSION['usr'],PDO::PARAM_STR);
$stmt->bindParam(2,$_SESSION['pwd'],PDO::PARAM_STR);
$stmt->execute();



if(!isset($_SESSION['usr'])||!isset($_SESSION['pwd']))
{header("location:fclty.html");}


$result=mysql_query("select * from dummy");
$hai=mysql_fetch_array($result);

if($hai['fpwd']==1)
{
	    
		header("location:f2.php");
/*    echo("<script>alert('working???')</script>");  */
}    

else
	{ /*echo("<script>alert('Wrong password')</script>");*/
       header("location:fclty.html");
	   
	   
	   
	   }  


	

?>
	  <p><br /></p>
           
     </p>
     <p>
   
     <p><br  /></p>
     <p><br  /></p>
     <p><br  /></p>
     <p><br  /></p>
     <p> 
     </p>
     </form>
     

