<?php
  $message_sent = false;
  
  if(isset($_POST['Email']) && $_POST['Email'] != ''){
    if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
      $quantity = $_POST['QuantityofCalendars'];
      $envelopes = $_POST['QuantityofEnvelopes'];
      $company = $_POST['CompanyorOrganization'];
      $attention = $_POST['Attention'];
      $address = $_POST['StreetAddress'];
      $city = $_POST['City'];
      $state = $_POST['StateorProvince'];
      $zipCode = $_POST['ZiporPostalCode'];
      $country = $_POST['Country'];
      $phone = $_POST['Phone'];
      $email = $_POST['Email'];
      $shipDate = $_POST['ShipDate'];
      $msg = $_POST['message'];
      $line1 = $_POST['Line1'];
      $line2 = $_POST['Line2'];
      $line3 = $_POST['Line3'];
      $line4 = $_POST['Line4'];
      
      $msgSubject = "Range Rider Calendar Reservation";
      $body = "";

      $body .= "Company: ".$company. "\r\n";
      $body .= "Attention: ".$attention. "\r\n";
      $body .= "Email: ".$email. "\r\n";
      $body .= "Phone: ".$phone. "\r\n";
      $body .= "Address: ".$address. " ".$city. " ".$state. " ".$zipCode. " ".$country. "\r\n";
      $body .= "Requested Ship Date: ".$shipDate. "\r\n";
      $body .= "Quantity: ".$quantity. "\r\n";
      $body .= "Envelopes: ".$envelopes. "\r\n";
      $body .= "Message Already on Record?: ".$msg. "\r\n";
      $body .= "Line 1: ".$line1. "\r\n";
      $body .= "Line 2: ".$line2. "\r\n";
      $body .= "Line 3: ".$line3. "\r\n";
      $body .= "Line 4: ".$line4. "\r\n";
    
      mail("howdybob@experiencethewest.com",$msgSubject,$body);
      $message_sent = true;
      unset($body);

      if($message_sent){
        header('Location: /thankyou.html');
    }
  }
}
?>

<html><!-- InstanceBegin template="Templates/08T.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Bob Kerby's Longhorn Studio - www.ExperienceTheWest.com</title>
<meta name="keywords" content="calendar, art, west, old west, cowboy, western, cook book, cooking, chuck wagon, southwest, paintings, prints, cards, gifts, advertising, club, fund raising, fund raiser, creation, longhorn studio, bob kerby, bob kirby, kerby, range riders, range rider, cowboys, appointment, cattle, personalized, collection, limited edition, gift certificates, organization, benefit">
<meta name="description" content="Welcome to the western world of artist Bob Kerby, featuring our Range Riders Cookin' Cookbook, Range Riders Appointment Calendar, Greeting and Christmas Cards and Art Prints">
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!-- Fireworks MX Dreamweaver MX target.  Created Fri Jan 06 19:03:45 GMT-0600 (Central Standard Time) 2006-->
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<!-- InstanceEndEditable -->
</head>
<body bgcolor="#FFFFFF">

  <tr>
    <td width="100%" height="242" valign="top"> 
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <!-- fwtable fwsrc="07T.png" fwbase="07aT.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
        <tr> 
	  <td width="175"><a href="index.html"><img src="images/global/LOGO.gif" width="200" height="140" border="0"></a></td>
          <td width="100%"><div align="center"><font size="4" face="Arial, Helvetica, sans-serif"><strong><font size="6">Welcome 
              to the Western World of artist Bob Kerby. </font><br>
              <br>
              <font size="5">We are excited to present our newest selection of 
              Western Art Creations.</font></strong></font></div></td>
        </tr>
        <tr> 
          <!--<td colspan="2"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="about.htm"><strong>About 
              Us</strong></a><strong> | <a href="jumbo.htm">Jumbo Calendars</a> 
              | <a href="calendar2.htm">Range Rider Calendars</a> | <a href="cookin.htm">Cookbooks</a> 
              | <a href="cards.htm">Cards</a> | <a href="prints.htm">Prints</a> 
              | <a href="order.htm">Order</a> | <a href="contact.htm">Contact 
		      Us</a></strong></font></div></td>-->
	  <td colspan="2">
	    <div align="center">
	      <font size="4" face="Arial, Helvetica, sans-serif">
	        <strong>			  
          <a href="calendar2.html">Range Rider Calendars</a> |
                    <a href="jumbo.html">Jumbo Calendars</a> |
                    <a
                      href="https://shop.experiencethewest.com/shop/cookbooks/range-riders-american-west-cookbooks/"
                      >Cookbooks</a
                    >
                    |
                    <a
                      href="https://shop.experiencethewest.com/shop/christmas-cards/assorted-christmas-card-pack/"
                      >Cards</a
                    >
                    |
                    <a
                      href="https://shop.experiencethewest.com/product-category/art-prints/"
                      >Prints</a
                    >
                    |
                    <a href="https://shop.experiencethewest.com/shop/">Order</a>
                    | <a href="contact.html">Contact Us</a> |
                    <a href="about.html">About Us</a>
                </strong>
              </font>
            </div>
          </td>

        </tr>
      </table> 
      <!-- InstanceBeginEditable name="content" --> 
      <table width="100%" border="0" align="center">
        <tr> 
          <td width="100%" height="184">
