<?php

if(isset($_POST['submit'])){
    $name = $_post['name'];
    $subject = $_post['subject'];
    $mailFrom = $_post['email'];
    $message = $_post['message'];

    $mailTo = "andrew.chen6@baruchmail.cuny.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved and e-mail from ".$name.".\n\n".$message:

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}