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
<tr><td valign="top"><div id="div8one"><div id="div8oneA"><img src="../cameraroll/laptopimg.png" height="450" width="500"></div>
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
$res=mysql_query("select *from keyboard where CId='$a1'");
if($row=mysql_fetch_array($res))
{
?>
<div id="div8twoA">
<table  cellpadding="0" cellspacing="0" height="430">
<tr><td><label style="font-size:26px;"><b><?php echo $row['ModName']; ?></b></label></td></tr>
<tr><td><label style="color:#999; font-size:16px">733 Rating & 136 Reviews</label></td></tr>
<tr><td><label style="font-size:28px;"><b>Rs. <?php echo $row['Price']; ?></b></label></td></tr>
<tr><td><label style="font-size:20px;">Available Offers</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Bank Offers</b> 10% off on HDFC Bank Credit Card EMI Transactions, up to rs.7500 and Above</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Special Offers</b> Get Extra 29% off(price inclusive of cashback coupon</label></td></tr>
</table>
</div>
<div id="div8twoB">
<table cellpadding="0" cellspacing="0" height="900" width="956">
<tr><td><label style="font-size:22px;"><b>DETAILS</b></label></td></tr>
<tr><td height="8"></td></tr>
<tr><td><b>Sales Package</b></td><td><?php echo $row['salePak']; ?></td></tr>
<tr><td><b>Model Name</b></td><td><?php echo $row['ModName']; ?></td></tr>
<tr><td><b>Case Material</b></td><td><?php echo $row['CaseM']; ?></td></tr>
<tr><td><b>Type</b></td><td><?php echo $row['Type']; ?></td></tr>
<tr><td><b>OS Supported</b></td><td><?php echo $row['OSSup']; ?></td></tr>
<tr><td><b>Designed for</b></td><td><?php echo $row['Designed']; ?></td></tr>
<tr><td><b>Internet Keys</b></td><td><?php echo $row['IKey']; ?></td></tr>
<tr><td><b>Palm Rest</b></td><td><?php echo $row['PalmRest']; ?></td></tr>
<tr><td><b>TouchPad</b></td><td><?php echo $row['TouchPad']; ?></td></tr>
<tr><td><b>Stand Support</b></td><td><?php echo $row['StandSup']; ?></td></tr>
<tr><td><b>USD Rechargable</b></td><td><?php echo $row['USB']; ?></td></tr>
<tr><td><b>No. of Batteries</b></td><td><?php echo $row['Battery']; ?></td></tr>
<tr><td><b>Switch Type</b></td><td><?php echo $row['Switch']; ?></td></tr>
<tr><td><b>Width</b></td><td><?php echo $row['Width']; ?></td></tr>
<tr><td><b>Height</b></td><td><?php echo $row['Height']; ?></td></tr>
<tr><td><b>Depth</b></td><td><?php echo $row['Depth']; ?></td></tr>
<tr><td><b>Weight</b></td><td><?php echo $row['Weight']; ?></td></tr>
<tr><td><b>Backlit</b></td><td><?php echo $row['Backlit']; ?></td></tr>
<tr><td><b>Warrenty Summary</b></td><td><?php echo $row['WarrSum']; ?></td></tr>
<tr><td><b>Covered in Warrenty</b></td><td><?php echo $row['CWarr']; ?></td></tr>
<tr><td><b>Device Type</b></td><td><?php echo $row['DevType']; ?></td></tr>
<tr><td>&nbsp;</td><td></td></tr>
</table>
</div>
<?php
}
?>
</div></td></tr>
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
</div>
</center>
<body>
</body>
</html>
