<?php
require 'vendor/autoload.php';
use Psr\Log\LoggerInterface;


// $ffmpeg = FFMpeg\FFMpeg::create();



// $video = $ffmpeg->open("C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf\Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4");


// $image = "./thumbnails/thumb.jpg";
// $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(42));
// $frame->save($image);


function genThumbnail($video_path) {
    $ffmpeg = FFMpeg\FFMpeg::create();
    $video = $ffmpeg->open($video_path);

    $path = str_replace(".mp4", "",$video_path);
    $image = "./thumbnails/$path.jpg";
    $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(42));
    $frame->save($image);
}
