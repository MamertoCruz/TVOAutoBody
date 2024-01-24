<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    $to = "mamerto.cruz3@gmail.com";
    //$subject = "New Message from Website";
    $headers = "From: $email";

    mail($to, $service, $message, $headers);
    
 }

?>