<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
$a1=$_REQUEST['z1'];
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
<table height="600" width="1100">
<tr><td colspan="10"><label style="position:relative; font-size:24px; color:#09F"><center><b>Update Mobile Details</b></center></label></td></tr>
<tr><td width="40"></td><td></td><td>Product Code</td><td><input type="text" value="<?php echo $row['PCode']; ?>" name="t1"/></td><td>Price</td><td><input type="number" value="<?php echo $row['Price']; ?>" name="t2"/></td></td><td>Vendor code</td><td><input type="text" value="<?php echo $row['VCode']; ?>" name="t3"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>In the box</td><td><input type="text" value="<?php echo $row['InBox']; ?>" name="t4"/></td><td>Model Number</td><td><input type="text" value="<?php echo $row['ModNum']; ?>" name="t5"/></td><td>Model Name</td><td><input type="text" value="<?php echo $row['ModName']; ?>" name="t6"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Browser type</td><td><select name="t7"><option>Smartphone</option></option></select></td><td>Color</td><td><input type="color" value="<?php echo $row['Color']; ?>" name="t8"/></td><td>SIM Type</td><td><select name="t9"><option>Single Sim</option><option>Dual Type</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Hybrid SIM slot</td><td><select name="t10"><option>Yes</option><option>No</option></select></td><td>Touchscreen</td><td><select name="t11"><option>Yes</option><option>No</option></select></td><td>OTG Compatible</td><td><select name="t12"><option>Yes</option><option>No</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Quick Charging</td><td><select name="t13"><option>Yes</option><option>No</option></select></td><td>Display size</td><td><input type="text" value="<?php echo $row['DisplayS']; ?>" name="t14"></td><td>Resolution type</td><td><select name="t15"><option>HD</option><option>full HD+</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Resolution</td><td><select name="t16"><option>2408x1080px</option><option>1920X1080px</option></select></td><td>Display Type</td><td><input type="text" value="<?php echo $row['DisplayT']; ?>" name="t17"/></td><td>Operating System</td><td><select name="t18"><option>Android 13</option><option>Android 11</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Processor Brand</td><td><input type="text" value="<?php echo $row['ProBrand']; ?>" name="t19"/></td><td>Processor Type</td><td><input type="text" value="<?php echo $row['ProType']; ?>" name="t20"/></td><td>Processor core</td><td><input type="text" value="<?php echo $row['ProCore']; ?>" name="t21"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Primary clock speed</td><td><input type="text" value="<?php echo $row['PClockSpd']; ?>" name="t22"/></td><td>Operating frequency</td><td><input type="text" value="<?php echo $row['OprFreq']; ?>" name="t23"/></td><td>Ineternal Storage</td><td><select name="t24"><option>128GB</option><option>256GB</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>RAM</td><td><select name="t25"><option>8GB</option><option>16GB</option></select></td><td>Memory card slot type</td><td><select name="t26"><option>Hybrid Slot</option><option>Single slot</option></select></td><td>Call Log Memory</td><td><select name="t27"><option>Yes</option><option>No</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Primary Camera Available</td><td><select name="t28"><option>Yes</option><option>No</option></select></td><td>Primary Camera</td><td><input type="text" value="<?php echo $row['PriCam']; ?>" name="t29"/></td><td>Primary Camera Features</td><td><input type="text" value="<?php echo $row['PriCamF']; ?>" name="t30"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Secondary Camera Available</td><td><select name="t31"><option>Yes</option><option>NA</option></select></td><td>Secondary Camera </td>
<td><input type="text" value="<?php echo $row['SecCam']; ?>" name="t32"/></td><td>Secondary Camera Features</td><td><input type="text" value="<?php echo $row['SecCamF']; ?>" name="t33"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Flashlight</td><td><select name="t34"><option>Rear Flashlight</option></option></select></td><td>Phonebook</td><td><select name="t35"><option>yes</option><option>No</option></select></td><td>Network Type</td><td><input type="text" value="<?php echo $row['Nettype']; ?>" name="t36"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>5G</td><td><select name="t37"><option>Yes</option><option>No</option></select></td><td>Bluetooth</td><td><select name="t38"><option>Yes</option><option>No</option></select></td><td>Wifi</td><td><select name="t39"><option>Yes</option><option>No</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Wifi Hotspot</td><td><select name="t40"><option>Yes</option><option>No</option></select></td><td>USB Connectivity</td><td><select name="t41"><option>Yes</option><option>No</option></select></td><td>Sim Size</td><td><select name="t42"><option>Nanosim</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>User Interface</td><td><input type="text" value="<?php echo $row['UserInt']; ?>" name="t43"/></td><td>Removable Battery</td><td><select name="t44"><option>Yes</option><option>No</option>
</select></td><td>SMS</td><td><select name="t45"><option>Yes</option><option>No</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td>FM Radio</td><td><select name="t46"><option>Yes</option><option>No</option></select></td><td>Battery Capacity</td><td><select name="t47"><option>5000MH</option><option>3000MH</option></select></td><td>Battery Type</td><td><input type="text" value="<?php echo $row['BatteryTyp']; ?>" name="t48"/></td><td></td></tr>
<tr><td></td><td></td><td>Width</td><td><input type="text" value="<?php echo $row['Wid1']; ?>" name="t49"/></td><td>Width</td><td><input type="text" value="<?php echo $row['Wid2']; ?>" name="t50"/></td><td>Depth</td><td><input type="text" value="<?php echo $row['Depth']; ?>" name="t51"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td>Weight</td><td><input type="text" value="<?php echo $row['Weight']; ?>" name="t52"/></td><td>Warrenty Summary</td><td><input type="text"value="<?php echo $row['WarrSum']; ?>" name="t53"/></td><td>Domestic Warrenty</td><td>
<select name="t54"><option>1 Year</option><option>2 Year</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td><td><input type="submit"  value="submit"/></td><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</div>
<?php
}
?></td>
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
<tr><td><label style=" color:#FFFFFF;"><b>Become a Seller</b></label></td><td><label style=" color:#FFFFFF;"><b>Advertise</b></label></td><td><label style=" color:#FFFFFF;"><b>Gift Card
</b></label></td><td><label style=" color:#FFFFFF;"><b>Help Center</b></label></td><td><label style=" color:#FFFFFF;"><b>@2007-2023 Flipkart.com</b></label></td></tr>
</table>
</div>
</div>
</div>
</center>
<body>
</body>
</html>
