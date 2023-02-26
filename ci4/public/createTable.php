<?php
$servername = "192.168.150.213";
$username = "webprogmi212";
$password = "b3ntRhino98";
$dbname = "webprogmi212";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE juanillo_userAcc (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lName VARCHAR(30) NOT NULL,
fName VARCHAR(30) NOT NULL,
mName VARCHAR(30),
nName VARCHAR(30),
email VARCHAR(50) NOT NULL,
userPass VARCHAR(50) NOT NULL,
cPassword VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>