<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $realname = $_POST['realname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip_code = $_POST['zip_code'];
            $email = $_POST['email'];
            $phone_no = $_POST['phone_no'];
            $list = $_POST['list'];
            $Brochure = $_POST['Brochure'];
        
            $msgSubject = "Free Gift Contact Form";
            $body = "";

            $body .= "Contact: ".$realname. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Phone: ".$phone_no. "\r\n";
            $body .= "Address: ".$address. " ".$city. " ".$state. " ".$zip_Code. "\r\n";
            $body .= "Add to List?: ".$list. "\r\n";
            $body .= "Brochure?: ".$Brochure. "\r\n";
    
            mail("howdybob@experiencethewest.com",$msgSubject,$body);
            $message_sent = true;
            unset($body);

            if($message_sent){
                header("Location: /images/New-Screensaver.gif");
            }
        }
    }
?>

<html><!-- InstanceBegin template="Templates/08T.dwt" codeOutsideHTMLIsLocked="false" -->
<head><meta charset="windows-1252"><!-- InstanceBeginEditable name="doctitle" -->
	<title>Bob Kerby&#39;s Longhorn Studio - www.ExperienceTheWest.com</title>
	<meta name="keywords" content="calendar, art, west, old west, cowboy, western, cook book, cooking, chuck wagon, southwest, paintings, prints, cards, gifts, advertising, club, fund raising, fund raiser, creation, longhorn studio, bob kerby, bob kirby, kerby, range riders, range rider, cowboys, appointment, cattle, personalized, collection, limited edition, gift certificates, organization, benefit"><meta name="description" content="Welcome to the western world of artist Bob Kerby, featuring our Range Riders Cookin' Cookbook, Range Riders Appointment Calendar, Greeting and Christmas Cards and Art Prints"><!-- InstanceEndEditable --><!-- Fireworks MX Dreamweaver MX target.  Created Fri Jan 06 19:03:45 GMT-0600 (Central Standard Time) 2006--><!-- InstanceBeginEditable name="head" --><script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script><!-- InstanceEndEditable -->
</head>
<body bgcolor="#FFFFFF">

	<tbody>
		<tr>
			<td height="242" valign="top" width="100%">
			<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"><!-- fwtable fwsrc="07T.png" fwbase="07aT.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
				<tbody>
					<tr>
						<td width="175"><a href="index.html"><img border="0" height="140" src="images/global/LOGO.gif" width="200" /></a></td>
						<td width="100%">
						<div align="center"><font face="Arial, Helvetica, sans-serif" size="3"><strong><font size="6">Welcome to the Western World of artist Bob Kerby. </font><br />
						<br />
						<font size="5">We are excited to present our newest selection of Western Art Creations.</font></strong></font></div>
						</td>
					</tr>
					<tr><!--<td colspan="2"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="about.htm"><strong>About 
              Us</strong></a><strong> | <a href="jumbo.htm">Jumbo Calendars</a> 
              | <a href="calendar2.htm">Range Rider Calendars</a> | <a href="cookin.htm">Cookbooks</a> 
              | <a href="cards.htm">Cards</a> | <a href="prints.htm">Prints</a> 
              | <a href="order.htm">Order</a> | <a href="contact.htm">Contact 
		      Us</a></strong></font></div></td>-->
						<td colspan="2">
						<div align="center"><font face="Arial, Helvetica, sans-serif" size="4"><strong><a href="calendar2.html">Range Rider Calendars</a> | <a href="jumbo.html">Jumbo Calendars</a> | <a href="https://shop.experiencethewest.com/shop/cookbooks/range-riders-american-west-cookbooks/">Cookbooks</a> | <a href="https://shop.experiencethewest.com/shop/christmas-cards/assorted-christmas-card-pack/">Cards</a> | <a href="https://shop.experiencethewest.com/product-category/art-prints/">Prints</a> | <a href="https://shop.experiencethewest.com/">Order</a> | <a href="contact.html">Contact Us</a> | <a href="about.html">About Us</a> </strong> </font></div>

						</td>
					</tr>
				</tbody>
			</table>
			<!-- InstanceBeginEditable name="content" -->

				<p><table align="center" border="0" width="85%">
				<tbody>
					<tr>
						<td colspan="3">
						
						<p><font face="Arial, Helvetica, sans-serif"><b>Thank you for visiting ExperienceTheWest.com!</b></font></p>

						<p><font face="Arial, Helvetica, sans-serif">Our wide variety of products make unique gifts for special people who love art, horses, cattle, cowboys and the western way of life! As a token of our appreciation for stopping by please complete the form below and receive Bob&#39;s favorite paintings in the form of a screen saver for your computer. </font></p>
						</td>
					</tr>
					<tr>
						<td><font face="Arial, Helvetica, sans-serif">Happy Trails!</font></td>
						<td>
						<div align="right"><font face="Arial, Helvetica, sans-serif" size="2"><b>Click <a href="javascript:;" onclick="MM_openBrWindow('privacy.html','','width=400,height=200')">HERE</a> for our Privacy Policy Statement</b></font></div>
						</td>
					</tr>
				</tbody>
			</table>

			<form enctype='multipart/form-data' action="download.php" method="POST">
			<table align="center" border="0" width="80%">
				<tbody>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">Name: </font></b></div>
						</td>
						<td width="240"><input name="realname" type="text" /></td>
						<td rowspan="7" width="240">
						<div align="center"><img height="218" src="images/saverani.gif" width="275" /><br />
						
						<font face="Arial, Helvetica, sans-serif" size="3">Screen Saver Preview</font></div>
						<div align="center"><p><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="3">(After Your Screen Saver Shows Up, Right Click and save the file to your Computer!)</font></p>
						
						</td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">Address: </font></b></div>
						</td>
						<td width="240"><input name="address" type="text" /></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">City: </font></b></div>
						</td>
						<td width="240"><input name="city" type="text" /></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">State: </font></b></div>
						</td>
						<td width="240"><input name="state" type="text" /></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">Zip: </font></b></div>
						</td>
						<td width="240"><input name="zip_code" type="text" /></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">E-Mail:</font></b></div>
						</td>
						<td width="240"><input name="email" type="text" /></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><b><font face="Arial, Helvetica, sans-serif" size="2">Phone: </font></b></div>
						</td>
						<td width="240"><input name="phone_no" type="text" /> <font face="Arial, Helvetica, sans-serif" size="2"> (Optional) </font></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><input checked="checked" name="List" type="checkbox" value="Yes" /></div>
						</td>
						<td colspan="2" width="482"><font face="Arial, Helvetica, sans-serif" size="3"><b>May we send you occasional information about new products?</b></font></td>
					</tr>
					<tr>
						<td width="93">
						<div align="right"><input name="Brochure" type="checkbox" value="Yes" /></div>
						</td>
						<td colspan="2" width="482"><font face="Arial, Helvetica, sans-serif" size="3"><b>May we send you our free color brochure?</b></font></td>
					</tr>
					<tr>
						<td width="93"></td>
						<td colspan="3" width="500"><input name="Submit" type="submit" value="Get Free Screensaver"/></td>
					</tr>
				</tbody>
			</table>
			</form>

			<p>&nbsp;<!-- InstanceEndEditable --></p>

			<p align="right"><font color="#996633" face="Verdana, Arial, Helvetica, sans-serif" size="2">&copy; 2022&nbsp;Bob Kerby&#39;s Longhorn Studio </font></p>
			</td>
		</tr>
	</tbody>
</table>

<p align="center"></p>
</body>
<!-- InstanceEnd --></html>