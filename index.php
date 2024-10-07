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



if($book){
    $message =  " you have read it";
}else{
    $message = "you have to read it!";
}
?>

<h2> <?php echo $message?> </h2>
</body>
</html>