<?php
  $message_sent = false;
  
  if(isset($_POST['Email']) && $_POST['Email'] != ''){
    if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
      $style = $_POST['Style'];
      $quantity = $_POST['Quantity'];
      $company = $_POST['ShipName'];
      $attention = $_POST['ShipAttn'];
      $address = $_POST['ShipAddress'];
      $city = $_POST['ShipCity'];
      $state = $_POST['ShipState'];
      $zipCode = $_POST['ShipZip'];
      $phone = $_POST['Phone'];
      $infoMsg = $_POST['Information'];
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $msgSubject = "Jumbo Calendar Sample";
      $body = "";

      $body .= "Company: ".$company. "\r\n";
      $body .= "Name: ".$name. "\r\n";
      $body .= "Email: ".$email. "\r\n";
      $body .= "Phone: ".$phone. "\r\n";
      $body .= "Address: ".$address. " ".$city. " ".$state. " ".$zipCode. "\r\n";
      $body .= "Calendar Style: ".$style. "\r\n";
      $body .= "Quantity: ".$quantity. "\r\n";
      $body .= "Information: ".$infoMsg. "\r\n";
    
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
<!-- InstanceBeginEditable name="head" -->
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<!-- InstanceEndEditable -->
</head>
<body bgcolor="#FFFFFF">

  <tr>
    <td width="772" height="242" valign="top"> 
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <!-- fwtable fwsrc="07T.png" fwbase="07aT.gif" fwstyle="Dreamweaver" fwdocid = "742308039" fwnested="0" -->
        <tr> 
	  <td width="175"><a href="index.html"><img src="images/LOGO.gif" width="200" height="140" border="0"></a></td>
          <td width="616"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif"><strong><font size="4">Welcome 
              to the Western World of artist Bob Kerby. </font><br>
              <br>
              <font size="2">We are excited to present our newest selection of 
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
	      <font size="2" face="Arial, Helvetica, sans-serif">
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
      <form enctype='multipart/form-data' action='jumbosamp.php' method='post'>
        <table width="700" border="1" align="center" cellpadding="5" cellspacing="1" bordercolor="#000066" style="border-collapse: collapse">
          <input type="hidden" name="CalendarYear" value="samJumbo2008">
          <tr> 
            <td colspan="3" bgcolor="#B5CBEF" height="17" bordercolor="#FFFFFF" background="images/tile_back.gif"> 
              <p align="left"><b><font face="verdana" size="2" color="#FFFFFF"><img border="0" src="images/nav_m.gif" width="8" height="8"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF" size="3">
            Request Your Sample Today!</font></strong></font></td>
          </tr>
          <tr> 
            <td colspan="3" bgcolor="#D6DFEF" height="16" bordercolor="#FFFFFF"><div align="center"><font size="2" face="Verdana"><strong>Please 
                fill in all required fields marked with a *</strong></font></div></td>
          </tr>
          <tr> 
            <td colspan="3" bgcolor="#D6DFEF" height="16" bordercolor="#FFFFFF"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif">We 
                will automatically format your information and attach to your 
                sample. Revisions can be made after viewing. <br>
                Click HERE for <!--<a href="#" onClick="MM_popupMsg('Terms and conditions: \r\rView your personalized sample copy of the Jumbo Calendar shipped to your door. Reserve your calendars within 30 days of receiving your personal copy and your sample is FREE! (Otherwise a $10 shipping and handling fee is applicable.)')">terms 
		and conditions</a>-->
		<a href="javascript:;" onClick="MM_openBrWindow('terms.htm','','width=420,height=150')">terms and conditions</a>.</font></div></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"> 
              <p><font size="2" face="Arial, Helvetica, sans-serif"><strong>Indicate 
                Desired Style*</strong></font></p>
              <font size="2" face="Arial, Helvetica, sans-serif">(Check box)</font></td>
            <td width="30%" height="30" valign="top" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><div align="center">
              <p><font size="2" face="Arial, Helvetica, sans-serif">
		<a href="images/yearly/2023/Jumbo_HeadEmUp_Ad_23.jpg"><img src="images/yearly/2023/Jumbo_HeadEmUp_Ad_23.jpg" width="200" height="288" border="0"></a><br>
                </font></p>
              <p><font size="2" face="Arial, Helvetica, sans-serif">
               <strong> 
               <input type=radio name='Style' value='Style # HMO17'>
                Style # HMO17<br />
                Head 'Em Up Move 'Em Out
              </font></p>
            </div></td>
            <td width="30%" height="30" valign="top" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><div align="center">
                <p><font size="2" face="Arial, Helvetica, sans-serif">
                  
		<a href="images/yearly/2023/Jumbo_New_PunchinCows_Ad_23.jpg"><img src="images/yearly/2023/Jumbo_New_PunchinCows_Ad_23.jpg" width="200" height="288" border="0"></a><br>
                </font></p>
              <p><font size="2" face="Arial, Helvetica, sans-serif">
                <input type=radio name='Style' value='Style # PCC14'checked>
                <!-- <img height="16" src="images/newanim.gif" width="33" /> -->
                Style # PCC14<br />
                Punchin' Cows at Crow Creek
              </font></p>
            </div></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Quantity Anticipated*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Quantity' size=4>
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Company*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='ShipName' type=text size=25 maxlength="25">
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Attn*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='ShipAttn' type=text size=25 maxlength="25">
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Address*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='ShipAddress' type=text size=25 maxlength="25">
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              City*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='ShipCity' type=text size=25 maxlength="25">
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              State*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='ShipState' type=text size=25 maxlength="25">
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Zip*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input name='ShipZip' type=text size=15 maxlength="15">
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <strong>Phone *</strong></font></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Phone' size=15>
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><font size="2" face="Arial, Helvetica, sans-serif"> 
              Please list information you would like to feature:</font></td>
            <td height="30" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"> 
                <textarea name='Information' rows=5 cols=25></textarea>
                </font></div></td>
            <td height="30" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif">We 
              suggest including: Company name, Slogan or Motto, Web address, Additional phone 
              numbers (800, cell), Contact names, specials</font><br> </td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Name*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Name' size=25>
              </font></td>
          </tr>
          <tr> 
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
              Email*</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif"> 
              <input type=text name='Email' size=25>
              </font></td>
          </tr>
          <tr>
            <td height="30" width="30%" bgcolor="#EFF3F7" bordercolor="#FFFFFF"><strong><font size="2" face="Arial, Helvetica, sans-serif">
              Validation *</font></strong></td>
            <td height="30" colspan="2" bordercolor="#FFFFFF" bgcolor="#EFF3F7"><font size="2" face="Arial, Helvetica, sans-serif">
              Enter the number <img src="image.php" alt="Random Number"> here:<input type="text" name="number">
              </font></td>
          </tr>
          <tr> 
            <td colspan="3" bgcolor="#B5CBEF" height="25" background="images/tile_sub.gif"><p align="center"> 
                <input name="submit" type=submit value='SEND'>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input name="reset" type=reset value='Reset Form'>
            </td>
          </tr>
          <tr> 
            <td colspan="3" height="25"><div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="3">
                For fast personal service Call: 1-800-657-2149</font></strong><br>
               <a href="javascript:;" onClick="MM_openBrWindow('privacy.html','','width=400,height=200')"><!--<a href="policy.htm">--><input type="button" value="Privacy Policy"></a></strong></font></div></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;<!-- InstanceEndEditable -->
<p align="right"><font color="#996633" size="1" face="Verdana, Arial, Helvetica, sans-serif">&copy; 
        2022 Bob Kerby's Longhorn Studio </font></p></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
<!-- InstanceEnd --></html>
