<?php

    $client_name = $_Post['name'];
    $client_tel = $_Post['tel'];
    $client_email = $_Post['email'];
    $client_vehicle = $_Post['vehicle'];
    $client_message = $_Post['message'];

    $rad_email = 'ripsautodetail@gmail.com';
    $email_subject = "New Client Info Request";
    $email_body = "Client Name: $client_name.\n".
                    "Client Phone: $client_tel.\n"
                    "Client Email: $client_email.\n".
                    "Client Vehicle: $client_vehicle.\n".
                    "Client Message: $client_message.\n";

    $to = "ripsautodetail@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $client_email \r\n";
    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>