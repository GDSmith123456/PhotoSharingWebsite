<?php
$usernameR = $_POST['usernameR'];
$passwordR = $_POST['passwordR'];
$emailR = $_POST['emailR'];

if (!empty($usernameR) || !empty($passwordR)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webapp";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT users From webapp email = ? Limit 1";
        $INSERT = "INSERT Into users (username, password, email) values(?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $emailR);
        $stmt->execute();
        $stmt->bind_result($emailR);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $usernameR, $passwordR, $emailR);
            $stmt->execute();
            echo "New record inserted sucessfully";
        } else {
            echo "Email already in use";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
    //Database Connection
