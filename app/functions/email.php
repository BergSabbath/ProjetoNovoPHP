<?php

// function send($data) {
//     $to = 'bergyagami@gmail.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $headers = "From: {$data->email}". "\r\n".
//     'Reply-To: contato@devclass.com.br'. "\r\n".
//     'x-Mailer: PHP/' . phpversion();

//     return mail($to, $subject, $message, $headers);
// }

function send(array $data) {
    
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure ='plain';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = '84ae4b5c891639';
    $email->Password = 'd62bbf8f025cc1';
    $email->isHTML(true);
    $email->setFrom('bergyagami@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver html';
    $email->MsgHTML($data['mensagem']);
    
    return $email->send();
//para ver o error: $email->ErrorInfo;
}