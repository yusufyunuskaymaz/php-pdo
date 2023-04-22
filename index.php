<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php require_once "baglan.php";
 
 if(!isset($_GET["sayfa"])){
    $_GET["sayfa"] = "index";
 }

 switch ($_GET["sayfa"]) {
    case "index":
        require_once "homepage.php";
        break;
    case 'insert':
        require_once "insert.php";
        break;
    
    default:
        # code...
        break;
 }


?>



    
</body>
</html>