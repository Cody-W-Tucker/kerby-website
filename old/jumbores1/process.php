<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','ShipToName');
pt_register('POST','Attention');
pt_register('POST','Phone');
pt_register('POST','Address');
pt_register('POST','City');
pt_register('POST','State');
pt_register('POST','Zip');
pt_register('POST','CalendarStyle');
pt_register('POST','Quantity');
pt_register('POST','Tubes');
pt_register('POST','Message');
$Message=preg_replace("/(\015\012)|(\015)|(\012)/","&nbsp;<br />", $Message);pt_register('POST','Name');
pt_register('POST','Email');
if($ShipToName=="" || $Address=="" || $City=="" || $Phone=="" || $State=="" || $Zip=="" || $CalendarStyle=="" || $Quantity=="" || $Message=="" || $Name=="" || $Email=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}

if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Ship To Name: ".$ShipToName."
Attention: ".$Attention."
Phone: ".$Phone."
Address: ".$Address."
City: ".$City."
State: ".$State."
Zip: ".$Zip."
Calendar Style: ".$CalendarStyle."
Quantity: ".$Quantity."
Tubes: ".$Tubes."
Message: ".$Message."
Name: ".$Name."
Email: ".$Email."
";
$message = stripslashes($message);
mail("Howdybob@experiencethewest.com","Jumbo Calendar Reservation",$message,"NoReply@ExperienceTheWest.com");
?>


<!-- This is the content of the Thank you page, be careful while changing it --><title>Jumbo Calendar Reservation Confirmation</title>

<h2 align="center">Thank you!<br>
  <font size="2" face="Arial, Helvetica, sans-serif">Print a copy of this page for your records.
</font></h2>

<table width=50% align="center">
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Ship To Name: </font></td>
<td> <?php echo $ShipToName; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Attention: </font></td>
<td> <?php echo $Attention; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Phone: </font></td>
<td> <?php echo $Phone; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Address: </font></td>
<td> <?php echo $Address; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">City: </font></td>
<td> <?php echo $City; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">State: </font></td>
<td> <?php echo $State; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Zip: </font></td>
<td> <?php echo $Zip; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Calendar Style: </font></td>
<td> <?php echo $CalendarStyle; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Quantity: </font></td>
<td> <?php echo $Quantity; ?> </td></tr>
<tr>
<td><font size="2" face="Arial, Helvetica, sans-serif">Mailing Tubes: </font></td>
<td> <?php echo $Tubes; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Message: </font></td>
<td> <?php echo $Message; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Name: </font></td>
<td> <?php echo $Name; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Email: </font></td>
<td> <?php echo $Email; ?> </td></tr>
<tr>
  <td colspan="2"><P class=MsoNormal style="MARGIN: 0in 0in 0pt"><span class="style19"><font face="Arial, Helvetica, sans-serif"><br>
    Thank
          you for ordering the 2007 Jumbo calendars.&nbsp; We will provide
          a proof with your&nbsp;information formatted in an attractive layout
          within 10 days.&nbsp; We will then proceed with&nbsp;production.&nbsp; </font></span></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; If
        any of the above information is incorrect or after you receive your proof
        there are revisions,&nbsp;please contact us immediately at <strong>1-800-657-2149.</strong></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; It
        is our pleasure to serve you.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Have
        a Blessed Day!</font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Clint
        Kerby</font></P>
    <P class=style20 style="MARGIN: 0in 0in 0pt"><font face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>&nbsp;</strong> Owner</font></P>
    <p align="center" class="style19">Click <a href="../reserve.html">HERE</a> to reserve your Range Riders
      calendars!<br>
      <font face="Arial, Helvetica, sans-serif">Click <a href="https://experiencethewest.com">HERE</a> to
    return to the home page</font></p>
    </td>
  </tr>
</table>
<p align="center"><a href="https://experiencethewest.com"><font size="2" face="Arial, Helvetica, sans-serif">RETURN</font></a><br>
  <!-- Do not change anything below this line -->
    
  <?php 
}
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div align="center"></div>
<div align="center"></div>
