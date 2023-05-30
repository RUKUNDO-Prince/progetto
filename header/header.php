<?php
    session_start();
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>

<div class="nav">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li>Welcome</li><?php echo $username; ?>
        <li>
            <a href="../backend/registration_backend/logout.php"><i class="fas fa-power-off"></i></a>
        </li>
    </ul>
</div>