<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body class="main">

<!--login in -->
<?php
$email = $password = "";
$emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
    $emailErr = "Email is required.";
    }
    else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    }
    else {
        $password = test_input($_POST["password"]);
    }
}
?>

<?php
//defining the variables
//Setting a variable to false to check over at the end of the input
//these are the variables for the error messages
$nameErr = $emailErr = $userNameErr = $birthdayErr = $answerErr = "";
$name = $email = $userName = $birthday = $answer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Name is required.";
    }
    else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    }
    else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["username"])) {
        $userNameErr = "Username is required.";
    }
    else {
        $userName = test_input($_POST["username"]);
    }

    if (empty($_POST["birthday"])) {
        $birthdayErr = "Your birthday is required.";
    }
    else {
        $birthday = test_input($_POST["birthday"]);
    }
    
    if (empty($_POST["answer"])) {
        $answerErr = "Your answer is required.";
        }
    else {
        $answer = test_input($_POST["answer"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

    ?>

    <div class = "header">
            <h1 class="feedbackHeader"> Log in / Sign Up </h1>
    </div>
    <br>
    <div class="body">
    <div class="userDetails">
        <div class="login">
        <form class = "userForm" method="post" action="feedbackForm.php">
            Email: <br>
            <input type="email" name="email"></input>
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Password: <br>
            <input type="password" name="password"></input>
            <span class="error">* <?php echo $passwordErr;?></span>
            <br>
            <input type="submit" name="submit"></button>

            <br><br><br>
        </form>
        </div>
    </div>
    <!-- <div class="line">
    </div> -->
    <div class="feed">
        <form class = "signUp" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <br>
            UserName: <input type="text" name="username">
            <span class="error">* <?php echo $userNameErr;?></span><br><br>
            name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span><br><br>
            email: <input type="email" name="email">
            <span class="error">* <?php  echo $emailErr;?></span><br><br>
            Date of Birth: <input type="date" id="birthday" name="birthday"> 
            <span class="error">* <?php  echo $birthdayErr;?></span><br><br>
            Mobile Numer: <input type=”tel” id=”phone” name=”phone”>
            <small> Format: 12345678901</small>
            <br><br>
            <br>
            Gender:
            <select>
                <option name="gender" value="select"> -- select -- </option>
                <option name="gender" value="female">Female</option>
                <option name="gender" value="male">Male</option>
                <option name="gender" value="other">Non-Binary / Other</option>
            </select>
            <br><br>
            Security Question:
            <select>
                <option name="gender" value="select"> -- select -- </option>
                <option value="Hometown">Where is your hometown?</option>
                <option value="sports">What is your favourite sports team?</option>
                <option value="pet">Pet's name? (Never use this option)</option>
            </select>
            <br>
            <input type="text" name="answer"> 
            <span class="error">*<?php echo $answerErr;?></span><br>
            <br>
            <input type="submit" name="submit" value="Submit">
            <br><br>
        </form>
        </div>
        </div>
    </div>
    <div class="logo">
      <img src="https://d3lcdr963b5ubl.cloudfront.net/uploads/za12HFHb4frfRXT9EhfgREiK42vFiu3PGVZ7xCQjQC6frkoxsHGByrR80tXHHuw1.png">
    </div>
    </body>
</html>