<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);

echo "'".$_SESSION['uwr']."'";

?>
<div style="top:2500px;left:150px;width:1000px;height:320px 
position:absolute;overflow:auto;z-index:1">
<table border="8"width="100%">
<tr>
<th>FROMDATE</th>
<th>FROMSESSION</th>
<th>TODATE</th>
<th>TOSESSION</th>
<th>LEAVETYPE</th>
<th>REASON</th>
<th>STATUS</th>
<th>ENTRY DATE</th>
</tr>

<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);

$sql="select * from leaves where sid='".$_SESSION['uwr']."'";
$result=mysql_query("$sql");
while($db_field=mysql_fetch_assoc($result))
{
	$a=$db_field['fromdate'];
	$b=$db_field['fromsess'];
	$c=$db_field['todat'];
	$d=$db_field['tosess'];	
	$e=$db_field['leavtype'];
    $f=$db_field['reason'];
    $g=$db_field['status'];
	$h=$db_field['doe'];
	print("<tr>");
	print("<td align='centre'>$a</td>");
	print("<td align='centre'>$b</td>");
	print("<td align='centre'>$c</td>");
	print("<td align='centre'>$d</td>");
	print("<td align='centre'>$e</td>");
    print("<td align='centre'>$f</td>");
	print("<td align='centre'>$g</td>");
	print("<td align='centre'>$h</td>");

	print("</tr>");
}

?>
</body>
</ht>