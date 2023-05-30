<?php
if (isset($_POST['submit'])) {
    include_once '../config/config.php';

    $teams = $_POST['teams'];
    $title = $_POST['title'];
    $n_teams = $_POST['n_teams'];
    // $status = $_POST['status'];
    $comp_startdate = $_POST['comp_startdate'];
    $comp_enddate = $_POST['comp_enddate'];
    $transfer_type = $_POST['transfer_type'];
    $transfer_startdate = $_POST['transfer_startdate'];
    $transfer_enddate = $_POST['transfer_enddate'];

    // Prepare the SQL statement to insert the data into the database table
    $sql = "INSERT INTO my_tournaments (teams, title, n_teams, comp_startdate, comp_enddate, transfer_type, transfer_startdate, transfer_enddate) VALUES ('$teams', '$title', '$n_teams', '$comp_startdate', '$comp_enddate', '$transfer_type', '$transfer_startdate', '$transfer_enddate')";

    // Execute the SQL query
    if ($conn->query($sql) === true) {
        echo "Data stored successfully.";
        header('location: ../../tournament_list/tournament_list.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection to the database
    $conn->close();
} else {
    echo "No data submitted.";
}
?>
