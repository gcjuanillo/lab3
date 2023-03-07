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
    <div class="loginCard">
        <div class="header">
            <a href="index.html"><img class="logo" src="Pictures/Juanillo.png" alt="Portfolio Logo" title="Home - Juanillo" height="120"></a>
            <h2 class="text-center">Register</h2>
            <p class="text-center">Be a part of the community by registering below!</p>

            <?php
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

                $sql = "SELECT lName, fName, mName, nName, email FROM juanillo_userAcc";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                echo "<table cellspacing='10'>";
                echo "<tr><th>Last Name</th><th>First Name</th><th>Middle Name</th><th>Nickname</th><th>Email</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["lName"]. "</td><td>" . $row["fName"]. "</td><td>" . $row["mName"]. "</td><td>" . $row["nName"]. "</td><td>" . $row["email"]. "</td></tr>";
                }
                echo "</table>";
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
            
        </div>
    </div>
    
</body>
</html>