<p align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="4">Place 
              Your Reservation Today! <br>
              Nothing is due until November 1, 2022</font></b></font></p>
            <p align="center"> <font size="4" face="Arial, Helvetica, sans-serif"><strong>Please 
              complete the information below, or call 1-800-657-2149<br>
              ( * are required fields)</strong></font></p>
            <p align="center"><font face="Arial, Helvetica, sans-serif" size="4">Pricing, 
              Terms &amp; Conditions <!--<a href="#" onClick="MM_openBrWindow('prices.html','','scrollbars=yes,resizable=yes,width=600,height=275')">--><a href="prices2022.html">HERE</a></font><font face="Arial, Helvetica, sans-serif"> 
              <br>
              <br>
              </font></p></td>
        </tr>
      </table>
      <form enctype='multipart/form-data' action='reserve.php' method='post'>
        <b> </b> 
        <table width="100%" border="1" align="center" cellpadding="5" cellspacing="1" bordercolor="#000066" style="border-collapse: collapse">
          <input type="hidden" name="CalendarYear" value="res2008">
          <tr><!--   w=427   h=500 --> 
            <td width="45%" height="30" rowspan="11" bordercolor="#FFFFFF"><div align="center"><b><img src="images/yearly/2023/Combined_Ad_23_A.png" alt="Ad Calendars" width="427" height="500" border="0"> 
            </b></div></td>
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Quantity of Calendars </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='QuantityofCalendars' size=4>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Quantity of Envelopes </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='QuantityofEnvelopes' size=4>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Company or Organization </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='CompanyorOrganization' size=25 maxlength="75">
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Attention </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Attention' size=25>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Street Address </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='StreetAddress' size=25>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              City </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='City' size=25>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              State or Province </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='StateorProvince' size=25>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Zip or Postal Code </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='ZiporPostalCode' size=15>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              Country</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Country' size=25>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Phone </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Phone' size=15>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Email </font></strong><font size="2" face="Arial, Helvetica, sans-serif">*</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Email' size=25>
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" colspan="3" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><b> 
              </b> <div align="center"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
                Your calendars will be delivered to you by UPS September 1, 2022. 
                <br>
                </font> <font size="2" face="Arial, Helvetica, sans-serif">If 
                another ship date is desired, please enter it here: 
                <input type=text name='ShipDate' size=15>
                </font></b></div></td>
          </tr>
          <tr> 
            <td height="30" colspan="3" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><div align="center"><b><font size="2" face="Arial, Helvetica, sans-serif">Have 
                we already created a message for you that you wish to use? 
                <input type=radio name='message' value='Yes'>
                Yes 
                <input name='message' type=radio value='No' checked>
                No</font> <font face="Arial, Helvetica, sans-serif"><br>
		<font size="2">If yes, <font size="3">Simply Enter the Validation number shown below to the right</font><br>and click <font size="3">&quot;Place Your Reservation HERE&quot;.</font><br>
                If not, simply list your information below.<br>
rder
                </font>We will provide a proof for your approval.</font></b></div></td>
          </tr>
          <tr> 
            <td width="45%" height="30" rowspan="6" bordercolor="#FFFFFF"><div align="center"><b><font size="2" face="Arial, Helvetica, sans-serif"><img src="images/yearly/2023/Cover_Ad_23.jpg" alt="Calendar" width="474" height="451"></font> 
            </b></div></td>
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              Line 1</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Line1' size=25 maxlength="75">
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              Line 2</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Line2' size=25 maxlength="75">
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" width="29%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              Line 3</font></b></td>
            <td height="30" width="26%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Line3' size=25 maxlength="75">
              </font></b></td>
          </tr>
          <tr> 
            <td height="30" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif">Line 
              4</font></b></td>
            <td height="30" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='Line4' type=text id="Line4" size=25 maxlength="75">
              </font></b></td>
          </tr>
          <tr> 
            <td height="34" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><b><font size="2" face="Arial, Helvetica, sans-serif"><strong>1- 
              COMPANY NAME</strong><br>
              <font size="2" face="Arial, Helvetica, sans-serif">2- Slogan or 
              motto<br>
              3- Additional Information here<br>
              <strong>4- address - phone - email </strong></font> </font></b></td>
          </tr>
          <tr>
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif">
              Validation *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif">
              Enter the number <img src="image.php" alt="Random Number"> here:<input type="text" name="number">
              </font></td>
          </tr>
          <tr> 
            <td colspan="3" bgcolor="#B5CBEF" height="25"><p align="center"><b> 
                <input name="submit" type=submit value='Place Your Reservation HERE'>
                </b></td>
          </tr>
          <tr> 
            <td colspan="3" height="25"><p align="center"><b><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="3">For 
                fast personal service<br>
                <font size="5">Call: 1-800-657-2149</font></font></strong><br>
                <font size="3" face="Arial"><br>
                </font> </font></b><b><font face="Arial, Helvetica, sans-serif" size="3"><font face=Arial size=3>Thank 
                you. We appreciate your business!</font> </font></b></p>
              </td>
          </tr>
        </table>
      </form>
      <p align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b>Click 
        <a href="javascript:;" onClick="MM_openBrWindow('privacy.html','','width=400,height=200')">HERE</a> 
        to see our Privacy Policy Statement</b></font><font face="Arial, Helvetica, sans-serif"> 
        </font><!-- InstanceEndEditable -->
<p align="right"><font color="#996633" size="2" face="Verdana, Arial, Helvetica, sans-serif">&copy; 
        2022 Bob Kerby's Longhorn Studio </font></p></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
<!-- InstanceEnd --></html>
