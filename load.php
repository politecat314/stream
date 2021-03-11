<?php
include 'db_connection.php';
include 'ffmpeg.php';


$conn = OpenCon();

$sql = "SELECT * FROM stream
        ORDER BY pk DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title = $row['title'];
        $folder_path = $row['path'];
        
        genImage($folder_path);

    }
} else {
    echo "No urls in the database";
}


CloseCon($conn);

// print_r(array_values($directories));

echo json_encode(scandir('./thumbnails'));