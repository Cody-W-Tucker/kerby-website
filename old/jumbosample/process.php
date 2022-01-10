<?php
session_start();
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";

$CalendarYear = $_POST['CalendarYear'];
$Style = $_POST['Style'];
$Quantity = $_POST['Quantity'];
$ShipName = $_POST['ShipName'];
$ShipAttn = $_POST['ShipAttn'];
$ShipAddress = $_POST['ShipAddress'];
$ShipCity = $_POST['ShipCity'];
$ShipState = $_POST['ShipState'];
$ShipZip = $_POST['ShipZip'];
$Phone = $_POST['Phone'];
$Information = $_POST['Information'];
$Information=preg_replace("/(\015\012)|(\015)|(\012)/","&nbsp;<br />", $Information);
$Email = $_POST['Email'];
$Name = $_POST['Name'];

#pt_register('POST','CalendarYear');#pt_register('POST','Style');#pt_register('POST','Quantity');#pt_register('POST','ShipName');#pt_register('POST','ShipAttn');#pt_register('POST','ShipAddress');
#pt_register('POST','ShipCity');#pt_register('POST','ShipState');#pt_register('POST','ShipZip');#pt_register('POST','Phone');#pt_register('POST','Information');#pt_register('POST','Name');
#pt_register('POST','Email');

if($Style=="" || $Quantity=="" || $ShipName=="" || $ShipAddress=="" || $ShipCity=="" || $ShipState=="" || $ShipZip=="" || $Name=="" || $Email=="" || $Phone==""){
  $errors=1; 
  $error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
  if($Style==""){$error .= "<li>Style";}
  if($Quantity==""){$error .= "<li>Quantity";}
  if($ShipName==""){$error .= "<li>Name";}
  if($ShipAddress==""){$error .= "<li>Address";}
  if($ShipCity==""){$error .= "<li>City";}
  if($ShipState==""){$error .= "<li>State";}
  if($ShipZip==""){$error .= "<li>Zip";}
  if($Name==""){$error .= "<li>Name";}
  if($Email==""){$error .="<li>Email";}
  if($Phone==""){$error .="<li>Phone";}
}

if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$Email)){
  $error.="<li>Invalid email address entered";
  $errors=1;
}
#if(( $_POST['number'] != "195235")||($_POST['number']=="")){ 
if(((substr($_SESSION['img_number'],0,6)) != $_POST['number'])||($_POST['number']=="")){ 
//if((($_SESSION['img_number']) != $_POST['number'])||($_POST['number']=="")){ 

  $errors=1;
  $error.="<li>Validation number doesn't match"; 
}
if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Calendar Year:".$CalendarYear."
Style: ".$Style."
Quantity: ".$Quantity."
Ship Name: ".$ShipName."
Ship Attn: ".$ShipAttn."
Ship Address: ".$ShipAddress."
Ship City: ".$ShipCity."
Ship State: ".$ShipState."
Ship Zip: ".$ShipZip."
Phone: ".$Phone."
Information: ".$Information."
Name: ".$Name."
Email: ".$Email."
";
$message = stripslashes($message);
//mail("Experience.Howdybob@myoutlookonline.com","Jumbo Sample Request",$message,"From: $Email");
mail("webform@experiencethewest.com","Jumbo Sample Request",$message,"From: noreply@experiencethewest.com");
mail("photo@dl-photo.com","Jumbo Sample Request",$message,"From: noreply@experiencethewest.com");
?>


<!-- This is the content of the Thank you page, be careful while changing it --><title>Jumbo Calendar Sample Request Confirmation</title>

<h2 align="center"><font face="Arial, Helvetica, sans-serif">Thank you!<br>
</font><font size="2" face="Arial, Helvetica, sans-serif">Print a copy of this
page for your records. </font><font face="Arial, Helvetica, sans-serif"></font></h2>

<table width=50% align="center">
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Style: </font></td>
<td> <?php echo $Style; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Quantity: </font></td>
<td> <?php echo $Quantity; ?> </td></tr>
<tr>
<td><font size="2" face="Arial, Helvetica, sans-serif">Company:</font></td>
<td> <?php echo $ShipName; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Attn: </font></td>
<td> <?php echo $ShipAttn; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Address: </font></td>
<td> <?php echo $ShipAddress; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">City: </font></td>
<td> <?php echo $ShipCity; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">State: </font></td>
<td> <?php echo $ShipState; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Zip: </font></td>
<td> <?php echo $ShipZip; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Phone: </font></td>
<td> <?php echo $Phone; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Information: </font></td>
<td> <?php echo $Information; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Name: </font></td>
<td> <?php echo $Name; ?> </td></tr>
<tr><td height="30"><font size="2" face="Arial, Helvetica, sans-serif">Email: </font></td>
<td> <?php echo $Email; ?> </td></tr>
<tr>
  <td height="30" colspan="2"><P class=MsoNormal style="MARGIN: 0in 0in 0pt"><span class="style19"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Thank 
        you for ordering Jumbo calendars.&nbsp; We will provide a proof with your&nbsp;information 
        formatted in an attractive layout within 10 days.&nbsp; We will then proceed 
        with&nbsp;production.&nbsp; </strong></font></span></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; If
        any of the above information is incorrect or after you receive your proof
        there are revisions,&nbsp;please contact us immediately at <strong>1-800-657-2149.</strong></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; It
        is our pleasure to serve you.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Have
        a Blessed Day!</font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Clint
        Kerby</font></P>
    <P class=style20 style="MARGIN: 0in 0in 0pt"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong><em>&nbsp;</em></strong><em> Owner</em></font></P>
    <p align="center" class="style19"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Click <a href="https://experiencethewest.com">HERE</a> to
          return to the home page<br>
        </strong></font></p></td>
  </tr>
</table>
<div align="center"><br>
  <br>
  <!-- Do not change anything below this line -->
  
  <?php 
}
?>
</div>
