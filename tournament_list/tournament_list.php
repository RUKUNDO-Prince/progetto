<?php
 include_once('../backend/config/config.php');
  $sql = "SELECT * FROM tournaments";
  $result = $conn->query($sql);

  // Store the retrieved data in an array
  $data = [];
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $data[] = $row;
      }
  }

  // Close the connection to the source database
  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tournament List</title>
    <link rel="stylesheet" href="tournament_list.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT SECTION</h1>
        </div>
        <?php include_once '../header/header.php'; ?>
      </div>

      <div class="body-lay">
        <div class="body-lay-content">
          <div class="body-lay-header">
            <h4>TOURNAMENT LIST</h4>
          </div>
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
              
            <form method="post" action="../backend/subscribe/subscribe.php">
              <table class="table">
                <thead>
                  <td>ID</td>
                  <td>Teams</td>
                  <td>Title</td>
                  <td>N.Teams</td>
                  <td>Participants</td>
                  <td>Free Teams</td>
                  <td>Competition start date</td>
                  <td>Competition End Date</td>
                  <td>Transfer Type</td>
                  <td>Start Date Transfer</td>
                  <td>End Date Transfer</td>
                  <td></td>
                </thead>

                
                  <?php foreach ($data as $row): ?> 
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td name='teams'><?php echo $row['teams']; ?></td>
                      <td name='title'><?php echo $row['title']; ?></td>
                      <td name='n_teams'><?php echo $row['n_teams']; ?></td>
                      <td name='participants'><?php echo $row['participants']; ?></td>
                      <td name='free_teams'><?php echo $row['free_teams']; ?></td>
                      <td name='comp_startdate'><?php echo $row['comp_startdate']; ?></td>
                      <td name='comp_enddate'><?php echo $row['comp_enddate']; ?></td>
                      <td name='transfer_type'><?php echo $row['transfer_type']; ?></td>
                      <td name='transfer_startdate'><?php echo $row['transfer_startdate']; ?></td>
                      <td name='transfer_enddate'><?php echo $row['transfer_enddate']; ?></td>
                      <td style="display: flex; flex-wrap: nowrap;">
                        <button style="margin-right: 4px;" class='info-btn' name='info'><a style='text-decoration: none; color: white;' href='../backend/subscribe/subscribe.php'>INFO</a></button>
                        <button class='sub-btn' type="submit" name='subscribe'><a style='text-decoration: none; color: white;' href='../backend/subscribe/subscribe.php'>SUBSCRIBE</a></button>
                        
                      </td>
                    </tr>
                    <?php endforeach; ?>
						    
              </table>
            </form>
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
