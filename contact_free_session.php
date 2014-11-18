<?php
//    require_once('recaptchalib.php');
//    $privatekey = "6LfJUfkSAAAAAMgu7G_CPinVhQgl13UaIzQ1x9iq";
//    $resp = recaptcha_check_answer ($privatekey,
//    $_SERVER["REMOTE_ADDR"],
//    $_POST["recaptcha_challenge_field"],
//    $_POST["recaptcha_response_field"]);

//if (!$resp->is_valid) {
//    // What happens when the CAPTCHA was entered incorrectly
//    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
//        "(reCAPTCHA said: " . $resp->error . ")");
//} else {
    $message = "" . isset($_POST['contactus_free_firstname']) ? $_POST['contactus_free_firstname'] : "";
    $message .= " " . (isset($_POST['contactus_free_surname']) ? $_POST['contactus_free_surname'] : "");
    $message .= " has filled in the enquiry form at "  . date("H:i") . " on " . date("m/d/Y") . "\r\n\r\n";
    $message .= "First Name: " . (isset($_POST['contactus_free_firstname']) ? $_POST['contactus_free_firstname'] : "") . "\r\n";
    $message .= "Surname: " . (isset($_POST['contactus_free_surname']) ? $_POST['contactus_free_surname'] : "") . "\r\n";
    $message .= "Home Number: " . (isset($_POST['contactus_free_phone']) ? $_POST['contactus_free_phone'] : "") . "\r\n";
    $message .= "Work Number: " . (isset($_POST['contactus_free_work']) ? $_POST['contactus_free_work'] : "") . "\r\n";
    $message .= "Mobile: " . (isset($_POST['contactus_free_mob']) ? $_POST['contactus_free_mob'] : "") . "\r\n";
    $message .= "Email: " . (isset($_POST['contactus_free_email']) ? $_POST['contactus_free_email'] : "") . "\r\n";

    $message .= "\r\n";

    $to = "info@platinumeducation.com.au";
    //$to = "andrew.mj.stevens@gmail.com";
    $subject = "Enquiry For Free Session";
    $headers = "From: Platinum Education <php@platinumeducation.com.au>\r \n";
    $headers .= "X-Priority: 1 \r \n";
    $headers .= "X-MSMail-Priority: High";

    $result = mail($to,$subject,$message,$headers);
    $url = 'thankyou.php';
    header('Location: ' . $url);

//}

