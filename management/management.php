<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tournament Management</title>
    <link rel="stylesheet" href="management.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT MANAGEMENT</h1>
        </div>
        <?php include_once '../header/header.php'; ?>
      </div>

      <div class="body-lay">
        <div class="body-lay-content">
          <div class="body-lay-table">
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
            <div class="table-lay">
              <table class="table">
                <thead>
                  <td>ID</td>
                  <td>Teams</td>
                  <td>Title</td>
                  <td>N.Teams</td>
                  <td>Status</td>
                  <td>Competition start date</td>
                  <td>Competition End Date</td>
                  <td>Transfer Type</td>
                  <td>Resale and Exchange</td>
                  <td>Start Date Transfer</td>
                  <td>End Date Transfer</td>
                  <td></td>
                </thead>

                <?php
                  include_once('../backend/config/config.php');
                  $sql = "SELECT * FROM my_tournaments";

                  $query = $conn->query($sql);
                  while($row = $query->fetch_assoc()){
                    echo 
                    "<tr>
                      <td>".$row['id']."</td>
                      <td>".$row['teams']."</td>
                      <td>".$row['title']."</td>
                      <td>".$row['n_teams']."</td>
                      <td>".$row['status']."</td>
                      <td>".$row['comp_startdate']."</td>
                      <td>".$row['comp_enddate']."</td>
                      <td>".$row['transfer_type']."</td>
                      <td>".$row['resale_exchange']."</td>
                      <td>".$row['transfer_startdate']."</td>
                      <td>".$row['transfer_enddate']."</td>
                      <td>
                        <button class='info-btn'>INFO</button>
                        <button class='sub-btn'>MANAGE</button>
                        
                      </td>
                    </tr>";
                  }
						    ?>
              </table>
            </div>
            <div class="table-footer">
              <h4>Showing 1 to 2 out of 2 entries</h4>
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
  </body>
</html>
