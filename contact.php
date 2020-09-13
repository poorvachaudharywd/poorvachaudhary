<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];
    $mailto = "ycpoorva@rediffmail.com";
    $headers = "From ".$mailfrom;
    $txt = "You have an email from ".$name.". \n\n".$message;
    mail($mailto, $subject, $txt, $headers, $message);
    header("Location: contact.html");
}