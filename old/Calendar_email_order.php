<?php

$MAILHEADERS =  'From: HowedyBob@ExperienceTheWest.com' . "\r\n";
$MAILHEADERS .=  ';MIME-Version: 1.0' . "\r\n";
$MAILHEADERS .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message .= $_POST['message'];
$message .= "email from: ".$_GET['email']."\n<br />";
$message .= "order of ".$_GET['OrderAmt'];

mail("Clinton@exch.ltne.com","Email Order",$message,$MAILHEADERS);
//mail("HowdyBob@hb.experiencethewest.com","Email Order",$message,$MAILHEADERS);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style> 
body {background: url(../public_html/img/7328png.png) #fff no-repeat top left fixed; text-align:left;} 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Placed</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-82644264-1', 'auto');
  ga('send', 'pageview');
 
</script>

</head>
<body bgcolor="#FFFFFF" text="#000000" background="../public_html/img/7328png.png" background-repeat:no-repeat >
<p align="center">
<img src="images/Callendar_Thankyou_image.jpg" alt="picture of bob kerby" border="0" ><br />
<br />
<b>Thank you for your order!</b><br />
<br />
Your Bob Kerby Calendars will ship directly to you via UPS.<br />
<br />
If we can be of further assistance, please contact Clint at: 1-800-657-2149.<br />
Or e-mail: <a href="mailto:Clint@ExperienceTheWest.com">Clint@ExperienceTheWest.com</a><br />
<br />
<b>It is our pleasure to serve you!</b><br />


</p>

</body>
</html>
