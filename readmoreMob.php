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
<tr><td><div id="div2a"><img src="../cameraroll/img10.png" height="46" width="130"></div></td><td><div id="space"></div></td><td><div id="div2b"><input type="text" placeholder="Search for Products, Brands and More" name="m1" style="position:relative; height:44px; width:400px; border-radius:5px; border-style:solid; background-color:#D6E4E9;"></div></td><td width="40"></td><td></label></div></td><td><div id="div2d"><label style="position:relative; top:10px; left:20px; font-size:19px;"><a href="viewMobile.php"><b>Mobile</b></a></label></div></td><td><div id="div2d"><label style="position:relative; top:10px; left:20px;font-size:19px;"><a href="viewLaptop.php"><b>Keyboard</b></a></label></div></td><td><div id="div2d"><label style="position:relative; top:10px; left:20px;font-size:19px;"><a href="viewLaptop.php"><b>Laptop</b></a></label></div></td><td><div id="div2e"><label style="position:relative; top:10px; left:20px;font-size:19px;"><a href="vendorregistrationform.php"><b>Become a seller</b></a></label></div></td></tr>
</table>
</div>
<div id="menudiv">
<table cellpadding="0" cellspacing="0" height="44" width="100%">
<tr><td><div id="menupart"></div></td><td><div id="menupart"></div></td><td><div id="menupart"></div></td><td><div id="menupart"></div></td><td><div id="menupart"></div></td></tr>
</table>
</div>
<div id="div3"></div>
<div id="div5"></div>
<div id="div6"><img src="../cameraroll/img11.png" height="230" width=100%></div>
<div id="div5"></div>
<div id="div8">
<table cellpadding="0" cellspacing="0">
<tr><td valign="top"><div id="div8oneA"><img src="../cameraroll/Screenshot (25).png" height="450" width="500"></div>
<div id="div8oneB">
<table cellpadding="0" cellspacing="0" height="80" width="500">
<tr><td><input type="button" value="Add to Cart"/></td><td><input type="button" value="Buy Now"/></td></tr>
</table>
</div>
</td><td><div id="div8two">
<?php
$a1=$_REQUEST['q1'];
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
<tr><td><label style="color:#999;font-size:16px">3,114 Rating & 212 Reviews</label></td></tr>
<tr><td><label style="font-size:28px;"><b><?php echo $row['Price']; ?></b></label></td></tr>
<tr><td><label style="font-size:20px;">Available Offers</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Bank Offers</b> 10% off on HDFC Bank Credit Card EMI Transactions, up to rs.7500 and Above</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Bank Offers</b> Extra rs.500 off on HDFC Bank Credit card EMI on 6 months and above tenure, Min product Value rs.24,900</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Special Offers</b> Get Extra 29% off(price inclusive of cashback coupon</label></td></tr>
</table>
</div>
<div id="div8twoB">
<table cellpadding="0" cellspacing="0" height="1150" width="956">
<tr><td><label style="font-size:22px;"><b>DETAILS</b></label></td></tr>
<tr><td height="8"></td></tr>
<tr><td>In The Box</td><td><?php echo $row['InBox']; ?></td></tr>
<tr><td>Model Number</td><td><?php echo $row['ModNum']; ?></td></tr>
<tr><td>Part Number</td><td><?php echo $row['PCode']; ?></td></tr>
<tr><td>Model Name</td><td><?php echo $row['ModName']; ?></td></tr>
<tr><td>Color</td><td><?php echo $row['Color']; ?></td></tr>
<tr><td>Browser Type</td><td><?php echo $row['BrowserT']; ?></td></tr>
<tr><td>Sim Tpe</td><td><?php echo $row['SIMType']; ?></td></tr>
<tr><td>Hybrid Sim Slot</td><td><?php echo $row['HybSIM']; ?></td></tr>
<tr><td>Touchscreen</td><td><?php echo $row['TouchS']; ?></td></tr>
<tr><td>OTG Compatible</td><td><?php echo $row['OGT']; ?></td></tr>
<tr><td>Quick Charging</td><td><?php echo $row['QuickCharge']; ?></td></tr>
<tr><td>Display Size</td><td><?php echo $row['DisplayS']; ?></td></tr>
<tr><td>Resolution Type</td><td><?php echo $row['ResType']; ?></td></tr>
<tr><td>Resolution</td><td><?php echo $row['Res']; ?></td></tr>
<tr><td>Display Type</td><td><?php echo $row['DisplayT']; ?></td></tr>
<tr><td>Operating System</td><td><?php echo $row['OS']; ?></td></tr>
<tr><td>Processor Brand</td><td><?php echo $row['ProBrand']; ?></td></tr>
<tr><td>Processor Type</td><td><?php echo $row['ProType']; ?></td></tr>
<tr><td>Processor Cores</td><td><?php echo $row['ProCore']; ?></td></tr>
<tr><td>Primary Clock Speed</td><td><?php echo $row['PClockSpd']; ?></td></tr>
<tr><td>Operating Frequency</td><td><?php echo $row['OprFreq']; ?></td></tr>
<tr><td>Internal Storage</td><td><?php echo $row['IntStorage']; ?></td></tr>
<tr><td>RAM</td><td><?php echo $row['RAM']; ?></td></tr>
<tr><td>Memory Card Slot Type</td><td><?php echo $row['MemSlot']; ?></td></tr>
<tr><td>Primary Camera Available</td><td><?php echo $row['PriCamA']; ?></td></tr>
<tr><td>Primary Camera</td><td><?php echo $row['PriCam']; ?></td></tr>
<tr><td> Primary Camera Features</td><td><?php echo $row['PriCamF']; ?></td></tr>
<tr><td>Secondary Camera Available</td><td><?php echo $row['SecCamA']; ?></td></tr>
<tr><td>Secondary Camera</td><td><?php echo $row['SecCam']; ?></td></tr>
<tr><td>Secondary Camera features </td><td><?php echo $row['SecCamF']; ?></td></tr>
<tr><td>Flash</td><td><?php echo $row['Flash']; ?></td></tr>
<tr><td>5g</td><td><?php echo $row['5G']; ?></td></tr>
<tr><td>Width</td><td><?php echo $row['Wid1']; ?></td></tr>
<tr><td>Weight</td><td><?php echo $row['Weight']; ?></td></tr>
<tr><td>Depth</td><td><?php echo $row['Depth']; ?></td></tr>
<tr><td>Warrenty Summary</td><td><?php echo $row['WarrSum']; ?></td></tr>
<tr><td>&nbsp;</td><td></td></tr>
</table>
</div>
</div></td></tr>
<?php
}
?>
</table>
</div>
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
</center>
<body>
</body>
</html>
