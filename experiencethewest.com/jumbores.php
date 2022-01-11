<?php
  $message_sent = false;
  
  if(isset($_POST['Email']) && $_POST['Email'] != ''){
    if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
      $calendarYear = $_POST['CalendarYear'];
      $company = $_POST['Company'];
      $attention = $_POST['Attention'];
      $address = $_POST['Address'];
      $city = $_POST['City'];
      $state = $_POST['State'];
      $zipCode = $_POST['ZiporPostalCode'];
      $phone = $_POST['Phone'];
      $email = $_POST['Email'];
      $created = $_POST['Created'];
      $calendarStyle = $_POST['CalendarStyle'];
      $quantity = $_POST['Quantity'];
      $mailingTubes = $_POST['MailingTubes'];
      $message = $_POST['Message'];
      $msgSubject = "Jumbo Calendar Reservation";
      $body = "";

      $body .= "From: ".$company. "\r\n";
      $body .= "Email: ".$email. "\r\n";
      $body .= "Phone: ".$phone. "\r\n";
      $body .= "Address: ".$address. " ".$city. " ".$state. " ".$zipCode. "\r\n";
      $body .= "Calendar Style: ".$calendarStyle. "\r\n";
      $body .= "Quantity: ".$quantity. "\r\n";
      $body .= "Mailing Tubes: ".$mailingTubes. "\r\n";
      $body .= "Message: ".$message. "\r\n";
    
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- Fireworks MX Dreamweaver MX target.  Created Fri Jan 06 19:03:45 GMT-0600 (Central Standard Time) 2006-->
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
-->
</script>
</head>
<body bgcolor="#FFFFFF">

  <tr>
    <td width="100%" height="242" valign="top"> 
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <!-- fwtable fwsrc="07T.png" fwbase="07aT.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
        <tr> 
	  <td width="175"><a href="index.html"><img src="images/global/LOGO.gif" width="200" height="140" border="0"></a></td>
          <td width="616"><div align="left"><font size="3" face="Arial, Helvetica, sans-serif"><strong><font size="5">Welcome 
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
      <p align="center"> 
      <form enctype='multipart/form-data' action='jumbores.php' method='POST'>
        <table width="75%" border="1" align="center" cellpadding="5" cellspacing="1" bordercolor="#000066" style="border-collapse: collapse">
          <input type="hidden" name="CalendarYear" value="resJumbo2008">
          <tr> 
            <td colspan="3" bgcolor="#B5CBEF" height="17" bordercolor="#FFFFFF" background="images/tile_back.gif"> 
              <p align="left"><b><font face="arial" size="2" color="#FFFFFF"><img border="0" src="images/nav_m.gif" width="8" height="8"> 
                <font face='Arial, Helvetica, sans-serif' size=2 color='#FFFFFF'><strong>Jumbo Calendar Reservation/Order Form</strong></font></td>
          </tr>
          <tr> 
            <td colspan="3" bgcolor="#B5CBEF" height="16" bordercolor="#FFFFFF" background="images/tile_sub.gif"><div align="center"><font size="2" face="Verdana"><b><font size="3" face="Arial, Helvetica, sans-serif" align="left"><strong>Reserve yours today! Nothing is due until November 1, 2022.</strong></font></b></font></div></td>
          </tr>
          <tr> 
            <td colspan="3" bgcolor="#D6DFEF" height="16" bordercolor="#FFFFFF"><div align="center"><font size="2" face="Verdana"><strong>Please 
                fill in all required fields marked with a *</strong></font></div></td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Calendar Style *</font></strong></td>
            <td width="202" valign="top" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><div align="center">
             <font face="Arial, Helvetica, sans-serif" size="2"></font></strong> </font><span style="font-size:16px;"><font face="Arial, Helvetica, sans-/>
             
                <a href="calendar2.htm"><p><a href="images/yearly/2023/Jumbo_HeadEmUp_Ad_23.jpg"><img src="images/yearly/2023/Jumbo_New_HeadEmUp_Ad_23.jpg" width="250" height="340" border="0"></a></p>
                <p><font size="3" face="Arial, Helvetica, sans-serif"> 
                  <input type=radio name='CalendarStyle' value='Style #HMO17'>
                  Style # HMO17<br />
                  Head 'Em Up Move 'Em Out
                  </font></p>
              </div></td>
            <td width="211" height="30" valign="top" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
             <a href="calendar2.htm"><div align="center"> 
                <p><a href="images/yearly/2023/Jumbo_PunchinCows_Ad_23.jpg"><img src="images/yearly/2023/Jumbo_PunchinCows_Ad_23.jpg" width="250" height="340" border="0"></a></p>
                <p><font size="3" face="Arial, Helvetica, sans-serif"> 
                  <input type=radio name='CalendarStyle' value='Style #PCC14' checked>
                  Style # PCC14<br />
                  Punchin' Cows at Crow Creek
                  </font></p>
              </div></td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Company *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='Company' size=35> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"> 
              <font size="2" face="Arial, Helvetica, sans-serif">Attention</font></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='Attention' size=35> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Address *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='Address' size=35> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              City *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='City' size=35> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              State *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='State' size=35> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Zip or Postal Code *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='ZiporPostalCode' size=15> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Phone *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='Phone' size=15> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Email *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='Email' size=25> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Quantity *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='Quantity' size=6> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><font size="2" face="Arial, Helvetica, sans-serif"> 
              Mailing Tubes</font></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <input type=text name='MailingTubes' size=6> </td>
          </tr>
          <tr> 
            <td height="30" colspan="3" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif">Have 
              we already created a message for you that you wish to use?</font><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=radio name='Created' value='Yes'>
              Yes 
              <input name='Created' type=radio value='No' checked>
              No</font><br> <font size="2" face="Arial, Helvetica, sans-serif">If 
              yes, simply click <strong>&quot;Place Your Reservation&quot; </strong> 
              (below).<br>
              If not, or if you wish to revise your message, simply list your 
              information below. <br>
              </font><font size="2" face="Arial, Helvetica, sans-serif">We will 
              format your information and provide a proof. </font> </td>
          </tr>
          <tr> 
            <td height="30" width="168" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <strong>Message </strong></font></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"> 
              <textarea name='Message' rows=6 cols=35></textarea> </td>
          </tr>
          <tr>
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif">
              Validation *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif">
              Enter the number <img src="image.php" alt="Random Number"> here:<input type="text" name="number">
              </font></td>
          </tr>
          <tr> 
            <td height="25" colspan="3" background="images/tile_sub.gif" bgcolor="#B5CBEF"> 
              <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
                <input name="submit" type=submit value='Place Your Reservation HERE'>
                </font></td>
          </tr>
          <tr> 
            <td height="25" colspan="3"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="3">For fast personal service  
                Call: 1-800-657-2149</font></strong><br>
                <a href="javascript:;" onClick="MM_openBrWindow('privacy.html','','width=400,height=200')"><!--<a href="policy.htm">--><input type="button" value="Privacy Policy"></a></strong></font></div></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;<!-- InstanceEndEditable -->
<p align="right"><font color="#996633" size="2" face="Verdana, Arial, Helvetica, sans-serif">&copy; 
        2022 Bob Kerby's Longhorn Studio </font></p></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
<!-- InstanceEnd --></html>
