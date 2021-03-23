<?php
  include("db_connection.php");
  $userCollection = $quizDB->user;

  $lastId = $userCollection->count(array("class"=>"user"));
  $currentID = $lastId + 1;


?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Register Your Self </title>
    <link rel="stylesheet" href="style/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="register.php" method="get">
        <div class="user-details">

        <div class="input-box">
            <span class="details">Your Test ID</span>
            <input type="text" style = "pointer-events:none;" value = "<?php echo $currentID;?>" name="id" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"  name="email" required>
          </div>

          <div class="input-box">
            <span class="details">firstname</span>
            <input type="text" name="firstname" required>
          </div>

          <div class="input-box">
            <span class="details">University</span>
            <input type="text"  name="university" required>
          </div>

          <div class="input-box">
            <span class="details">Lastname</span>
            <input type="text" name="lastname" required>
          </div>

          <div class="input-box">
            <span class="details">Faculty</span>
            <input type="text"  name="faculty" required>
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender"  value ="N/A" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input name='register' type="submit" value="Give a Test" style="float:left;">
          <input name='see' type="button" onclick="window.location.href='scoreBoard.php';" value="See Score Board">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
