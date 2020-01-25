<?php

$servername = "127.0.0.1";
$username = "root";
$password = "123456789";
$dbname = "test";

$conn = new Mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$newUser = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$repeatPassword = md5($_POST['repeat-password']);
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "SELECT * FROM Registration WHERE Username = '$newUser' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
         echo "<h3>Your personal information</h3><br>
              Login: $newUser</br>
              Email: $row[Email]</br>
              First name: $row[First_name]<br>
              Last name: $row[Last_name]<br>
              Your age: $row[Age]<br>
              Your gender: $row[Gender]<br>";
    }
} else {
    echo "0 results. This account does not exist.";
}