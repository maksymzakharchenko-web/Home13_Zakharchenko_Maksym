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

$sql = "INSERT INTO Registration (`Username`, `Email`, `Password`, `Repeat_pass`, `First_name`, `Last_name`, `Age`, `Gender`) VALUES ('$newUser', '$email', '$password','$repeatPassword','$firstName', '$lastName','$age','$gender')";
header( "Refresh: 3, url=http://127.0.0.1");
$result = $conn->query($sql);

if ($result) {
    echo '<h1>Registration successfully</h1>';
    echo '<h2>Your registration information</h2>';
    echo "Username: $newUser <br>";
    echo "Your email: $email <br>";
    echo "First name: $firstName <br>";
    echo "Last name: $lastName <br>";
    echo "Your age: $age <br>";
    echo "Your gender: $gender <br>";
}



