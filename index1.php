
<?php

require("url.php");

$uri = $_SERVER["REQUEST_URI"];

if($uri === '/index'){
require('controller/index.php');

}else if($uri === '/about'){
require('controller/about.php');

}else if($uri ==="/contact"){
    require('controller/contact.php');
}

?>