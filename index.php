<?php
include 'stream.php';
include 'search.php'; // contains series names and path to folders inside dirList
include 'htmlGenerators.php';
include 'db_connection.php';
include 'ffmpeg.php';

// $filePath = 'C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf\Parks.And.Recreation.S02E22.Telethon.WEB-DL.x264-LeRalouf.mp4';
// $stream = new VideoStream($filePath);
// $stream->start();




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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->



    <link rel="icon" href="iconfinder_play_alt_118620.ico"/>
    <title>Stream</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
            <a class="navbar-brand" href="#">Stream</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse d-sm-none" id="navbarText">
                <ul id="link_list" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add</a>
                    </li>
            </div>
        </div>
    </nav>

    <?php
    // placeholder image for now
    $img = "https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg";


    $conn = OpenCon();

                $sql = "SELECT * FROM stream
                        ORDER BY pk DESC";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $title = $row['title'];
                        $folder_path = $row['path'];
                        
                        $video_files = array_values(array_filter(scandir($folder_path), "validFormat")); // return all mp4 and mkv files in $folder_path
                        
                        
                        echo
        '<div class="container folder">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2>' . $title . '</h2>
                </div>
            </div>
            
            <div class="row">';
        foreach ($video_files as $key => $video_name) { // video_name contains format like: example.mp4
            genImage($folder_path);
            videoColGenerate($folder_path, $video_name, './thumbnails/'.getfilename($video_name).'.jpg');
        }

        echo "</div>";
        echo "</div>";
                      
                    }
                  } else {
                    echo "No urls in the database";
                  }
                
                
    CloseCon($conn);


    // foreach ($dirList as $title => $folder_path) {
    //     $video_files = array_values(array_filter(scandir($folder_path), "validFormat")); // return all mp4 and mkv files in $folder_path
    //     echo
    //     '<div class="container folder">
    //         <div class="row">
    //             <div class="col d-flex justify-content-center">
    //                 <h2>' . $title . '</h2>
    //             </div>
    //         </div>
            
    //         <div class="row">';
    //     foreach ($video_files as $key => $video_name) { // video_name contains format like: example.mp4
    //         videoColGenerate($folder_path, $video_name, $img);
    //     }

    //     echo "</div>";
    //     echo "</div>";

    // }
    ?>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



</body>

</html>