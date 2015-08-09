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

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);

session_start();
$_SESSION['uwr']=$_POST['rollno'];
$_SESSION['psd']=$_POST['password'];

//$sql="call facpass ('".$_SESSION["usr"]."','".$_SESSION["pwd"]."')";

$db = new PDO('mysql:host=localhost;dbname=package','root','');

$stmt = $db->prepare('CALL Studpasss(?,?)');
$stmt->bindParam(1,$_SESSION['uwr'],PDO::PARAM_STR);
$stmt->bindParam(2,$_SESSION['psd'],PDO::PARAM_STR);
$stmt->execute();



if(!isset($_SESSION['uwr'])||!isset($_SESSION['psd']))
{header("location:student.html");}


$r=mysql_query("select * from dummy");
$h=mysql_fetch_array($r);

if($h['spwd']==1)
{
		header("studlogin.php");

}    

else
	{ 
       header("location:student.html");
	  
	 }  

?>
	<div id="logo">
		<h1><a href="#">PM INSTITUTION</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="try.html" accesskey="2" title="">HOME</a></li>	
             <li class="active"><a href="student.html" accesskey="1" title="">SIGN OUT</a></li>
        	
			</ul>
	</div>
</div>
<div id="page" class="container">
	<div id="content">
		<div id="onecolumn">
 
			<!--p><img src="images/pic01.png" width="580" height="300" alt="" /></p-->
			<h2>STUDENTS PAGE</h2>
			
		</div>
	</div>
	<div id="sidebar">
		<div id="sbox1">
        
            <p></p>
            <h2><a href="#" accesskey="2" title="">PROFILE</a></h2>
            <p></p>
			<p></p>
            <h2><a href="l1.php" accesskey="2" title="">LEAVE ENTRY</a></h2>
            <p></p>
            <p></p>
            <h2><a href="#" accesskey="2" title="">COURSES</a></h2>
            <p></p>

			
