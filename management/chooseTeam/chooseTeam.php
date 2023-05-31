<?php
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
    <title>Choose Team Page</title>
    <link rel="stylesheet" href="chooseTeam.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <style>
    .choose-lay-list li a{
      color: black;
    }
  </style>
  <body>
    <div class="body">
      <div class="header">
        <div class="user_dash">
          <h1>TOURNMENT MANAGEMENT</h1>
        </div>
        <?php include_once '../../header/header.php'; ?>
      </div>
      <div class="choose-lay">
        <div>
          <h2>Choose your Team</h2>
        </div>
        <div class="choose-lay-form">
          <div class="choose-lay-header">
            <h4><?php echo !empty($selected) ? $selected : 'Please select team'; ?></h4>
          </div>
          <div class="choose-lay-input">
            <input type="text" id="filterInput" />
          </div>
          <div class="choose-lay-list">
          <?php
            include_once '../../backend/config/config.php';

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
                <a href="#"><?php echo $value; ?></a>
              </li>
            <?php } ?>
          </ul>


            
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
          </div>
        </div>
        <div class="choose-lay-btn">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display: flex; gap: 10%;">
            <button class="save-btn" type="submit" value="" name="save"><a style="text-decoration: none; color: white" href="../management_menu/team/yourTeam.php">Save</a></button>
            <input class="reset-btn" type="reset" value="Cancel" name="cancel" />
          </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        $('li').click(function() {
          $('li').removeClass('selected');
          $(this).addClass('selected');
          var selectedTeam = $(this).text();
          $('#selected-team').val(selectedTeam);
        });
      });
    </script>
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
