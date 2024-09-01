<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<link href="flipkartcss.css" rel="stylesheet" type="text/css">
</head>
<form method="post" action="addLaptopphp.php" enctype="multipart/form-data">
<center>
<div id="maindiv">
<div id="div2">
<table cellpadding="0" cellspacing="0">
<tr><td><div id="div2a"><img src="../cameraroll/img10.png" height="46" width="130"></div></td><td><div id="space"></div></td><td><div id="div2b"><input type="text" placeholder="Search for Products, Brands and More" name="m1" style="position:relative; height:44px; width:400px; border-radius:5px; border-style:solid; background-color:#D6E4E9;"></div></td><td width="40"></td><td><div id="div2c"></div></td><td></td><td><div id="div2d"><label style="position:relative; top:10px; font-size:19px; left:9px;"><a href="vendorloginform.php"><b>AgentLogin</b></a></label></div></td><td></td><td><div id="div2d"><label style="position:relative; font-size:19px; top:10px; left:20px;"><b><a href="custmorloginform.php">Login</b></a></label></div></td><td></label></div></td><td><div id="div2d"><label style="position:relative; top:10px; left:20px; font-size:19px;"><a href="viewMobile.php"><b>Mobile</b></a></label></div></td><td><div id="div2d"><label style="position:relative; top:10px; left:20px;font-size:19px;"><a href="viewLaptop.php"><b>Keyboard</b></a></label></div></td><td><div id="div2d"><label style="position:relative; top:10px; left:20px;font-size:19px;"><a href="viewLaptop.php"><b>Laptop</b></a></label></div></td><td><div id="div2e"><label style="position:relative; top:10px; left:20px;font-size:19px;"><a href="#"><b>Become a seller</b></a></label></div></td></tr>
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
<tr><td><div id="sidediv1"><label style="position:relative; left:110px; top:10px"><a href="index1.html"><b>Logout</b></a></label></div></td></tr><tr><td><div id="sidediv2"></div></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
</div></td>
<?php
session_start();
$id=$_SESSION['emrid'];
?>
<td><div id="bodydiv2">
<table height="600" width="1100">
<tr><td colspan="10"><label style="position:relative; font-size:24px; color:#09F"><center><b>Add New Laptop</b></center></label></td></tr>
<tr><td width="40"></td><td></td><td><b>Select Image</b></td><td><input type="file" name="file"></td><td><b></b></td><td></td></td><td></td><td></td><td></td><td></td></tr>
<tr><td width="40"></td><td></td><td><b>Company ID</b></td><td><input type="text" name="t1"/></td><td><b>Price</b></td><td><input type="number" name="t2"/></td></td><td><b><b>Vendor code</b></td><td><input type="text" name="t3" readonly value="<?php echo $id; ?>"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Sales Package</b></td><td><input type="text" name="t4"/></td><td><b>Part Number</b></td><td><input type="text" name="t5"/></td><td><b>Model Name</b></td><td><input type="text" name="t6"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Series</b></td><td><input type="text" name="t7"/></td><td><b>Color</td><td><input type="color" name="t8"/></td><td><b>Type</b></td><td><select name="t9"><option>Thin</option>
<option>heavy</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Suitable for</td><td><select name="t10"><option>Item</option></select></td><td><b>Battery Backup</b></td><td><select name="t11"><option>1 hour</option><option>
2 hour</option></select></td><td><b>MS Office available</b></td><td><select name="t12"><option>Yes</option><option>No</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Processor Brand</b></td><td><input type="text" name="t13"/></td><td><b>Processor Name</td><td><select name="t14"><option>i5</option><option>
i7</option></select></td><td><b>Processor Gen</b></td><td><select name="t15"><option>10th Gen</option><option>11th Gen</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>SSD</td><td><select name="t16"><option>Yes</option><option>No</option></select></td><td><b>SSD Capacity</td><td><select name="t17"><option>256GB</option><option>
512GB</option></select></td><td><b>RAM</b></td><td><select name="t18"><option>8GB</option><option>16GB</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>RAM Type</b></td><td><input type="text" name="t19"/></td><td><b>Processor Varient</b></td><td><input type="text" name="t20"/></td><td><b>Clock Speed</b></td><td>
<input type="text" name="t21"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Expandable Memory</td><td><select name="t22"><option>8GB</option><option>16GB</option></select></td><td><b>Grpahic Proccesor</td><td><input type="text"
name="t23"/></td><td><b>Number of core</td><td><select name="t24"><option>3</option><option>4</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Expandable SSD Capacity</b></td><td><select name="t25"><option>Yes</option><option>NA</option></select></td><td><b>Operating System</b></td><td><input type="text"
name="t26"/></td><td><b>Supported Operating System</b></td><td><input type="text" name="t27"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Mic IN</b></td><td><select name="t28"><option>Yes</option><option>NA</option></select></td><td><b>USB Port</b></td><td><input type="text"
name="t29"/></td><td><b>HDMI Port</b></td><td><input type="text" name="t30"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Touch Screen</b></td><td><select name="t31"><option>Yes</option><option>NA</option></select></td><td><b>Screen Size</td><td><input type="text"
name="t32"/></td><td><b>Screen Resolution</b></td><td><select name="t33"><option>1920X1080 Px</option><option>720Px</option></select></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Bluetooth</b></td><td><input type="text" name="t34"/></td><td><b>Screen Type</b></td><td><input type="text"
name="t35"/></td><td><b>Screen Resolution</b></td><td><input type="text" name="t36"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Wireless LAN</b></td><td><input type="text" name="t37"/></td><td><b>Dimension</b></td><td><input type="text"
name="t38"/></td><td><b>Weight</td><td><input type="text" name="t39"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Disk Drive</b></td><td><input type="text" name="t40"/></td><td><b>Web Camera</b></td><td><input type="text"
name="t41"/></td><td><b><b>Keyboard</b></td><td><input type="text" name="t42"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Backlit Keyboard</b></td><td><select name="t43"><option>Yes</option><option>No</option></select></td><td><b>Warrenty Summary</b></td><td><input type="text" name="t44"/></td><td><b>Warrenty Service typ</b>e</td><td><input type="text" name="t45"/></td><td></td><td></td></tr>
<tr><td></td><td></td><td><b>Covered in Warrenty</b></td><td><select name="t46"><option>Manufacturing defects</option></select></td><td><b>Covered in Warrenty</b></td><td><select name="t47"><option><b>Physical Damage</b></option></select></td><td><b>Device Type</b></td><td><input type="text" name="t48" value="Laptop" r readonly/></td><td></td><td></td></tr>
<tr><td></td><td></td><td></td><td></td><td><input type="submit" value="submit"/></td><td></td><td></td><td></td><td></td><td></td></tr>
</table>
></div></td>
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
</center>
</form>
<body>
</body>
</html>
