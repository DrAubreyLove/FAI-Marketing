<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "faithfulambassadors.llc@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Email Signup!";
$email = $_POST['email'];

# RESULT PAGE
$location = "https://www.fai.marketing";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Email: ".$_REQUEST['email']." \n";
$body .= "Would like to be added to the Email List Please!.";


## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>
