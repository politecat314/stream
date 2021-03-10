<?php
require 'vendor/autoload.php';
include 'search.php';
use Psr\Log\LoggerInterface;


// $ffmpeg = FFMpeg\FFMpeg::create();



// $video = $ffmpeg->open("C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf\Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4");


// $image = "./thumbnails/thumb.jpg";
// $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(42));
// $frame->save($image);



function getFilename($file_name_with_extension) { // removes the extension
    $file_name_without_extension = str_replace(".mp4", "",$file_name_with_extension);
    $file_name_without_extension = str_replace(".jpg", "",$file_name_with_extension);
    return $file_name_without_extension;
}

function genThumbnail($video_path, $video_name) { // full video path must be given here. Video name is without extension.
    $ffmpeg = FFMpeg\FFMpeg::create();
    $video = $ffmpeg->open($video_path);

    $image = "./thumbnails/$video_name.jpg";

    // echo $video_path;
    // echo "<br>";
    // echo $image;
    // echo "<br>";
    echo "$video_name GENERATED <br>";

    $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(42));
    $frame->save($image);
}

// $dirContents = scandir('./thumbnails');
// print_r($dirContents);

// echo (in_array('Screenshot (21).png',$dirContents));


function genImage($directory_path) {
    $dirContents = scandir($directory_path);
    $dirContents = array_values(array_filter($dirContents, "validFormat"));
    $thumbnails = scandir('./thumbnails');
    // print_r($thumbnails);
    // echo "<br><br>";
    foreach($dirContents as $video_file) {
        if (!in_array(getFilename($video_file).'.jpg', $thumbnails)) { // if not already cached
            // echo getFilename($video_file).'jpg <br>';
            
            genThumbnail("$directory_path\\$video_file", $video_file); // uncomment later
        } else {
            echo "$video_file CACHED <br>";
        }
    }
}

genImage("C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf");

// genThumbnail('C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf\Parks.And.Recreation.S02E22.Telethon.WEB-DL.x264-LeRalouf.mp4','Parks.And.Recreation.S02E22.Telethon.WEB-DL.x264-LeRalouf');



// $ffmpeg = FFMpeg\FFMpeg::create();



// $video = $ffmpeg->open("C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf\Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4");


// $image = "./thumbnails/Parks.And.Recreation.S02E22.Telethon.WEB-DL.x264-LeRalouf.jpg";
// $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(42));
// $frame->save($image);