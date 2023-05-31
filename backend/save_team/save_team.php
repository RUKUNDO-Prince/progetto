<?php
include_once '../config/config.php';

if (isset($_POST['save'])) {
    $names = $row['COL25'];
    $query = "INSERT INTO teams (names) VALUES ('$names')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>
