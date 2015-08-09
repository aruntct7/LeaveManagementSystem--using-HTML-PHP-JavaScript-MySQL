<div style="top:180px;left:150px;width:1000px;height:320px 
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
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("package",$con);


		
	  $_SESSION['fdt']=$_POST['fdate'];
	  $_SESSION['ldt']=$_POST['tdate'];
		  if($_POST['fsession']=='fn')
		   $_SESSION['frsess']='FORENOON';
		  else if($_POST['fsession']=='an')
		    $_SESSION['frsess']='AFTERNOON';
		      
          if($_POST['tsession']=='fn')
		   $_SESSION['tosess']='FORENOON';
		  else if($_POST['tsession']=='an')
		    $_SESSION['tosess']='AFTERNOON';
		  
$db= new PDO('mysql:host=localhost;dbname=package','root','');
//$stm = $d->prepare('CALL leaveinsert("uwr","fdt","frsess","tosess","ldt","type","reason","sm")');
$stmt=$db->prepare('CALL leaveinsert(?,?,?,?,?,?,?,?)');

$stmt->bindParam(1,$_SESSION['uwr'],PDO::PARAM_STR );
$stmt->bindParam(2,$_SESSION['fdt'],PDO::PARAM_STR);
$stmt->bindParam(3,$_SESSION['frsess'],PDO::PARAM_STR);
$stmt->bindParam(4,$_SESSION['tosess'],PDO::PARAM_STR);
$stmt->bindParam(5,$_SESSION['ldt'],PDO::PARAM_STR);
$stmt->bindParam(6,$_SESSION['type'],PDO::PARAM_STR);
$stmt->bindParam(7,$_SESSION['reason'],PDO::PARAM_STR);
$stmt->bindParam(8,$_SESSION['sm'],PDO::PARAM_STR);
$stmt->execute();



//DISPLAYING IN TABLE FORMAT:
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


