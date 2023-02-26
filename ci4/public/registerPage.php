<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginTemplate.css">
    <meta name="description" content="This webpage is a compilation of everything about Gabrielle Jonathan Juanillo">
    <title>Welcome! | Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo&display=swap" rel="stylesheet">
    <link rel="icon" href="Pictures/Juanillo.png">
</head>
<body>

    <?php
    // define variables and set to empty values
    $lastName = $firstName = $middleName = $nickname = $email = $password = $passwordCon = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = test_input($_POST["lastName"]);
    $firstName = test_input($_POST["firstName"]);
    $middleName = test_input($_POST["middleName"]);
    $nickname = test_input($_POST["nickname"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $passwordCon = test_input($_POST["passwordCon"]);
    
    header("Location: registeredAccount.php");
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <div class="loginCard">
        <div class="header">
            <a href="loginTemplate.html"><img class="logo" src="Pictures/Juanillo.png" alt="Portfolio Logo" title="Home - Juanillo" height="120"></a>
            <h2 class="text-center">Register</h2>
            <p class="text-center">Be a part of the community by registering below!</p>
            <form class="registerCredentials" id="loginCredential" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <label for="lastName" class="reglabels">Last Name<p class="fill">*</p></label>
                <br>
                <input type="text" id="lastName" name="lastName" value placeholder="Last Name">
                <br>
                <br>
                <label for="firstName" class="reglabels">First Name <p class="fill">*</p></label>
                <br>
                <input type="text" name="firstName" placeholder="First Name">
                <br>
                <br>
                <label for="middleName" class="reglabels">Middle Name</label>
                <br>
                <input type="text" id="middleName" name="middleName" value placeholder="Middle Name">
                <br>
                <br>
                <label for="nickname" class="reglabels">Nickname</label>
                <br>
                <input type="text" id="nickname" name="nickname" value placeholder="Nickname">
                <br>
                <br>
                <label for="email" class="reglabels">Email <p class="fill">*</p></label>
                <br>
                <input type="email" id="email" name="email" value placeholder="Email">
                <br>
                <br>
                <label for="password" class="reglabels">Password <p class="fill">*</p></label>
                <br>
                <input type="password" id="password" name="password" value placeholder="Password">
                <br>
                <br>
                <label for="passwordCon" class="reglabels">Confirm Password <p class="fill">*</p></label>
                <br>
                <input type="password" id="passwordCon" name="passwordCon" value placeholder="Confirm Password">
                <br>
                <br>
                <button class="loginButton">Sign up</button>
            </form>
            <p class="signUp">Already Registered? <a class="register" href="loginTemplate.html">Sign in</a></p>
            
            
            
            <?php
            /*echo "<h2>Your Input:</h2>";
            echo $lastName . "<br>";
            echo $firstName . "<br>";
            echo $middleName . "<br>"; 
            echo $nickname . "<br>"; 
            echo $email . "<br>";
            echo $password . "<br>";
            echo $passwordCon . "<br>";
            */
            ?> 
            

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $servername = "192.168.150.213";
                $username = "webprogmi212";
                $password = "b3ntRhino98";
                $dbname = "webprogmi212";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO juanillo_userAcc (lName, fName, mName, nName, email, userPass, cPassword)
                VALUES ('$lastName', '$firstName', '$middleName', '$nickname', '$email', '$password', '$passwordCon')";

                if ($conn->query($sql) === TRUE) {
                echo "Account Created!";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
            ?>
        </div>
    </div>
    
</body>
</html>