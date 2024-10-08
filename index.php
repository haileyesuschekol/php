<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    
    
    <?php
$greeting = "php";
echo "Hello $greeting";

$book = true;

//conditional
if($book){
    $message =  " you have read it";
}else{
    $message = "you have to read it!";
}
?>

<h2> <?php echo $message?> </h2>

<?php
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
})

?>

<ul>
    <?php foreach($filteredData as $contact):?>
     <li>  <?= $contact["name"]?></li>
     <li>  <?= $contact["age"]?></li>
    <a href="<?= $contact["website"]?>">contact</a>
    <?php endforeach; ?>
</ul>
</body>
</html>