<?php
include "db_connection.php";

$watched = array();

$conn = OpenCon();

$sql = "SELECT * FROM watched";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($watched, $row['video']);
    }
  } else {
    echo "No watched in the database";
  }


CloseCon($conn);

echo json_encode($watched);
?>