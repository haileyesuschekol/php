<?php  

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

     die();
    }

    
    //tells to nav request url
    function urls($value){
        return $_SERVER['REQUEST_URI'] === $value;
    }
   

