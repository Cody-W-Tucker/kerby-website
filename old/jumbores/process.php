<?php
session_start();
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";

$CalendarYear = $_POST['CalendarYear'];
$Company = $_POST['Company'];
$Attention = $_POST['Attention'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$ZiporPostalCode = $_POST['ZiporPostalCode'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Created = $_POST['Created'];
$CalendarStyle = $_POST['CalendarStyle'];
$Quantity = $_POST['Quantity'];
$MailingTubes = $_POST['MailingTubes'];
$Message = $_POST['Message'];

#pt_register('POST','CalendarYear');#pt_register('POST','Company');#pt_register('POST','Attention');#pt_register('POST','Address');#pt_register('POST','City');
#pt_register('POST','State');#pt_register('POST','ZiporPostalCode');#pt_register('POST','Phone');#pt_register('POST','Email');#pt_register('POST','Created');
#pt_register('POST','CalendarStyle');#pt_register('POST','Quantity');#pt_register('POST','MailingTubes');#pt_register('POST','Message');

$Message=str_replace("/(\015\012)|(\015)|(\012)/","&nbsp;<br />", $Message);

if($Company=="" || $Address=="" || $City=="" || $State=="" || $ZiporPostalCode=="" || $Phone=="" || $Email=="" || $CalendarStyle=="" || $Quantity==""){
  $errors=1;
  $error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
  if($Company==""){$error.="<li>Company";}
  if($Address==""){$error.="<li>Address";}
  if($City==""){$error.="<li>City";}
  if($State==""){$error.="<li>State";}
  if($ZiporPostalCode==""){$error.="<li>Zip or Postal Code";}
  if($Phone==""){$error.="<li>Phone";}
  if($Email==""){$error.="<li>Email";}
  if($CalendarStyle==""){$error.="<li>CalendarStyle";}
  if($Quantity==""){$error.="<li>Quantity";}
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
$message="Calendar Year: ".$CalendarYear."
Company: ".$Company."
Attention: ".$Attention."
Address: ".$Address."
City: ".$City."
State: ".$State."
Zip or Postal Code: ".$ZiporPostalCode."
Phone: ".$Phone."
Email: ".$Email."
Created: ".$Created."
Calendar Style: ".$CalendarStyle."
Quantity: ".$Quantity."
Mailing Tubes: ".$MailingTubes."
Message: ".$Message."
";
$message = stripslashes($message);
mail("dustin.j.turner@outlook.com","Jumbo Reserve 2008 Calendar",$message,"From: noreply@experiencethewest.com");
//mail("webform@experiencethewest.com","Jumbo Reserve 2008 Calendar",$message,"From: noreply@experiencethewest.com");
//mail("photo@dl-photo.com","Jumbo Reserve 2008 Calendar",$message,"From: noreply@experiencethewest.com");
?>

<!-- This is the content of the Thank you page, be careful while changing it -->

<!--<h2 align="center">Thank you!</h2>

<table width=51% align="center">
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Company: </font></td>
<td> <?php echo $Company; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Attention: </font></td>
<td> <?php echo $Attention; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Address: </font></td>
<td> <?php echo $Address; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">City: </font></td>
<td> <?php echo $City; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">State: </font></td>
<td> <?php echo $State; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Zip or Postal Code: </font></td>
<td> <?php echo $ZiporPostalCode; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Phone: </font></td>
<td> <?php echo $Phone; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Email: </font></td>
<td> <?php echo $Email; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Created: </font></td>
<td> <?php echo $Created; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Calendar Style: </font></td>
<td> <?php echo $CalendarStyle; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Quantity: </font></td>
<td> <?php echo $Quantity; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Mailing Tubes: </font></td>
<td> <?php echo $MailingTubes; ?> </td></tr>
<tr><td><font size="2" face="Arial, Helvetica, sans-serif">Message: </font></td>
<td> <?php echo $Message; ?> </td></tr>
<tr>
  <td colspan="2"><P class=MsoNormal style="MARGIN: 0in 0in 0pt"><span class="style19"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Thank 
        you for ordering Jumbo calendars.&nbsp; We will provide a proof with your&nbsp;information 
        formatted in an attractive layout within 10 days.&nbsp; We will then proceed 
        with&nbsp;production.&nbsp; </strong></font></span></P>
    <P class=MsoNormal  style19 style="MARGIN: 0in 0in 0pt" style5><strong><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;<o:p></o:p></font></strong><font size="2" face="Arial, Helvetica, sans-serif"><o:p></o:p></font></P>
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
    <P class=style20 style="MARGIN: 0in 0in 0pt"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>&nbsp;</strong> Owner</font></P>
      <p align="center" class="style19"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Click 
        <a href="https://experiencethewest.com">HERE</a> to return to the home 
        page</strong></font></p></td>
  </tr>
</table>-->
<!-- Do not change anything below this line -->

<?php 
}
?>