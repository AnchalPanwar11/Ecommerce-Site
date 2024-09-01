<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<link href="flipkartcss.css" rel="stylesheet" type="text/css">
</head>
<center>
<form method="post" action="addtoCartKeyboard.php">
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
<?php
$dType=$_REQUEST['z1'];

$a1=$_REQUEST['t1'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("flipkart",$con);
$res=mysql_query("select *from Keyboard where VCode='$a1'");
if($row=mysql_fetch_array($res))
{
?>
<div id="div3"></div>
<div id="div5"></div>
<div id="div6"><img src="../cameraroll/img11.png" height="230" width=100%></div>
<div id="div5"></div>
<div id="div8">
<table cellpadding="0" cellspacing="0">
<tr><td valign="top"><div id="div8one"><div id="div8oneA"><img src="images/home/product6.jpg" height="450" width="500"></div>
<div id="div8oneB">
<table cellpadding="0" cellspacing="0" height="80" width="500">
<tr><td><form method="post" action="addtoCartKeyboard.php"><input type="hidden" name="n1" value="<?php echo $row['CId']; ?>" /><input type="hidden" name="n2" value="<?php echo $row['Price']; ?>" /><input type="hidden" name="n3" value="<?php echo $row['ModName']; ?>" /><input type="hidden" name="n4" value="<?php echo $row['VCode']; ?>" /><input type="hidden" name="n5" value="<?php echo $row['salePak']; ?>" /><input type="submit" value="Add to Cart"/></form></td><td><input type="submit" value="Buy Now"/></td></tr>
</table>
</div>
</td><td><div id="div8two">
<div id="div8twoA">
<table  cellpadding="0" cellspacing="0" height="530">
<tr><td><label style="font-size:26px;"><b><?php echo $row['ModName']; ?></b></label></td></tr>
<tr><td><label style="color:#999; font-size:16px">733 Rating & 136 Reviews</label></td></tr>
<tr><td><label style="font-size:28px;"><b>Rs.<?php echo $row['Price']; ?></b></label><br><br><br><b></b><input type="hidden" value="1" name="n6"><br><br><b></b><input type="hidden" value="<?php echo date("d/m/y"); ?>" name="n7"><br><br><b></b><input type="hidden" value="<?php echo date("d/m/y"); ?>" name="n8"><br><br><b></b><input type="hidden" value="<?php echo $dType; ?>" name="n9"><br><br><b></b><input type="hidden" value="<?php echo rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10); ?>" name="n10"></td></tr><tr><td><label style="font-size:20px;">Available Offers</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Bank Offers</b> 10% off on HDFC Bank Credit Card EMI Transactions, up to rs.7500 and Above</label></td></tr>
<tr><td><label style="font-size:18px;"><b>Special Offers</b> Get Extra 29% off(price inclusive of cashback coupon</label></td></tr>
</table>
</div>
<div id="div8twoB">
<table cellpadding="0" cellspacing="0" height="1000" width="956">
<tr><td><label style="font-size:22px;"><b>DETAILS</b></label></td></tr>
<tr><td height="8"></td></tr>
<tr><td><b>Sales Package</b></td><td><?php echo $row['salePak']; ?></td></tr>
<tr><td>Case Material</td><td><?php echo $row['CaseM']; ?></td></tr>
<tr><td>Type</td><td><?php echo $row['Type']; ?></td></tr>
<tr><td>OS Supported</td><td><?php echo $row['OSSup']; ?></td></tr>
<tr><td>Designed For</td><td><?php echo $row['Designed']; ?></td></tr>
<tr><td>Internet Key</td><td><?php echo $row['IKey']; ?></td></tr>
<tr><td>Palm Rest</td><td><?php echo $row['PalmRest']; ?></td></tr>
<tr><td>TouchPad</td><td><?php echo $row['TouchPad']; ?></td></tr>
<tr><td>Stand Support</td><td><?php echo $row['StandSup']; ?></td></tr>
<tr><td>USB</td><td><?php echo $row['USB']; ?></td></tr>
<tr><td>Battery</td><td><?php echo $row['Battery']; ?></td></tr>
<tr><td>Switch</td><td><?php echo $row['Switch']; ?></td></tr>
<tr><td>Width</td><td><?php echo $row['Width']; ?></td></tr>
<tr><td>Height</td><td><?php echo $row['Height']; ?></td></tr>
<tr><td>Depth</td><td><?php echo $row['Depth']; ?></td></tr>
<tr><td>Weight</td><td><?php echo $row['Weight']; ?></td></tr>
<tr><td>Backlit</td><td><?php echo $row['Backlit']; ?></td></tr>
<tr><td>Warrenty Summary</td><td><?php echo $row['WarrSum']; ?></td></tr>
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
</form>
</center>
<body>
</body>
</html>
