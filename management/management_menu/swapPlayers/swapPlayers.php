<?php
include_once '../../../backend/config/config.php';
if (isset($_POST['myInput'])) {
  $selected = $_POST['myInput'];
}
?>
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

                <?php
                  // Assuming you have established a MySQLi connection to your database

                  // Retrieve the selected data
                  if (!empty($selected)) {
                    $query = "SELECT * FROM roster_da_peterc10 WHERE COL25 = '$selected'";
                    $result = mysqli_query($conn, $query);
                    $query = "SELECT * FROM roster_da_peterc10 WHERE COL25 = '$selected'";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        // Fetch the row as an associative array
                        $row = mysqli_fetch_assoc($result);
                        
                        if ($row) {
                            // Get the ID from the retrieved row
                            $selectedId = $row['COL1'];
                        
                            // Use the ID as needed
                            // echo "The ID of the selected data is: " . $id;
                        } else {
                            // echo "No data found";
                        }
                    } else {
                        echo "Query failed";
                    }
                  }else{
                    echo '';
                  }

                  // Remember to close the database connection when you're done
                  // mysqli_close($conn);
                ?>



                  <h4 class="heading"><?php echo !empty($selected) ? $selected : 'Please select team'; ?> - <?php echo !empty($selectedId) ? $selectedId : '';?></h4>
                  <div class="body-main-right-content-items">
                    <input type="text" id="filterInput" />
                    <div class="body-main-right-content-items-container">
                      <?php
                        include_once '../../../backend/config/config.php';

                        $query = "SELECT COL25 FROM roster_da_peterc10";
                        $result = mysqli_query($conn, $query);

                        $data = array();

                        if ($result && mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $data[] = $row['COL25'];
                          }
                        } else {
                          echo "No data found.";
                        }

                        // mysqli_close($conn);
                      ?>
                      <ul id="names">
                        <?php foreach ($data as $value) { ?>
                          <li class="collection-item" name="name" onclick="sendValue('<?php echo $value; ?>')">
                            <a href="#" style="color: black; text-decoration: none;"><?php echo $value; ?></a>
                          </li>
                        <?php } ?>


                        <?php
                          include_once '../../backend/config/config.php';
                          
                          if (isset($_POST['save'])) {

                            $query = "SELECT COL25 FROM roster_da_peterc10";
                            $query_result = mysqli_query($conn, $query);
                            if ($query_result && mysqli_num_rows($query_result) > 0) {
                              while ($row = mysqli_fetch_assoc($query_result)) {
                                $data[] = $row['COL25'];
                              }
                            } else {
                              echo "No data found.";
                            }
                            foreach($data as $value){
                              $names = $value;
                            }
                            $sql = "INSERT INTO teams (name) VALUES ('$names')";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                // echo "Data inserted successfully.";
                              } else {
                                echo "Error inserting data: " . mysqli_error($conn);
                            }
                            // mysqli_close($conn);

                            // header('location: ../management_menu/team/youtTeam.php');
                          }
                        ?>


                        <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                          <input type="hidden" id="myInput" name="myInput">
                        </form>
                      </ul>
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
    <script>
        const filterInput = document.querySelector('#filterInput');
        filterInput.addEventListener('keyup', filterNames);

        function filterNames(){
            const filterValue = document.querySelector('#filterInput').value.toUpperCase();
            const ul = document.querySelector('#names');
            const li = ul.querySelectorAll('li.collection-item');
            for( let i = 0; i < li.length; i++ ){
                const a = li[i].getElementsByTagName('a')[0];
                if(a.innerHTML.toUpperCase().indexOf(filterValue) > -1){
                    li[i].style.display = '';
                }else{
                    li[i].style.display = 'none';
                }
            }
        }
    </script>
    <script>
      function sendValue(value) {
        document.getElementById('myInput').value = value;
        document.getElementById('myForm').submit();
      }
    </script>
  </body>
</html>
