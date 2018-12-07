<?php

require "../../../bootstrap.php";

// apenas se quiser pegar o metodo utilizado 
//dd($_SERVER['REQUEST_METHOD']);


if(isEmpty()){
    flash('message', 'Preencha todos os campos');

    return redirect("create_user");
}

$validate = validate([

    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);



if($cadastrado){
    flash('message', 'Cadastrado com sucesso', 'success');
    
    return redirect("create_user");
}

flash('message', 'Erro ao cadastrar');
    
    redirect("create_user");