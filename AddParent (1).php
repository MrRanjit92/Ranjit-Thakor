<?php

$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student70-353031333cdd", "ua92-studentAc", "student70-353031333cdd");

if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['Submit'])) {

    $Fullname = $_POST['Fullname'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $PupilID = $_POST['PupilID'];

    $sql = "INSERT INTO Parent (Fullname, Address, Contact, PupilId) VALUES ('$Fullname','$Address','$Contact','$PupilID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>