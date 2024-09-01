<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a1='';
$a2='';
$a3='';
$a4='';
$a5='';
$a6='';
$a7='';
$a8='';
$a9=$_REQUEST['n1'];
$a10=$_REQUEST['n2'];
$a11=$_REQUEST['n3'];
$a12=$_REQUEST['n4'];
$a13=$_REQUEST['n5'];
$a14=$_REQUEST['n6'];
$a15=$_REQUEST['n7'];
$a16=$_REQUEST['n8'];
$a17=$_REQUEST['n9'];
$a18="Pending";
$a19=$_REQUEST['n9'];
session_start();
$email=$_SESSION['emrid'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
$res=mysql_query("select *from customer where CUEmailId='$email'");
if($row=mysql_fetch_array($res))
{
	$a1=$row['CUName'];
	$a2=$row['CUEmailId'];
	$a3=$row['Country'];
	$a4=$row['State'];
	$a5=$row['City'];
	$a6=$row['Landmark'];
	$a7=$row['Pincode'];
	$a8=$row['MobNo'];
}

mysql_query("INSERT INTO addcartlap VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19')");
mysql_close();
?>
</body>
</html>