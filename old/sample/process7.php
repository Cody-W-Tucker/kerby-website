<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
$CalendarYear = $_POST['CalendarYear'];
$CompanyorOrganization = $_POST['CompanyorOrganization'];
$Attention = $_POST['Attention'];
$StreetAddress = $_POST['$StreetAddress'];
$City = $_POST['City'];
$State = $_POST['State'];
$City = $_POST['City'];
$State = $_POST['State'];
$ZiporPostalCode = $_POST['ZiporPostalCode'];
$Country = $_POST['Country'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Quantity = $_POST['Quantity'];
$Line1 = $_POST['Line1'];
$Line2 = $_POST['Line2'];
$Line3 = $_POST['Line3'];
$Line4 = $_POST['Line4'];

#pt_register('POST','CompanyorOrganization');
#pt_register('POST','Attention');
#pt_register('POST','StreetAddress');
#pt_register('POST','City');
#pt_register('POST','State');
#pt_register('POST','ZiporPostalCode');
#pt_register('POST','Country');
#pt_register('POST','Phone');
#pt_register('POST','Email');
#pt_register('POST','Quantity');
#pt_register('POST','Line1');
#pt_register('POST','Line2');
#pt_register('POST','Line3');
#pt_register('POST','Line4');
if($CompanyorOrganization=="" || $Attention=="" || $StreetAddress=="" || $City=="" || $State=="" || $ZiporPostalCode=="" || $Phone=="" || $Email=="" ){
$errors=1;
$error.="<li>You did not enter one or more of the required fields. Please go back and try again.";
}
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$Email)){
$error.="<li>Invalid email address entered";
$errors=1;
}

if($errors==1) echo $error;
else{
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="Company or Organization: ".$CompanyorOrganization."
Attention: ".$Attention."
Street Address: ".$StreetAddress."
City: ".$City."
State: ".$State."
Zip or Postal Code: ".$ZiporPostalCode."
Country: ".$Country."
Phone: ".$Phone."
Email: ".$Email."
Quantity: ".$Quantity."
Line 1: ".$Line1."
Line 2: ".$Line2."
Line 3: ".$Line3."
Line 4: ".$Line4."
";
$message = stripslashes($message);
//mail("orders@experiencethewest.com","Calendar 2007 Sample Request",$message,"From: noreply@experiencethewest.com");
mail("Howdybob@experiencethewest.com","Calendar 2007 Sample Request",$message,"From: noreply@experiencethewest.com");
?>


<!-- This is the content of the Thank you page, be careful while changing it -->

<h2 align="center"><font face="Arial, Helvetica, sans-serif">Thank you!<br>
</font><font size="2" face="Arial, Helvetica, sans-serif">Print a copy of this
page for your records. </font><font face="Arial, Helvetica, sans-serif"></font></h2>

<table width=50% align="center">
<tr><td>Company or Organization: </td><td> <?php echo $CompanyorOrganization; ?> </td></tr>
<tr><td>Attention: </td><td> <?php echo $Attention; ?> </td></tr>
<tr><td>Street Address: </td><td> <?php echo $StreetAddress; ?> </td></tr>
<tr><td>City: </td><td> <?php echo $City; ?> </td></tr>
<tr><td>State: </td><td> <?php echo $State; ?> </td></tr>
<tr><td>Zip or Postal Code: </td><td> <?php echo $ZiporPostalCode; ?> </td></tr>
<tr><td>Country: </td><td> <?php echo $Country; ?> </td></tr>
<tr><td>Phone: </td><td> <?php echo $Phone; ?> </td></tr>
<tr><td>Email: </td><td> <?php echo $Email; ?> </td></tr>
<tr><td>Quantity: </td><td> <?php echo $Quantity; ?> </td></tr>
<tr><td>Line 1: </td><td> <?php echo $Line1; ?> </td></tr>
<tr><td>Line 2: </td><td> <?php echo $Line2; ?> </td></tr>
<tr><td>Line 3: </td><td> <?php echo $Line3; ?> </td></tr>
<tr><td>Line 4: </td><td> <?php echo $Line4; ?> </td></tr>
<tr>
  <td colspan="2"><P align="center" class=MsoNormal style="MARGIN: 0in 0in 0pt"><a href="../sample.html"><br>
        </a><font size="2" face="Arial, Helvetica, sans-serif"><strong>Click <a href="https://experiencethewest.com">HERE</a> 
        to return to the home page</strong></font></P>
    </td>
  </tr>
</table>
<!-- Do not change anything below this line -->

<?php 
}
?>
