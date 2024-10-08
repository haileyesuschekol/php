<?php  

function dd($value){
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";
    die();
}


function urls($value){
    echo $_SERVER['REQUEST_URI'] === $value ? 'bg-gray-900 text-white' : "text-gray-300";
}

?>