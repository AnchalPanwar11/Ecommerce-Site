<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$a1=$_REQUEST['e1'];
$a2=$_REQUEST['e2'];
session_start();
$_SESSION['emrid']=$a1;
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
$res=mysql_query("select *from customer where CUEmailId='$a1' and Password='$a2' ");
if($row=mysql_fetch_array($res))
{
	echo"Valid Info";
	$redirect="Location: customerProfile.php";
	header($redirect);
}
else
{
	echo"Invalid Info";
}
?>
</body>
</html>