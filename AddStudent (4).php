<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student70-353031333cdd", "ua92-studentAc", "student70-353031333cdd");

if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['Submit'])) {

    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $ContactNo = $_POST['ContactNo'];
    $ClassId = $_POST['ClassId'];
   

    $sql = "INSERT INTO Pupils (Name,Address,ContactNo,ClassId) VALUES ('$Name','$Address','$ContactNo','$ClassId')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>