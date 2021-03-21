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
$downloads = scandir('./Downloads');
for ($i=2; $i<count($downloads); $i++) {
    // echo $downloads[$i] ."<br>";
    genImage("./Downloads/".$downloads[$i]);
}

echo json_encode(scandir('./thumbnails'));