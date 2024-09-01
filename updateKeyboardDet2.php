<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<link href="flipkartcss.css" rel="stylesheet" type="text/css">
</head>
<center>
<form method="post" action="updateKeyboardDetPhp.php">
<div id="maindiv">
<div id="div2">
<table cellpadding="0" cellspacing="0">
<tr><td><div id="div2a"><img src="../cameraroll/img10.png" height="46" width="130"></div></td><td><div id="space"></div></td><td><div id="div2b"><input type="text" placeholder="Search for Products, Brands and More" name="m1" style="position:relative; height:44px; width:400px; border-radius:5px; border-style:solid; background-color:#D6E4E9;"></div></td><td width="40"></td><td><div id="div2c"></div></td><td><div id="space"></div></td><td><div id="div2d"><label style="position:relative; top:10px; font-size:19px; left:20px;"><a href="#"><b>Sign up</b></a></label></div></td><td><div id="space"></div></td><td><div id="div2d"><label style="position:relative; font-size:19px; top:10px; left:20px;"><b><a href="#">Login</b></a></label></div></td><td><div id="space"></label></div></div></td><td><div id="div2e"><label style="position:relative; top:10px; left:20px; font-size:19px;"><a href="#"><b>Become a seller</b></a></label></div></td></tr>
</table>
</div>
<div id="div3"></div>
<div id="div6"><img src="../cameraroll/img11.png" height="230" width=100%></div>
<div id="bodydiv">
<table cellpadding="0" cellspacing="0" width="1400">
<tr>
<td><div id="bodydiv1">
<table cellpadding="0" cellspacing="0" height="200" width="300">
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
<?php
$a1=$_REQUEST['z2'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
$res=mysql_query("select *from keyboard where CId='$a1'");
if($row=mysql_fetch_array($res))
{
?>
<table height="500" width="1100">
<tr><td colspan="10"><label style="position:relative; font-size:24px; color:#09F"><center><b>Update Keyboard Details</b></center></label></td></tr>
<tr><td width="40"></td><td></td><td><b>Company ID</b></td><td><input type="text" value="<?php echo $row['CId']; ?>" name="t1"/></td><td><b>Price</b></td><td><input type="number" value="<?php echo $row['Price']; ?>" name="t2"/></td><td><b><b>Vendor code</b></td><td><input type="text" value="<?php echo $row['VCode']; ?>" name="t3"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Sales Package</b></td><td><input type="text" value="<?php echo $row['salePak']; ?>" name="t4"/></td><td><b>Case Material</b></td><td><input type="text" value="<?php echo $row['CaseM']; ?>" name="t5"/></td><td><b>Model Name</b></td><td><input type="text" value="<?php echo $row['ModName']; ?>" name="t6"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>OS Supported</b></td><td><input type="text" value="<?php echo $row['OSSup']; ?>" name="t7"/></td><td><b>Designed For</td><td><input type="next" value="<?php echo $row['Designed']; ?>" name="t8"/></td><td><b>Type</b></td><td><input type="text" value="<?php echo $row['Type']; ?>" name="t9"></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Internet Key</td><td><input type="text" value="<?php echo $row['IKey']; ?>" name="t10"></td><td><b>Palm Rest</b></td><td>
<input type="text" value="<?php echo $row['PalmRest']; ?>" name="t11"></td><td><b>Touch Pad</b></td><td><input type="text" value="<?php echo $row['TouchPad']; ?>" name="t12"></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Stand Support</b></td><td><input type="text" value="<?php echo $row['StandSup']; ?>" name="t13"/></td><td><b>USB Rechargable</td><td><input type="text" value="<?php echo $row['USB']; ?>" name="t14"></td><td><b>No. of Batteries</b></td><td><input type="text" value="<?php echo $row['Battery']; ?>" name="t15"></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Switch Type</td><td><input type="text" value="<?php echo $row['Switch']; ?>" name="t16"></td><td><b>Width</td><td><input type="text" value="<?php echo $row['Width']; ?>" name="t17"></td><td><b>Height</b></td><td><input type="text" value="<?php echo $row['Height']; ?>" name="t18"></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Depth</b></td><td><input type="text" value="<?php echo $row['Depth']; ?>" name="t19"/></td><td><b>Weight</b></td><td><input type="text" value="<?php echo $row['Weight']; ?>" name="t20"/></td><td><b>Backlit</b></td><td><input type="text" value="<?php echo $row['Backlit']; ?>" name="t21"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Warrenty Summary</td><td><input type="text" value="<?php echo $row['WarrSum']; ?>" name="t22"></td><td><b>Covered in Warrenty</td><td><input type="text" value="<?php echo $row['CWarr']; ?>" name="t23"/></td><td><b>Device Type</td><td><input type="text" value="<?php echo $row['DevType']; ?>" name="t24"></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td><td><input type="submit" value="submit"/></td><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</div>
<?php
}
?>
</td>
</tr>
</table> 
</div>
<div id="div5"></div>
<div id="div7">
<table cellpadding="0" cellspacing="0" height="310" width="100%">
<tr><td>
<div id="div7a1">
<table cellpadding="0" cellspacing="0" height="210" width="100%">
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
<table cellpadding="0" cellspacing="0"  height="150" width="100%">
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
<table cellpadding="0" cellspacing="0" height="190" width="100%">
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
<table cellpadding="0" cellspacing="0" height="105" width="100%">
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
<table cellpadding="0" cellspacing="0" height="180" width="100%">
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
<table cellpadding="0" cellspacing="0" height="180" width="100%">
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
</table border="2" height="310" width="100%">
</div>
<div id="div7c"></div>
<div id="div7b">
<table cellpadding="0" cellspacing="0" height="60" width="100%">
<tr><td><label style=" color:#FFFFFF;"><b>Become a Seller</b></lable></td><td><label style=" color:#FFFFFF;"><b>Advertise</b></label></td><td><label style=" color:#FFFFFF;"><b>Gift Card
</b></label></td><td><label style=" color:#FFFFFF;"><b>Help Center</b></label></td><td><label style=" color:#FFFFFF;"><b>@2007-2023 Flipkart.com</b></label></td></tr>
</table>
</div>
</div>
</div>
</form>
</center>
<body>
</body>
</html>
