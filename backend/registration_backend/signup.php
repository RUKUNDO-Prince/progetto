<?php
    include_once '../config/config.php';


    $name = $email = $password = $username = $contact = '';
    $name_err = $email_err = $password_err = $username_err = $contact_err = '';

    if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
      $name_err = 'Name is required';
    }else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['email'])) {
      $email_err = 'Email is required';
    }else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    if (empty($_POST['username'])) {
      $username_err = 'Username is required';
    }else {
      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['contact'])) {
      $contact_err = 'Contact is required';
    }else {
      $contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['password'])) {
      $password_err = 'Password is required';
    }else {
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($name_err) && empty($email_err) && empty($password_err && empty($username_err) && empty($contact_err))) {
    //   $result = $conn -> query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    //   if ($result) {
    //     echo 'User already exists!';
    //   }else {
        $sql = "INSERT INTO users (name, contact, email, username, password) VALUES ('$name', '$contact', '$email', '$username', '$password')";
        if (mysqli_query($conn, $sql)) {
          session_start();
          $_SESSION["username"] = $username;
          $_SESSION["email"] = $email;
          header('Location: ../../dashboard/dash.php');
          exit();
        }else {
          echo 'Error: ' . mysqli_error($conn);
        }
      }
    // }
  }
?>