<?php
include_once('../backend/config/config.php');

$sql = "SELECT * FROM tournaments";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// $conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subscribe']) && isset($_POST['row_id'])) {
    $rowId = $_POST['row_id'];

    // Find the selected row by ID
    $selectedRow = null;
    foreach ($data as $row) {
        if ($row['id'] == $rowId) {
            $selectedRow = $row;
            break;
        }
    }

    // Save the data to another table in the database
    if ($selectedRow) {
        $insertQuery = "INSERT INTO my_tournaments (teams, title, n_teams, comp_startdate, comp_enddate, transfer_type, transfer_startdate, transfer_enddate) 
                        VALUES (
                          '".$selectedRow['teams']."',
                          '".$selectedRow['title']."',
                          '".$selectedRow['n_teams']."',
                          
                          '".$selectedRow['comp_startdate']."',
                          '".$selectedRow['comp_enddate']."',
                          '".$selectedRow['transfer_type']."',
                          '".$selectedRow['transfer_startdate']."',
                          '".$selectedRow['transfer_enddate']."'
                        )";

        if ($conn->query($insertQuery) === TRUE) {
            // echo "Data saved successfully.";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tournament List</title>
  <link rel="stylesheet" href="tournament_list.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Teams</th>
                  <th>Title</th>
                  <th>N.Teams</th>
                  <th>Participants</th>
                  <th>Free Teams</th>
                  <th>Competition start date</th>
                  <th>Competition End Date</th>
                  <th>Transfer Type</th>
                  <th>Start Date Transfer</th>
                  <th>End Date Transfer</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $row): ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['teams']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['n_teams']; ?></td>
                    <td><?php echo $row['participants']; ?></td>
                    <td><?php echo $row['free_teams']; ?></td>
                    <td><?php echo $row['comp_startdate']; ?></td>
                    <td><?php echo $row['comp_enddate']; ?></td>
                    <td><?php echo $row['transfer_type']; ?></td>
                    <td><?php echo $row['transfer_startdate']; ?></td>
                    <td><?php echo $row['transfer_enddate']; ?></td>
                    <td>
                      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="row_id" value="<?php echo $row['id']; ?>">
                        <button style="margin-right: 4px;" class='info-btn' name='info'><a style='text-decoration: none; color: white;' href='../backend/subscribe/subscribe.php'>INFO</a></button>
                        <button type="submit" class="sub-btn" name="subscribe">SUBSCRIBE</button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
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
