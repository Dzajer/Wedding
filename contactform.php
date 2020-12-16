<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $choose = $_POST['choose'];

    $mailTo = "kontakt@aleksandragrzegorz.pl";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers, $choose);
    
}