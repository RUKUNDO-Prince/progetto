<?php
    include_once '../config/config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // QUERRY THE DATABASE TO SEE IF THE USER EXISTS AND THE PASSWORD IS CORRECT
        $result = $conn -> query("SELECT * FROM users WHERE username='$username' AND password='$password'");

        // CHECK FOR ERRORS
        if (!$result) {
            echo "Error: " . $mysqli -> error;
            exit();
        }

        // CHECK IF THE QUERRY RETURNED ANY ROWS
        if ($result -> num_rows > 0) {
            // USER IS AUTHENTICATED, CREATE A SESSION
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

            // REDIRECT TO THE APPROPRIATE PAGE
            header("Location: ../../dashboard/dash.php");
            exit();
        }else {
            // INVALID CREDENTIALS, THROW AN ERROR
            echo 'Invalid username or password';
        }
    }
?>