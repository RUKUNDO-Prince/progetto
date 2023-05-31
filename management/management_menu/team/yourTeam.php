<?php
  // Include your database connection file
  include_once '../../../backend/config/config.php';
  
  // Perform the database query
  $sql = "SELECT name FROM teams WHERE id = 1";
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
      // Fetch the row from the result set
      $row = mysqli_fetch_assoc($result);
      $name = $row['name'];
  
      // Output the name
      // echo $name;
  } else {
      // Error occurred while executing the query
      echo "Error: " . mysqli_error($conn);
  }
  
  // Close the database connection
  // mysqli_close($conn);  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team management menu</title>
    <link rel="stylesheet" href="yourTeam.css" />
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT MANAGEMENT</h1>
        </div>
        <?php include_once '../../../header/header.php'; ?>
      </div>

      <div class="body-lay">
        <div class="menu">
          <div class="menu-top">
            <div class="menu-top-container">
              <h5>Management Menu</h5>
            </div>

            <div class="menu-top-container-two">
              <ul class="menu-items">
                <li>YOUR TEAM</li>
                <li>BUY PLAYERS</li>
                <li>SELL PLAYERS</li>
                <li>SWAP PLAYERS</li>
                <li>TOURNAMENT CALENDER</li>
                <li>TOURNAMENT RANKING</li>
                <li>TOURNAMENT RULES INFO</li>
              </ul>
            </div>
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
          <div class="body-content-top">
            <div class="body-content-top-header">
              <h4><?php echo $name; ?></h4>
              <div>
                <h4>MONEY: <span>$ 50000.00</span></h4>
              </div>

              <div>
                <h4>MEMBERSHIP PLAYERS: <span>0 / 32</span></h4>
              </div>
            </div>
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
          <div class="body-content-bottom">
            <div class="body-lay-table-header">
              <div class="selections">
                <span>Show</span>
                <select name="entries" id="entries">
                  <option value="one">10</option>
                  <option value="one">1</option>
                  <option value="two">2</option>
                  <option value="three">3</option>
                  <option value="four">4</option>
                  <option value="five">5</option>
                  <option value="five">6</option>
                  <option value="five">7</option>
                  <option value="five">8</option>
                  <option value="five">9</option>
                  <option value="five">10</option>
                </select>
                <span>entries</span>
              </div>

              <div class="search-input">
                <label for="search">Search: </label>
                <input type="text" />
              </div>
            </div>
            <div class="bottom-layout">
              <!-- If no players found in the team -->
              <div style="display: none" class="bottom-header">
                <h5>No players in your team</h5>
              </div>

              <!-- if there are players in the team display this -->
              <div class="table-lay" style="display: none">
                <table class="table">
                  <div class="table-header">
                    <thead>
                      <th>ID</th>
                      <th>ID_PLAYER</th>
                      <th>NAME_PLAYER</th>
                      <th>CATEGORIES</th>
                      <th>VALUE</th>
                      <th>AUCTION BASIS</th>
                      <th>N.AUCTION BINDING</th>
                      <th>AMOUNT LAST BINDING</th>
                      <th>YOUR OFFER STATE</th>
                      <th>TIME TO CLOSE AUCTION CYCLE</th>
                      <th>PLAYER STATISTICS</th>
                      <th></th>
                    </thead>
                  </div>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>
                        <button class="none-btn">NONE</button>
                      </td>
                      <td>10</td>
                      <td>
                        <button class="info-btn" id="info-modal">INFO</button>
                      </td>
                      <td>
                        <button class="bid-btn">BID</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>
                        <button class="exceed-btn">EXCEEDED</button>
                      </td>
                      <td>10</td>
                      <td>
                        <button class="info-btn" id="info-modal">INFO</button>
                      </td>
                      <td>
                        <button class="bid-btn">BID</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>
                        <button class="urs-btn">IT'S YOURS</button>
                      </td>
                      <td>10</td>
                      <td>
                        <button class="info-btn" id="info-modal">INFO</button>
                      </td>
                      <td>
                        <button class="bid-btn">BID</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>
                        <button class="not-urs-btn">OFFERS NOT YOURS</button>
                      </td>
                      <td>10</td>
                      <td>
                        <button class="info-btn" id="info-modal">INFO</button>
                      </td>
                      <td>
                        <button class="bid-btn">BID</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Table of available players in a team -->
              <div class="table-lay">
                <table class="table">
                  <div class="table-header">
                    <thead>
                      <th>ID</th>
                      <th>ID_PLAYER</th>
                      <th>NAME_PLAYER</th>
                      <th>CATEGORIES</th>
                      <th>VALUE</th>
                      <th>AUCTION BASIS</th>
                      <th>AUCTION PRICE</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </thead>
                  </div>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>
                        <button class="info-btn" id="info-modal">INFO</button>
                      </td>
                      <td>
                        <button class="swap-btn">SWAP YOUR PLAYER</button>
                      </td>
                      <td>
                        <button class="bid-btn">SELL YOUR PLAYER</button>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>

              <div class="table-footer">
                <h4>Showing 1 to 6 out of 6 entries</h4>
                <div class="pagination-lay">
                  <span>Previous</span>
                  <button class="btn">1</button>
                  <span>Next</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->

    <div id="modal" class="modal">
      <div class="modal-content">
        <span id="closeModalBtn" class="close">&times;</span>
        <div class="modal-body">
          <div class="profile-info">
            <div class="profile">
              <img src="../../../assets/profile pic.jpg" alt="" />
            </div>
            <div class="profile-data">
              <div class="info-container-one">
                <div class="info">
                  <h4>NAME:</h4>
                  <h4>Diego Maradona</h4>
                </div>
                <div class="info">
                  <h4>NATIONALITY:</h4>
                  <h4>Argentina</h4>
                </div>
                <div class="info">
                  <h4>CATEGORY:</h4>
                  <h4>Attacking Midfielder (AM)</h4>
                </div>
                <div class="info">
                  <h4>MARKET VALUE:</h4>
                  <h4>25000</h4>
                </div>
                <div class="info">
                  <h4>AUCTION BASIS:</h4>
                  <h4>12334</h4>
                </div>
                <div class="info">
                  <h4>HIGHEST BID:</h4>
                  <h4>12990</h4>
                </div>
              </div>

              <div class="info-container-two">
                <div class="container-header">
                  <h4>ROLES</h4>
                </div>

                <div class="container-body">
                  <div class="container-body-item">
                    <h4>GK: <span>NO</span></h4>
                    <h4>SW: <span>NO</span></h4>
                    <h4>CB: <span>NO</span></h4>
                  </div>
                  <div class="container-body-item">
                    <h4>SB: <span>NO</span></h4>
                    <h4>DM: <span>NO</span></h4>
                    <h4>WB: <span>NO</span></h4>
                  </div>
                  <div class="container-body-item">
                    <h4>CM: <span>NO</span></h4>
                    <h4>SM: <span>NO</span></h4>
                    <h4>AM: <span>YES</span></h4>
                  </div>
                  <div class="container-body-item">
                    <h4>WT: <span>NO</span></h4>
                    <h4>SS: <span>YES</span></h4>
                    <h4>CF: <span>NO</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="details-container">
            <div class="details-header">
              <h2>PLAYER STATS</h2>
            </div>
            <div class="details">
              <div class="details-right">
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
                <h4 class="details-heading">HEIGHT: <span>164</span></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="bid-modal" class="modal">
      <div class="modal-content">
        <span id="closeModalBtn" class="close">&times;</span>
        <div class="modal-body">
          <div class="profile-info">
            <div class="profile">
              <img src="../../../assets/profile pic.jpg" alt="" />
            </div>
            <div class="profile-data">
              <div class="info-container-one">
                <div class="info">
                  <h4>NAME:</h4>
                  <h4>Diego Maradona</h4>
                </div>
                <div class="info">
                  <h4>NATIONALITY:</h4>
                  <h4>Argentina</h4>
                </div>
                <div class="info">
                  <h4>CATEGORY:</h4>
                  <h4>Attacking Midfielder (AM)</h4>
                </div>
                <div class="info">
                  <h4>MARKET VALUE:</h4>
                  <h4>25000</h4>
                </div>
                <div class="info">
                  <h4>AUCTION BASIS:</h4>
                  <h4>12334</h4>
                </div>
                <div class="info">
                  <h4>HIGHEST BID:</h4>
                  <h4>12990</h4>
                </div>
              </div>

              <div class="info-container-two">
                <div class="container-header">
                  <h4>ROLES</h4>
                </div>

                <div class="container-body">
                  <div class="container-body-item">
                    <h4>GK: <span>NO</span></h4>
                    <h4>SW: <span>NO</span></h4>
                    <h4>CB: <span>NO</span></h4>
                  </div>
                  <div class="container-body-item">
                    <h4>SB: <span>NO</span></h4>
                    <h4>DM: <span>NO</span></h4>
                    <h4>WB: <span>NO</span></h4>
                  </div>
                  <div class="container-body-item">
                    <h4>CM: <span>NO</span></h4>
                    <h4>SM: <span>NO</span></h4>
                    <h4>AM: <span>YES</span></h4>
                  </div>
                  <div class="container-body-item">
                    <h4>WT: <span>NO</span></h4>
                    <h4>SS: <span>YES</span></h4>
                    <h4>CF: <span>NO</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="details-bid-container">
            <div class="details-bid-sub-container">
              <div class="details-container-header">
                <span>May 17, 2023 04:35 PM</span>
              </div>
              <div class="details-bid-container-amount">
                <h4>Bid Amount</h4>
                <input type="text" />
              </div>
              <div class="details-bid-container-btn">
                <button class="submit-btn">Submit</button>
                <button class="cancel-btn">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      const modal = document.getElementById("modal");
      const closeModalBtn = document.getElementsByClassName("close")[0];
      const infoButtons = document.getElementsByClassName("info-btn");

      for (let i = 0; i < infoButtons.length; i++) {
        infoButtons[i].addEventListener("click", function () {
          modal.style.display = "block";
        });
      }

      closeModalBtn.addEventListener("click", function () {
        modal.style.display = "none";
      });

      window.addEventListener("click", function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      });

      const modaltwo = document.getElementById("bid-modal");
      const closeModalBtnTwo = document.getElementsByClassName("close")[0];
      const bidBtns = document.getElementsByClassName("bid-btn");

      for (let i = 0; i < bidBtns.length; i++) {
        bidBtns[i].addEventListener("click", function () {
          modaltwo.style.display = "block";
        });
      }

      closeModalBtnTwo.addEventListener("click", function () {
        modaltwo.style.display = "none";
      });

      window.addEventListener("click", function (event) {
        if (event.target == modaltwo) {
          modaltwo.style.display = "none";
        }
      });
    </script>
  </body>
</html>
