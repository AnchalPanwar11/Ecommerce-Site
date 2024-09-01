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
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
mysql_query("update customer set CUName='$a1', Country='$a3', State='$a4', City='$a5', Landmark='$a6', Pincode='$a7', MobNo='$a8' where CUEmailId='$a2'");
mysql_close();
$redirect="Location:customerProfile.php";
header($redirect);
?>
</body>
</html>