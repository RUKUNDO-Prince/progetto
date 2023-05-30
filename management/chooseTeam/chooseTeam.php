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
            <h4>Bayern Leverkusen</h4>
          </div>
          <div class="choose-lay-input">
            <input type="text" />
          </div>
          <div class="choose-lay-list">
            <ul>
              <li id="chelsea" name='chelsea'>Chelsea</li>
              <li id="united" name='united'>Manchester United</li>
              <li id="city" name='city'>Manchester City</li>
              <li id="tottenham" name='tottenham'>Tottenham Hotspurs</li>
              <li id="liverpool" name='liverpool'>Liverpool</li>
              <li id="everton" name='everton'>Everton</li>
              <li id="arsenal" name='arsenal'>Arsenal</li>
              <li id="barcelona" name='barcelona'>Barcelona</li>
            </ul>
          </div>
        </div>
        <div class="choose-lay-btn">
            <input class="save-btn" type="submit" value="Save" name="save" />
            <input class="reset-btn" type="reset" value="Cancel" name="cancel" />
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
  </body>
</html>
