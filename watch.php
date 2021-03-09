<?php
    include 'stream.php';

if (str_ends_with(".mkv",$_GET['path'])) {
    
    echo   '<video>
                <source src="'.$_GET['path'].'" type="video/mkv">
            </video>';
} else {
    $stream = new VideoStream($_GET['path']);
    $stream->start();
}

?>