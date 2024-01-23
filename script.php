<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    $to = 'aimeexue623@gmail.com';
    $subject = 'Message from Website';
    $headers = 'From: Aimee web message'; //

    mail($to, $subject, $message, $headers);
}
?>