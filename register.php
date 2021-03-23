<?php
    if(isset($_GET["register"])){
        session_start();
        $_SESSION["id"] = $_GET["id"];
        $_SESSION["firstname"] = $_GET["firstname"];
        $_SESSION["lastname"] = $_GET["lastname"];
        $_SESSION["email"] = $_GET["email"];
        $_SESSION["university"] = $_GET["university"];
        $_SESSION["faculty"] = $_GET["faculty"];
        $_SESSION["gender"] = $_GET["gender"];

        echo "<script>window.location.href='home.php';</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>