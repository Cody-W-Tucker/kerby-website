<?php
    $message_sent = false;
    if(isset($_POST['Email']) && $_POST['Email'] != ''){
        if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
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
    
            mail("dustin.j.turner@outlook.com",$msgSubject,$body);
            $message_sent = true;
            unset($body);

            if($message_sent){
                header("Location: thankyou.html");
    }
  }
}
?>
