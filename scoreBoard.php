<?php
    include("db_connection.php");
    $userCollection = $quizDB->user;

    $results = $userCollection->find();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="style/scoreBoard.css">
    <title>Massouda Quiz Score Board</title>
</head>
<body>
    <div class="capsole">
        <div id="header">
            <h2>Massouda CS Quiz Score Board </h2>
            
            <button name ="exit" style="float:right;margin-top:-55px;margin-right:10px;background-color:lightgray;" onclick="window.location.href='index.php?logout=1';">Exit</button>
            
            <div style="float:left;margin-top:-75px;" id="searchBox">
                <input type="text" placeholder="search here" id="searchKey">
                <button onclick="searchQuiz();">Search</button>
            </div>
        </div>
        <div id="content">
            <table>
                
                    <td style="font-weight:bold;">Test ID#</td>
                    <td style="font-weight:bold;">Fullname</td>
                    <td style="font-weight:bold;">Gender</td>
                    <td style="font-weight:bold;">University</td>
                    <td style="font-weight:bold;">Date</td>
                    <td style="font-weight:bold;">Result</td>
                    <td style="font-weight:bold;">Score</td>
                    <td style="font-weight:bold;">Correct</td>
                    <td style="font-weight:bold;">Wrong</td>
                    
                
                
                <?php foreach ($results as $result):?> 
                      
                        <tr>
                                 
                            <td class="testId"><?php echo $result["_id"];?></td>
                            <td><?php echo $result["fullname"];?></td>
                            <td><?php echo $result["gender"];?></td>
                            <td><?php echo $result["university"];?></td>
                            <td class="billNo expDate " style="width:170px;"><?php echo $result["testDate"];?></td>
                            <td style="width:130px;"><?php echo $result["result"];?></td>         
                            <td style="width:130px;"><?php echo $result["totalScore"];?></td>         
                            <td style="width:130px;"><?php echo $result["totalCorrect"];?></td>         
                            <td style="width:130px;"><?php echo $result["totalWrong"];?></td>         
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script>
        function searchQuiz() {
            var testIds = document.getElementsByClassName("testId");
            var searchKey = document.getElementById("searchKey").value;
            var flag = false;
            for (var a = 0; a < testIds.length; a++){
                if (testIds[a].innerText === searchKey) {
                    flag = true;
                    testIds[a].parentElement.style.backgroundColor = "green";
                    testIds[a].parentElement.style.color = "white";
                    break;
                }
            }
            if (!flag) {
                alert("Such test ID does not exists !");
            }
        }
    </script>
    <script src="script/tableStyling.js"></script>
</body>
</html>