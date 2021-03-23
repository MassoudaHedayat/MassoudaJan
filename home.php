<?php
    include("db_connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    
    <title>Quiz</title>
</head>
<body>
    <div id="mar">
        <marquee behavior="alternate" direction="left">
            <h1 >Welcome to</h1>
            <h1 >Massouda Quiz!</h1>
        </marquee>
    </div>
    <div class="home-box custom-box">
        <h3>Instruction:</h3>
        <p>Total number of Questions:10</p>
        <p>Please choose the department that you give quiz:</p>
        
        <audio src="script/true.mp3" id="trueAudio" autoplay="autoplay"></audio>        
        <audio src="script/false.mp3" id="falseAudio" autoplay="autoplay"></audio>        
        <audio src="script/backMusic.mp3" id="backAudio" autoplay="autoplay"></audio>  

        <div id="selectDep">
            <input type="radio" value="1" name="dep" onclick="selectDeps(this.value);" id="is"><span class="deps" style="margin-top:-10px;">Information Systems</span><br> 
            <input type="radio" value="2" name="dep" onclick="selectDeps(this.value);" id="it"><span class="deps">Information Technology</span><br>
            <input type="radio" value="3" name="dep" onclick="selectDeps(this.value);" id="se"><span class="deps" >Software Engineering</span><br>
        </div>
        <button type="button" class="btn" onclick="goToQuiz();">Start Quiz</button>
    </div>
    <div class="quiz-box custom-box hide ">
        <div class="question-number">
            
        </div>
        <div class="question-text">
            
        </div>
        <div class="option-container">
           
        </div>
        <div class="next-question-btn">
            <button type="button" class="btn" onclick="next();"> Next </button>
        </div>
        <div class="answers-indicator">
            <div class="ax1"></div>
            <div class="ax2"></div>
            <div class="ax3"></div>
            <div class="ax4"></div>
            <div class="ax5"></div>
            <div class="ax6"></div>
            <div class="ax7"></div>
            <div class="ax8"></div>
            <div class="ax9"></div>
            <div class="ax10"></div>
        </div>
    </div>
    <div class="result-box custom-box hide">
        <h1>Quiz Results:</h1>
    <form action="storeResult.php" method="get">
        <table>
            <tr>
                <td>Total Questions</td>
                <td><input type="text" class="total-question" name="TQ" value="10"></td>
            </tr>
            <tr>
                <td>Attempt</td>
                <td><input type="text" class="total-attempt" name="TA"></td>
            </tr>
            <tr>
                <td>Correct</td>
                <td><input type="text" class="total-correct" name="TC"></td>
            </tr>
            <tr>
                <td>Wrong</td>
                <td><input type="text" class="total-wrong" name="TW"></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><input type="text" class="percentage" name="P"></td>
            </tr>
            <tr>
                <td>Your Total Score</td>
                <td><input type="text" class="total-score" name="TS"></td>
            </tr>
        </table>
        <button type="submit" class="btn">Save Score Board</button>
        <button type="button" class="btn" onclick="location.reload();">Go To Home</button>
    </form>    
    </div>
    <script src="script/questions.js"></script>
    
    <script src="script/app.js" type="text/JavaScript"></script>
</body>
</html>