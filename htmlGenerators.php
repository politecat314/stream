<?php

function videoColGenerate($path_to_folder, $video_name) {
    
    // video name must contain extension like: example.mp4
    echo '<div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">';
    echo    '<div class="card" style="width: 18rem;">'; 
    if (str_ends_with($video_name, ".mkv")) {
        echo    '    <a class="videoLink" href="'.$path_to_folder.'\\'.$video_name.'">';    
    } else {
        echo    '    <a target="_blank" class="videoLink" href="watch.php?path='.$path_to_folder.'\\'.$video_name.'">';
    }
    echo    '        <img src="" class="card-img-top" alt="No preview available">';
    echo    '    </a>';
    echo    '    <div class="card-body">';
    echo    '        <p class="card-text">'.$video_name.'</p>';
    echo    '    </div>';
    echo    '</div>';
    echo '</div>';
}


function generateContainerFolder($title, $video_files, $folder_path) {
    echo '<div class="container folder">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2>' . $title . '</h2>
                </div>
            </div>
        
            <div class="row">';
                foreach ($video_files as $key => $video_name) { // video_name contains format like: example.mp4  
                    videoColGenerate($folder_path, $video_name);
                }

    echo '  </div>
        </div>';
}


?>