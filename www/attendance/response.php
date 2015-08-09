<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$ctrl=$_REQUEST['key'];
$ctrl1=$_REQUEST['key1'];

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);

$sql="UPDATE LEAVES SET STATUS='CONFIRMED' WHERE SID='".$ctrl."' AND LEAVNO='".$ctrl1."' ";
$RESULT =mysql_query($sql);
header("location:f2.php");

?>

</body>
</html>