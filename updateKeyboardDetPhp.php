<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a1=$_REQUEST['t1'];
$a2=$_REQUEST['t2'];
$a3=$_REQUEST['t3'];
$a4=$_REQUEST['t4'];
$a5=$_REQUEST['t5'];
$a6=$_REQUEST['t6'];
$a7=$_REQUEST['t7'];
$a8=$_REQUEST['t8'];
$a9=$_REQUEST['t9'];
$a10=$_REQUEST['t10'];
$a11=$_REQUEST['t11'];
$a12=$_REQUEST['t12'];
$a13=$_REQUEST['t13'];
$a14=$_REQUEST['t14'];
$a15=$_REQUEST['t15'];
$a16=$_REQUEST['t16'];
$a17=$_REQUEST['t17'];
$a18=$_REQUEST['t18'];
$a19=$_REQUEST['t19'];
$a20=$_REQUEST['t20'];
$a21=$_REQUEST['t21'];
$a22=$_REQUEST['t22'];
$a23=$_REQUEST['t23'];
$a24=$_REQUEST['t24'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
mysql_query("update keyboard set Price='$a2', VCode='$a3', salePak='$a4', CaseM='$a5', ModName='$a6', OSSup='$a7', Designed='$a8', Type='$a9', IKey='$a10', PalmRest='$a11', TouchPad='$a12', StandSup='$a13', USB='$a14', Battery='$a15', Switch='$a16', Width='$a17', Height='$a18', Depth='$a19', weight='$a20', Backlit='$a21', WarrSum='$a22', CWarr='$a23', DevType='$a24' where CId='$a1'");
mysql_close();
?>
</body>
</html>