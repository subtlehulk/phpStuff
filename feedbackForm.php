<!DOCTYPE html>


<!-- <?php
//PHP validation on form input
$name = $gender = $feedback = "";
$email = $_POST["email"];

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = test_input($_POST["name"]);
//   $gender = test_input($_POST["gender"]);
//   $feedback = test_input($_POST["feedback"]);
  
// }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?> -->

<?php

//defining the variables
//these are the variables for the error messages
$nameErr = $genderErr = $feedbackErr = "";
$nameFull = $genderFull = $feedbackFull = false;
$name = $gender = $feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required.";
  }
  else {
    $name = test_input($_POST["name"]);
    $nameFull = true;
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required.";
  }
  else {
    $gender = test_input($_POST["gender"]);
    $genderFull = true;
    }

  if (empty($_POST["feedback"])) {
    $feedbackErr = "Your feedback is required.";
  }
  else {
    $feedback = test_input($_POST["feedback"]);
    $feedbackFull = true;
  }
}
  if ($nameFull = $genderFull = $feedbackFull === TRUE) {
    echo"<script type='text/javascript'>alert('Feedback submitted succesfully!');</script>";
  }
 ?>

<html>
  <head>
    <link rel="stylesheet" href="mystyle.css">
  </head>
  <body>
    <div class = "header">
      <h1 class="feedbackHeader"><a href="index.php"> Feedback </a></h1>
    </div>
    <br>
    <div class="body">
      <div class="userDetails">
        <div>

          <form class = "userForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Name: <br>
            <input type="text"  name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            Email: <?php echo $email?> <br>
            <br><br>
            Mobile: <br>
            <input type="tel" name="phoneNumber"></input>
            <br><br>
            Gender: <span class="error">* <?php echo $genderErr;?></span>
            <br>
            <input type="radio" name="gender" value="male"> Male</input>
            <br><br>
            <input type="radio" name="gender" value="female"> Female </input>
            <br><br>
            <input type="radio" name="gender" value="other"> Other </input>
        </div>
      </div>
      <div class="feed">
        <div>
            Feedback: <span class="error">* <?php echo $feedbackErr;?></span><br>
            <textarea name="feedback" rows="30" cols="100" value="Enter your feedback here..">Enter your feedback here..</textarea>
            <br><br>
            <input type="submit" name="submit" ></input>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>