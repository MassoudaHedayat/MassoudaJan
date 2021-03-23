<?php
    include("db_connection.php");
    session_start();
    // Collect personal information
    $testId = $_SESSION["id"];
    $firstname = $_SESSION["firstname"];
    $lastname = $_SESSION["lastname"];
    $email = $_SESSION["email"];
    $university = $_SESSION["university"];
    $faculty = $_SESSION["faculty"];
    $gender = $_SESSION["gender"];

    $fullName = $firstname . ' ' . $lastname;

    // collect quiz statistics
    $totalAtmp = $_GET['TA'];
    $totalCrct = $_GET['TC'];
    $totalWrng = $_GET['TW'];
    $totalPER = $_GET['P'];
    $totalSC = $_GET['TS'];

    //calculate for  test result
    $result ="";
    if($totalSC >= 90){
        $result = "Passed";
    }else{
        $result = "Failed";
    }


    // set time for test gived
    date_default_timezone_set("Asia/Kabul");
    $testDate = date("d-M-Y  h:i a");

    $userCollection = $quizDB->user;
    $addResult = $userCollection->insertOne(
        ["_id"=>"$testId",
        "class"=>"user",
        "fullname"=>"$fullName",
        "gender"=>"$gender",
        "university"=>"$university",
        "testDate"=>"$testDate",
        "totalCorrect"=>"$totalCrct",
        "totalWrong"=>"$totalWrng",
        "totalScore"=>"$totalSC,   $totalPER",
        "result"=>"$result"]
    );

    if($addResult){
        session_destroy();
        unset($_SESSION["id"]);
        unset($_SESSION["firstname"]);
        unset($_SESSION["lastname"]);
        unset($_SESSION["email"]);
        unset($_SESSION["university"]);
        unset($_SESSION["faculty"]);
        unset($_SESSION["gender"]);
    
        echo "<script>alert('Your information and result successfully added to score board!');</script>";
        echo "<script>window.location.href='scoreBoard.php?testId=?$testId';</script>";
    }else{
        echo "<script>alert('An error occured!');</script>";
        echo "<script>window.location.href='index.php';</script>";

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving to Score Board</title>
</head>
<body>
    
</body>
</html>


