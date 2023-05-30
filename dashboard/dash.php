<?php
    session_start();
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dash.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <script src="dash.js"></script>
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>USER DASHBOARD</h1>
        </div>
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
      </div>
      <div class="body-lay">
        <div onclick="handleNavigate('championship')" class="body-child">
          <h1>CHAMPIONSHIP SECTION</h1>
        </div>
        <div onclick="handleNavigate('tournament')" class="body-child">
          <h1>TOURNAMENT SECTION</h1>
        </div>
      </div>
    </div>
  </body>
</html>
