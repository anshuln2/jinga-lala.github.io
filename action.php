
<?php

if($_POST["submit"]) {
    $recipient="yash.jain3599@gmail.com";
    $subject="Webpage form filled by someone";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $phone=$_POST["Phone"]
    $mailBody="Name: $sender\nEmail: $senderEmail\n Phone: $phone\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
    
}

?>