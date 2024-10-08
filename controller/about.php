    <?php
$greeting = "php";
// echo "Hello $greeting";

$book = true;

//conditional
if($book){
    $message =  " you have read it";
}else{
    $message = "you have to read it!";
}

//array
$contacts = [
    ["name"=>"John",
     "age"=>18,
     "website"=>"https://example.com"
    ],
    ["name"=>"Doe",
     "age"=>28,
     "website"=>"https://example.com"
    ],
];

//  function filterByName($contacts, $key, $value){
//    $searchName = [];

//    foreach($contacts as $contact){
//     if($contact[$key] === $value){
//         $searchName[] = $contact;
//     }
// }
// return $searchName;

// }


// array_filter function
$filteredData = array_filter($contacts, function($data){
   return $data['name'] === "John";
});

require("url.php");
$heading = "About Us";
require "views/about.view.php";
