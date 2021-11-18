<?php
$username = $_POST['usernameR'];
$email = $_POST['emailR'];
$password = $_POST['passwordR'];


//Database Connection
$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    echo "connection establsihed";
    $stmt = $conn->prepare("INSERT into users(username,password,email) values (?,?,?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    
    echo "registration success";
    $stmt->close();
    $conn->close();
};


