<?php
// searches inside the folders given

$dirList = array(
                'Parks and Recreation S02'=>'C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf',
                'Seinfeld S01'=>'C:\Users\user\Downloads\Crazy4TV.com - Seinfeld.Season.1.S01.720p.WEBRip.x265.HEVC.Crazy4ad',
                'Attack On Titan S01'=>'C:\Users\user\Downloads\Attack on Titan (2013) Season 1 S01 (1080p BluRay x265 HEVC 10bit AAC 5.1 ImE) REPACK',
            );


function validFormat($filename) { // returns true if video format is valid
    return (str_ends_with($filename,".mp4") or str_ends_with($filename,".mkv"));
}




function printNicely($array)
{
    foreach ($array as $key => $file) {
        // echo $key . "=>" . $file . "</br>";

        if (str_ends_with($file,".mp4") or str_ends_with($file,".mkv")) {
            echo "$file <br>";
        }
    }

    
}


// foreach($dirList as $dir) {
//     printNicely(scandir($dir));
//     echo "<br>";
// }








?>