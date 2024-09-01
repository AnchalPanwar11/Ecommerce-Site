<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="flipkartcss.css" rel="stylesheet" type="text/css">
</head>
<center>
<div id="maindiv">
<div id="div2">
<table cellpadding="0" cellspacing="0">
<tr><td><div id="div2a"><img src="../cameraroll/img10.png" height="46" width="130"></div></td><td><div id="space"></div></td><td><div id="div2b"><input type="text" placeholder="Search for Products, Brands and More" name="m1" style="position:relative; height:44px; width:400px; border-radius:5px; border-style:solid; background-color:#D6E4E9;"></div></td><td width="40"></td><td><div id="div2c"></div></td><td><div id="space"></div></td><td><div id="div2d"><label style="position:relative; top:10px; font-size:19px; left:20px;"><a href="#"><b>Sign up</b></a></label></div></td><td><div id="space"></div></td><td><div id="div2d"><label style="position:relative; font-size:19px; top:10px; left:20px;"><b><a href="#">Login</b></a></label></div></td><td><div id="space"></label></div></div></td><td><div id="div2e"><label style="position:relative; top:10px; left:20px; font-size:19px;"><a href="#"><b>Become a seller</b></a></label></div></td></tr>
</table>
</div>
<div id="div6"><img src="../cameraroll/img11.png" height="230" width="1400"></div>
<div id="bodydiv">
<table cellpadding="0" cellspacing="0" width="1400">
<tr>
<td><div id="bodydiv1">
<table cellpadding="0" cellspacing="0" height="200" width="300">
<tr><td height="40"></td></tr>
<tr><td height="40"></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="vendorProfile.php"><b>My Profile</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="updateVenProfile.php"><b>Update Profile</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="AddProduct.php"><b>Add Product</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="myOrderVendor.php"><b>My Products</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="StatusCheckVendor.php"><b>Delivered Orders</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="StatusCheckVendorPending.php"><b>Pending Orders</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="StatusCheckVendorCen.php"><b>Cancelled Orders</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="index1.html"><b>Logout</b></a></label></div></td></tr>
<tr><td><div id="sidediv2"></div></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
</div></td>
<td><div id="bodydiv2">
<table height="250" width="1400">
<tr><td>
<div id="div5"></div>
<?php
$a1=$_REQUEST['z2'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
$res=mysql_query("select *from mobiledet where PCode='$a1'");
if($row=mysql_fetch_array($res))
{
?>
<div id="div8twoA">
<table  cellpadding="0" cellspacing="0" height="530">
<tr><td><label style="font-size:26px;"><b><?php echo $row['ModName']; ?></b></label></td></tr>
<tr><td><label style="color:#999; font-size:16px">733 Rating & 136 Reviews</label></td></tr>
<tr><td><label style="font-size:28px;"><b><?php echo $row['Price']; ?></b></label></td></tr>
</table>
</div>

<div id="myproduct">
<table  height="650"  width="1100">
<tr><td rowspan="18" height="200" width="220"><div id="picdiv"><img src="../cameraroll/Screenshot (25).png" height="180" width="180" style="position:relative; left:10px; top:-180px" /></div></td><td width="80"></td><td><label style="position:relative; left:20px"><b>Price</b></label></td><td><font color="#999999"><?php echo $row['Price']; ?></font></td><td><label style="position:relative;"><b>Operating System</b></label></td><td><font color="#999999"><?php echo $row['OS']; ?></font></td><td width="50"></td></tr>
<tr><td width="80"></td><td><label style="position:relative; right:30px"><center><b>Processor Brand</b></center></label></td><td><font color="#999999"><?php echo $row['ProBrand']; ?></font></td><td><label style="position:relative;"><b>Processor Core</b></label></td><td><font color="#999999"><?php echo $row['ProCore']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; right:30px"><center><b>Internal Storage</b></center></label></td><td><font color="#999999"><?php echo $row['IntStorage']; ?></font></td><td><label style="position:relative;"><b>RAM</b></label></td><td><font color="#999999"><?php echo $row['RAM']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Model Name</b></label></td><td><font color="#999999"><?php echo $row['ModName']; ?></font></td><td><label style="position:relative;"><b>Color</b></label></td><td><font color="#999999"><?php echo $row['Color']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>SIM Type</b></label></td><td><font color="#999999"><?php echo $row['SIMType']; ?></font></td><td><label style="position:relative;"><b>Browser Type</b></label></td><td><font color="#999999"><?php echo $row['BrowserT']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Touch Screen</b></label></td><td><font color="#999999"><?php echo $row['TouchS']; ?></font></td><td><label style="position:relative;"><b>Display Screen</b></label></td><td><font color="#999999"><?php echo $row['DisplayS']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Resolution Type</b></label></td><td><font color="#999999"><?php echo $row['ResType']; ?></font></td><td><label style="position:relative;"><b>Processor Type</b></label></td><td><font color="#999999"><?php echo $row['ProType']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Memory Slot</b></label></td><td><font color="#999999"><?php echo $row['MemSlot']; ?></font></td><td><label style="position:relative;"><b>Primary Camera</b></label></td><td><font color="#999999"><?php echo $row['PriCam']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Secondary Camera</b></label></td><td><font color="#999999"><?php echo $row['SecCam']; ?></font></td><td><label style="position:relative;"><b>Flash</b></label></td><td><font color="#999999"><?php echo $row['Flash']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Network Type</b></label></td><td><font color="#999999"><?php echo $row['Nettype']; ?></font></td><td><label style="position:relative;"><b>5G</b></label></td><td><font color="#999999"><?php echo $row['5G']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Bluetooth</b></label></td><td><font color="#999999"><?php echo $row['Bluetooth']; ?></font></td><td><label style="position:relative;"><b>Wifi</b></label></td><td><font color="#999999"><?php echo $row['Wifi']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Hotspot</b></label></td><td><font color="#999999"><?php echo $row['Wifihots']; ?></font></td><td><label style="position:relative;"><b>USB Slot</b></label></td><td><font color="#999999"><?php echo $row['USBc']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>SIM Size</b></label></td><td><font color="#999999"><?php echo $row['SimSize']; ?></font></td><td><label style="position:relative;"><b>User Interface</b></label></td><td><font color="#999999"><?php echo $row['UserInt']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Battery</b></label></td><td><font color="#999999"><?php echo $row['RemBattery']; ?></font></td><td><label style="position:relative;"><b>SMS</b></label></td><td><font color="#999999"><?php echo $row['SMS']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>FM Radio</b></label></td><td><font color="#999999"><?php echo $row['FMRadio']; ?></font></td><td><label style="position:relative;"><b>battery Capacity</b></label></td><td><font color="#999999"><?php echo $row['BatteryCap']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Battery Type</b></label></td><td><font color="#999999"><?php echo $row['BatteryTyp']; ?></font></td><td><label style="position:relative;"><b>Width</b></label></td><td><font color="#999999"><?php echo $row['Wid1']; ?></font></td><td></td></tr>
<tr><td width="80"></td><td><label style="position:relative; left:20px"><b>Depth</b></label></td><td><font color="#999999"><?php echo $row['Depth']; ?></font></td><td><label style="position:relative;"><b>Domestic Warrenty</b></label></td><td><font color="#999999"><?php echo $row['DomWarr']; ?></font></td><td></td></tr>
</table>
<div id="yesno">
<table height="35" width="1100">
<tr><td width="315"></td><td></td><td><label style="position:relative;"><b>Do you want to remove it?</b></label></td><td><form method="post" action="deleteProductMobPhp.php" ><input type="hidden" name="r1" value="<?php echo $row['PCode'];?>" /><input type="submit" value="Yes" /></form></td><td><input type="submit" value="No" /></td><td width="320"></td></tr>
</table>
</div>
</div>
<?php
}
?>
</td></tr>
</table>
</div></td>
</tr>
</table> 
</div>
<div id="div8">
<div id="div7">
<div id="div7a">
<table cellpadding="0" cellspacing="0" height="310" width="1400">
<tr><td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0" height="210" width="233">
<tr><td></td><td><label style=" color:#CCCCCC;">ABOUT</label></td><td></td></tr>
<tr><td>&nbsp;</td><td></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Contact Us</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>About us</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Careers</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Flipkart Stories</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Press</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Flipkart Wholesale</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Cleartip</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Corporate Information</b></a></td><td></td></tr>
</table>
</div>
</td>
<td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0"  height="150" width="234">
<tr><td></td><td><label style=" color:#CCCCCC;">HELP</label></td><td></td></tr>
<tr><td>&nbsp;</td><td></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Payments</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Shipping</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Cancellation & returns</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>FAQ</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Report Infringement</b></a></td><td></td></tr>
</table>
</div>
</td>
<td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0" height="190" width="233">
<tr><td></td><td><label style=" color:#CCCCCC;">CONSUMER POLICY</label></td><td></td></tr>
<tr><td>&nbsp;</td><td></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Cancellation & Return</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Term of Use</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Security</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Privacy</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Sitemap</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Grievance Readressal</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>ERP Compilance</b></a></td><td></td></tr>
</table>
</div>
</td>
<td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0" height="105" width="234">
<tr><td></td><td><label style=" color:#CCCCCC;">SOCIAL</label></td><td></td></tr>
<tr><td>&nbsp;</td><td></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Facebook</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>Twitter</b></a></td><td></td></tr>
<tr><td></td><td><a href="#"><b>You Tube</b></a></td><td></td></tr>
</table>
</div>
</td>
<td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0" height="180" width="233">
<tr><td></td><td><label style=" color:#CCCCCC;">Mail Us:</label></td><td></td></tr>
<tr><td>&nbsp;</td><td></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Flipkart Internet Private Limited,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Bulding Alyssa, Begonia and</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Clove Embassy Tech Village,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Outer Ring Road, Devarabeesanahali Village,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Bengaluru, 560103,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Karnataka, India</b></label></td><td></td></tr>
</table>
</div>
</td>
<td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0" height="180" width="234">
<tr><td></td><td><label style=" color:#CCCCCC;">Registered Office Address:</label></td><td></td></tr>
<tr><td>&nbsp;</td><td></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Flipkart Internet Private Limited,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Bulding Alyssa, Begonia and</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Clove Embassy Tech Village,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Outer Ring Road, Devarabeesanahali Village,</b></label></td><td></td></tr>
<tr><td></td><td><label style=" color:#FFFFFF;"><b>Bengaluru, 560103,</b></label></td><td></td></tr>

<tr><td></td><td><label style=" color:#FFFFFF;"><b>Karnataka, India</b></label></td><td></td></tr>
</table>
</div>
</td>
</tr>
</table>
</div>
<div id="div7c"></div>
<div id="div7b">
<table cellpadding="0" cellspacing="0" height="60" width="1400">
<tr><td><label style=" color:#FFFFFF;"><b>Become a Seller</b></lable></td><td><label style=" color:#FFFFFF;"><b>Advertise</b></label></td><td><label style=" color:#FFFFFF;"><b>Gift Card
</b></label></td><td><label style=" color:#FFFFFF;"><b>Help Center</b></label></td><td><label style=" color:#FFFFFF;"><b>@2007-2023 Flipkart.com</b></label></td></tr>
</table>
</div>
</div>
</div>
</center>
<body>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>