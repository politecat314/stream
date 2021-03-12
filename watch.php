<?php
    include 'stream.php';
    include 'db_connection.php';

if (isset($_GET['path'])) {
    // getting only the video name. Removing full path
    $video = explode("\\",$_GET['path']);
    $video = array_pop($video);

    $conn = OpenCon();

    $video = mysqli_real_escape_string($conn,$video);

    $sql = "INSERT IGNORE INTO watched (video)
            VALUES ('$video')";

    if (!$conn->query($sql) === TRUE) { // echo error message if failed to save in database
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
} else {
    echo "not inserted into database";
}


// if (str_ends_with(".mkv",$_GET['path'])) {
//     echo   '<video>
//                 <source src="'.$_GET['path'].'" type="video/mkv">
//             </video>';
// } else {
//     $stream = new VideoStream($_GET['path']);
//     $stream->start();
// }

?>