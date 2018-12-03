<?php

function send($data) {
    $to = 'bergsabbath@gmail.com';
    $subject = $data->subject;
    $message = $data->message;
    $headers = "From: {$data->email}". "\r\n".
    'Reply-To: contato@devclass.com.br'. "\r\n".
    'x-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}