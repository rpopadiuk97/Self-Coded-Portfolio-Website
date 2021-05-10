<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $emailTo = "rpopadiuk@ryerson.ca";
    $headers = "From: ".$emailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($emailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>