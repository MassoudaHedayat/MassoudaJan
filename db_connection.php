<?php
    include("../vendor/autoload.php");
    $db = new MongoDB\Client;
    
    if($db){
        $quizDB = $db->quiz;
    }else{
        echo "An Error Occured during Database Connection!";
 
    }


?>