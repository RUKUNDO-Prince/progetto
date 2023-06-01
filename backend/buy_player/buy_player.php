<?php
  include_once '../../../backend/config/config.php';

  $sql = "SELECT name FROM teams WHERE id = 1";
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
      $row = mysqli_fetch_assoc($result);
      $name = $row['name'];
  
  } else {
      echo "Error: " . mysqli_error($conn);
  }
?>

<?php
    $query = "SELECT * FROM roster_da_peterc10";
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


            <div id="no-player" class="table-lay" style="display: none;">
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
                    <?php
                    // Iterate over the fetched records and populate the table
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $row['COL1'] . "</td>";
                      echo "<td>" . $row['COL2'] . "</td>";
                      echo "<td>" . $row['COL4'] . "</td>";
                      echo "<td>" . $row['COL82'] . "</td>";
                      echo "<td>" . $row['COL6'] . "</td>";
                      echo "<td>" . $row['COL83'] . "</td>";
                      echo "<td>" . $row['COL9'] . "</td>";

                      // Assuming your offer state is stored as a numeric value (e.g., 1 for 'NONE', 2 for 'EXCEEDED', etc.)
                      $offerState = "";
                      switch ($row['COL83']) {
                        case 1:
                          $offerState = "NONE";
                          break;
                        case 2:
                          $offerState = "EXCEEDED";
                          break;
                        case 3:
                          $offerState = "IT'S YOURS";
                          break;
                        case 4:
                          $offerState = "OFFERS NOT YOURS";
                          break;
                        default:
                          $offerState = "";
                          break;
                      }
                      echo "<td><button class='offer-btn'>" . $offerState . "</button></td>";
                      
                      echo "<td>" . $row['COL83'] . "</td>";
                      echo "<td><button class='info-btn' id='info-modal'>INFO</button></td>";
                      echo "<td><button class='bid-btn'>BID</button></td>";
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
            </div>
            </body>
</html>