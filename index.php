<?php
include 'stream.php';
include 'htmlGenerators.php';
include 'db_connection.php';
include 'ffmpeg.php';

?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">



    <link rel="icon" href="iconfinder_play_alt_118620.ico" />
    <title>Stream</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Stream</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse d-sm-none" id="navbarText">
                <ul id="link_list" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php"><i class="fas fa-database"></i> Add</a>
                    </li>
            </div>
        </div>
    </nav>

    <?php

    // start of load folders in the database
    $conn = OpenCon();

    $sql = "SELECT * FROM stream
                        ORDER BY pk DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $title = $row['title'];
            $folder_path = $row['path'];

            $video_files = array_values(array_filter(scandir($folder_path), "validFormat")); // return all mp4 and mkv files in $folder_path

            generateContainerFolder($title, $video_files, $folder_path);
        }
    } else {
        echo "No urls in the database";
    }

    CloseCon($conn);
    // end of load folders in the database

    // getting things inside downloads folder
    $downloads_folder = scandir('./Downloads');

    for ($i=2; $i<count($downloads_folder); $i++){
        $folder_path = './Downloads/'.$downloads_folder[$i];
        $video_files = array_values(array_filter(scandir($folder_path), "validFormat")); // return all mp4 and mkv files in $folder_path

        generateContainerFolder($downloads_folder[$i]. ' <i class="fas fa-download"></i>', $video_files, $folder_path);
    }

    ?>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>



</html>