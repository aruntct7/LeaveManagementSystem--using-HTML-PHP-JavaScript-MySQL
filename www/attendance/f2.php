<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div style="top:180px;left:100px;width:1000px;height:320px 
position:absolute;overflow:auto;z-index:1">
<table border="10"width="100%">

<tr>
<th>ROLLNO.</th>
<th>LNO.</th>
<th>FDATE</th>
<th>FSESSION</th>
<th>TDATE</th>
<th>TSESSION</th>
<th>LTYPE</th>
<th>REASON</th>
<th>STATUS</th>
<th>DOE</th>
</tr>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);
session_start();
$sql="select * from leaves where fid='".$_SESSION['usr']."' and status='POSTED'";
$result=mysql_query("$sql");
while($db_field=mysql_fetch_assoc($result))
{
	$j=$db_field['sid'];
	$i=$db_field['leavno'];
	$a=$db_field['fromdate'];
	$b=$db_field['fromsess'];
	$c=$db_field['todat'];
	$d=$db_field['tosess'];	
	$e=$db_field['leavtype'];
    $f=$db_field['reason'];
    $g=$db_field['status'];
	$h=$db_field['doe'];
	print("<tr>");
	print("<td align='centre'>$j</td>");
	print("<td align='centre'>$i</td>");
	print("<td align='centre'>$a</td>");
	print("<td align='centre'>$b</td>");
	print("<td align='centre'>$c</td>");
	print("<td align='centre'>$d</td>");
	print("<td align='centre'>$e</td>");
    print("<td align='centre'>$f</td>");
	print("<td align='centre'>$g</td>");
	print("<td align='centre'>$h</td>");

	

print("<td align='center'width='75'><a href = 'response.php?key=".$j."&key1=".$i."'><img src='images/correct.jpg' height='20' width='20'border='0'></img></a></td>");

print('</tr>');
}
?>
</body>
</html>