<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['x1'];
session_start();
$_SESSION['emrid']=$a1;
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
$res=mysql_query("select *from vendor where CId='$a1'");
if($row=mysql_fetch_array($res))
{
	echo"Valid Info";
	$redirect="Location: vendorProfile.php";
	header($redirect);
}
else
{
	echo"Invalid Info";
}
?>
</body>
</html>