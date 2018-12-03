<?php

function dd($dump){

    var_dump($dump);
    die();
}

function request(){

    $request = $_SERVER['REQUEST_METHOD'];// para pegar o metodo utilizado 

    if($request == 'POST'){
        return $_POST;
    }

    return $_GET;
}

function redirect($target){
    return header("location:/?page={$target}");
}
function redirectToHome(){
    return header("location:/");
}