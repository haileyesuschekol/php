<?php  

function urls($value){
    echo $_SERVER['REQUEST_URI'] === $value ? 'bg-gray-900 text-white' : "text-gray-300";
}

?>