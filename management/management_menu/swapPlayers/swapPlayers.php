<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Swap PLayers</title>
    <link rel="stylesheet" href="./swapPlayers.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT MANAGEMENT</h1>
        </div>
        <div class="nav">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li>Welcome D Regis</li>
            <li>
              <a href="logout.php"><i class="fas fa-power-off"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="body-lay">
        <div class="menu">
          <div class="menu-top">
            <div class="menu-top-container">
              <h5>Management Menu</h5>
            </div>

            <?php
              include_once '../../../backend/sidebar/sidebar.php';
            ?>
          </div>

          <div class="menu-bottom">
            <div class="menu-bottom-container">
              <h5 class="menu-bottom-container-heading">Categories</h5>
            </div>
            <div class="menu-bottom-container-two">
              <ul class="menu-items">
                <li>All</li>
                <li>Attacking Midfielder(AM)</li>
                <li>Central Defensive(CB)</li>
                <li>Central Forward(CF)</li>
                <li>Fluidfying Full-Back(WB)</li>
                <li>Forward Wing(WF)</li>
                <li>Full Back(SB)</li>
                <li>GoalKeeper(GK)</li>
                <li>Lateral Midfielder(SM)</li>
                <li>Libero(SW)</li>
                <li>Median(DM)</li>
                <li>Midfielder(CM)</li>
                <li>Secondary Striker(SS)</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="body-content">
          <div class="body-container-one">
            <div class="body-header">
              <h4>Bayer Leverkusen FuBball</h4>
              <div>
                <h4>MONEY: <span>$ 50000.00</span></h4>
              </div>

              <div>
                <h4>MEMBERSHIP PLAYERS: <span>0 / 32</span></h4>
              </div>
            </div>
            <div class="body-main">
              <div class="body-main-left">
                <div class="body-content-top-center">
                  <div class="body-content-lay">
                    <h5>GoalKeeper (GK):</h5>
                    <h5>0 / 2 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Central Defensive (CB) or Libero (SW):</h5>
                    <h5>0 / 4 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Fullbacks (SB):</h5>
                    <h5>0 / 4 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Median (DM):</h5>
                    <h5>0 / 3 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Midfielder (CM):</h5>
                    <h5>0 / 3 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Attacking Midfielder (AM):</h5>
                    <h5>0 / 2 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>
                      Fuildifying full-back (WB) or Lateral Midfielder (SM) or
                      Foward Wing(WF):
                    </h5>
                    <h5>0 / 4 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Secondary Striker (SS) or Central Forward (CF):</h5>
                    <h5>0 / 4 minimum</h5>
                  </div>
                  <div class="body-content-lay">
                    <h5>Total minimum:</h5>
                    <h5>0 / 26 minimum</h5>
                  </div>
                </div>
              </div>
              <div class="body-main-right">
                <h4 class="heading">Choose team to search</h4>
                <div class="body-main-right-content">
                  <h4 class="heading">Athletic Club de Bilbao - USER_ID : 7</h4>
                  <div class="body-main-right-content-items">
                    <input type="text" />
                    <div class="body-main-right-content-items-container">
                      <h4>Athletic Club de Bilbao - USER_ID : 7</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                      <h4>Liverpool Football Club - USER_ID : 6</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="body-container-two"></div>
        </div>
      </div>
    </div>
  </body>
</html>
