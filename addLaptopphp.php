<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$img=$_FILES['file']["name"];
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
$a25=$_REQUEST['t25'];
$a26=$_REQUEST['t26'];
$a27=$_REQUEST['t27'];
$a28=$_REQUEST['t28'];
$a29=$_REQUEST['t29'];
$a30=$_REQUEST['t30'];
$a31=$_REQUEST['t31'];
$a32=$_REQUEST['t32'];
$a33=$_REQUEST['t33'];
$a34=$_REQUEST['t34'];
$a35=$_REQUEST['t35'];
$a36=$_REQUEST['t36'];
$a37=$_REQUEST['t37'];
$a38=$_REQUEST['t38'];
$a39=$_REQUEST['t39'];
$a40=$_REQUEST['t40'];
$a41=$_REQUEST['t41'];
$a42=$_REQUEST['t42'];
$a43=$_REQUEST['t43'];
$a44=$_REQUEST['t44'];
$a45=$_REQUEST['t45'];
$a46=$_REQUEST['t46'];
$a47=$_REQUEST['t47'];
$a48=$_REQUEST['t48'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
mysql_query("insert into laptopdet values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17'
,'$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$img')");
mysql_close();

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&& (($_FILES["file"]["size"]/1024) < 7000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
   /* echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo  $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  } 
else
  {
  echo "Invalid file";
  }


$redirect="Location:AddProduct.php";
header($redirect);

?>
</body>
</html>