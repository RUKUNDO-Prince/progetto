<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tournament Page</title>
    <link rel="stylesheet" href="tournament.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <script src="tournament.js"></script>
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNAMENT SECTION</h1>
        </div>
        <?php include_once '../header/header.php'; ?>
      </div>

      <div class="body-lay">
        <div onclick="handleNavigate('management')" class="body-child">
          <h1 style="font-size: 12px">TOURNAMENT MANAGEMENT</h1>
          <div>
            <h3>0 tournaments in this section</h3>
          </div>
        </div>
        <div onclick="handleNavigate('list')" class="body-child">
          <h1>TOURNAMENT LIST</h1>
          <div>
            <h3>4 tournaments still open</h3>
            <h3>2 tournaments with entry closed</h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
