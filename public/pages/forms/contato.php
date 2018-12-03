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

send($validate);

