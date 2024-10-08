<?php  

function dd($value){
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";
    die();
}


function urls($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

