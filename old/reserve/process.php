<?php
session_start();
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";

$CalendarYear = $_POST['CalendarYear'];
$QuantityofCalendars = $_POST['QuantityofCalendars'];
$QuantityofEnvelopes = $_POST['QuantityofEnvelopes'];
$CompanyorOrganization = $_POST['CompanyorOrganization'];
$Attention = $_POST['Attention'];
$StreetAddress = $_POST['StreetAddress'];
$City = $_POST['City'];
$StateorProvince = $_POST['StateorProvince'];
$ZiporPostalCode = $_POST['ZiporPostalCode'];
$Country = $_POST['Country'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$ShipDate = $_POST['ShipDate'];
#$message = $_POST['message'];
$Line1 = $_POST['Line1'];
$Line2 = $_POST['Line2'];
$Line3 = $_POST['Line3'];
$Line4 = $_POST['Line4'];

#pt_register('POST','CalendarYear');#pt_register('POST','QuantityofCalendars');#pt_register('POST','QuantityofEnvelopes');#pt_register('POST','CompanyorOrganization');
#pt_register('POST','Attention');#pt_register('POST','StreetAddress');#pt_register('POST','City');#pt_register('POST','StateorProvince');
#pt_register('POST','ZiporPostalCode');#pt_register('POST','Country');#pt_register('POST','Phone');#pt_register('POST','Email');
#pt_register('POST','ShipDate');#pt_register('POST','message');#pt_register('POST','Line1');#pt_register('POST','Line2');#pt_register('POST','Line3');#pt_register('POST','Line4');

if($CalendarYear =="" || $QuantityofCalendars=="" || $QuantityofEnvelopes=="" || $CompanyorOrganization=="" || $Attention=="" || $StreetAddress=="" || $City=="" || $StateorProvince=="" || $ZiporPostalCode=="" || $Phone=="" || $Email=="" ){
  $errors=1;
  $error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
  if($CalendarYear==""){$error.="<li>Calendar Year";}
  if($QuantityofCalendars==""){$error.="<li>Quantity of Calendars";}
  if($QuantityofEnvelopes==""){$error.="<li>Quantity of Envelopes";}
  if($CompanyorOrganization==""){$error.="<li>CompanyorOrganization";}
  if($Attention==""){$error.="<li>Attention";}
  if($StreetAddress==""){$error.="<li>StreetAddress";}
  if($City==""){$error.="<li>City";}
  if($StateorProvince==""){$error.="<li>StateorProvince";}
  if($ZiporPostalCode==""){$error.="<li>ZiporPostalCode";}
  if($Phone==""){$error.="<li>Phone";}
  if($Email==""){$error.="<li>Email";}
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
  Quantity of Calendars: ".$QuantityofCalendars."
  Quantity of Envelopes: ".$QuantityofEnvelopes."
  Company or Organization: ".$CompanyorOrganization."
  Attention: ".$Attention."
  Street Address: ".$StreetAddress."
  City: ".$City."
  State or Province: ".$StateorProvince."
  Zip or Postal Code: ".$ZiporPostalCode."
  Country: ".$Country."
  Phone: ".$Phone."
  Email: ".$Email."
  Ship Date: ".$ShipDate."
  Line 1: ".$Line1."
  Line 2: ".$Line2."
  Line 3: ".$Line3."
  Line 4: ".$Line4."
  ";
$message = stripslashes($message);
#mail("info@jbauldwebdesign.com","Reserve Calendar",$message,"From: noreply@experiencethewest.com");
?>


<!-- This is the content of the Thank you page, be careful while changing it -->

<h2 align="center">Thank you!</h2>

<table width=50% align="center">
    <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Quantity of Calendars: 
      </font></td>
    <td> <?php echo $QuantityofCalendars; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Quantity of Envelopes: 
      </font></td>
    <td> <?php echo $QuantityofEnvelopes; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Company or Organization: 
      </font></td>
    <td> <?php echo $CompanyorOrganization; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Attention: </font></td>
    <td> <?php echo $Attention; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Street Address: </font></td>
    <td> <?php echo $StreetAddress; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">City: </font></td>
    <td> <?php echo $City; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">State or Province: 
      </font></td>
    <td> <?php echo $StateorProvince; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Zip or Postal Code: 
      </font></td>
    <td> <?php echo $ZiporPostalCode; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Country: </font></td>
    <td> <?php echo $Country; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Phone: </font></td>
    <td> <?php echo $Phone; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Email: </font></td>
    <td> <?php echo $Email; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Ship Date: </font></td>
    <td> <?php echo $ShipDate; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Line 1: </font></td>
    <td> <?php echo $Line1; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Line 2: </font></td>
    <td> <?php echo $Line2; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Line 3: </font></td>
    <td> <?php echo $Line3; ?> </td>
  </tr>
  <tr>
    <td><font size="2" face="Arial, Helvetica, sans-serif">Line 4: </font></td>
    <td> <?php echo $Line4; ?> </td>
  </tr>
</table>

<p align="center"> <font size="2" face="Arial, Helvetica, sans-serif"><strong>Click 
  <a href="https://experiencethewest.com">HERE</a> to return to the home page</strong></font> 
  <!-- Do not change anything below this line -->
</p>
<?php 
}
?>
