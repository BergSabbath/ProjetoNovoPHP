<?php

require "../../../bootstrap.php";

// apenas se quiser pegar o metodo utilizado 
//dd($_SERVER['REQUEST_METHOD']);


if(isEmpty()){
    flash('message', 'Preencha todos os campos');

    return redirect("contato");
}

$validate = validate([

    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',

]);


$data = [
    'quem' => $validate->email,
    'para' => 'contato@devclass.com.br',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject,
];

if(send($data)){
    flash('message', 'Email enviado com sucesso', 'success');

    return redirect("contato");
}

