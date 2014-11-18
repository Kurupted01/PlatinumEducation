<?php

    $message = "";
    $message .= isset($_POST['contactus-firstname']) ? $_POST['contactus_firstname'] : "";
    $message .= " ";
    $message .= isset($_POST['contactus_surname']) ? $_POST['contactus_surname'] : "";
    $message .= " has filled in the enquiry form at "  . date("H:i") . " on " . date("m/d/Y") . "\r\n\r\n";
    $message .= "First Name: " . $_POST['contactus_firstname'] . "\r\n";
    $message .= "Surname: " . $_POST['contactus_surname'] . "\r\n";
    $message .= "Home Number: " . $_POST['contactus_phone'] . "\r\n";
    $message .= "Work Number: " . $_POST['contactus_work'] . "\r\n";
    $message .= "Mobile: " . $_POST['contactus_mob'] . "\r\n";
    $message .= "Email: " . $_POST['contactus_email'] . "\r\n";
    $message .= "Grade at School: " . $_POST['contactus_grade'] . "\r\n";

    $message .= "Subject for Tutoring: ";
    if(!empty($_POST['contactus_subjCheckbox'])) {
        foreach($_POST['contactus_subjCheckbox'] as $subject) {
            $message .= $subject ." , ";
        }
    }
    $message .= "\r\n";

    $message .= "Type of Tutoring: " . $_POST['contactus_type'] . "\r\n";

    $message .= "Day to contact: ";
    if(!empty($_POST['contactus_dayOfWeekCheckbox'])) {
        foreach($_POST['contactus_dayOfWeekCheckbox'] as $dayOfWeek){
            $message .= $dayOfWeek ." , ";
        }
    }
    $message .= "\r\n";

    //$message .= "Day to contact: " . $_POST['day1'] ." , ".$_POST['day2'] ." , ".$_POST['day3']." , ".$_POST['day4']." , ".$_POST['day5']." , ".$_POST['day6']." , ". $_POST['day7']. "\n";
    //$message .= "Time to contact: " . $_POST['time1'] ." , ".$_POST['time2']." , ".$_POST['time3']. "\n";
    $message .= "Time to contact: ";
    if(!empty($_POST['contactus_timeOfDayCheckbox'])) {
        foreach($_POST['contactus_timeOfDayCheckbox'] as $timeOfDay){
            $message .= $timeOfDay ." , ";
        }
    }
    $message .= "\r \n";

    //$message .= "How did they hear about us?: " . $_POST['ad1'] ." , ". $_POST['ad2']." , ". $_POST['ad3']." , ". $_POST['ad4']." , ". $_POST['ad5'] ." , ". $_POST['ad6']." , ". $_POST['ad7']." , ". $_POST['ad8'] . "\n";
    $message .= "How did they hear about us?: ";
    if(!empty($_POST['contactus_hearAboutCheckbox'])) {
        foreach($_POST['contactus_hearAboutCheckbox'] as $hearAbout){
            $message .= $hearAbout ." , ";
        }
    }
    $message .= "\n";

    $to = "info@platinumeducation.com.au";
    //$to = "andrew.mj.stevens@gmail.com";
    $subject = "Enquiry Form";
    $headers = "From: Platinum Education <php@platinumeducation.com.au>\r \n";
    $headers .= "X-Priority: 1 \r \n";
    $headers .= "X-MSMail-Priority: High";

    $result = mail($to,$subject,$message,$headers);
    $url = 'thankyou.php';
    header('Location: ' . $url);

