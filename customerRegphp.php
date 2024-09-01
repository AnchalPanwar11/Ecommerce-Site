<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['c1'];
$a2=$_REQUEST['c2'];
$a3=$_REQUEST['c3'];
$a4=$_REQUEST['c4'];
$a5=$_REQUEST['c5'];
$a6=$_REQUEST['c6'];
$a7=$_REQUEST['c7'];
$a8=$_REQUEST['c8'];
$a9=$_REQUEST['c9'];
$a10=$_REQUEST['c10'];
$a11=$_REQUEST['c11'];
echo"done";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
mysql_query("INSERT INTO customer VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11');");
mysql_close();
$redirect="Location:index1.html";
header($redirect);
?>
</body>
</html>