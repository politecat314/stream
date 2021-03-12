<?php

function videoColGenerate($path_to_folder, $video_name) {
    
    // video name must contain extension like: example.mp4
    echo '<div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">';
    echo    '<div class="card" style="width: 18rem;">'; 
    echo    '    <a class="videoLink" href="watch.php?path='.$path_to_folder.'\\'.$video_name.'">';
    echo    '        <img src="" class="card-img-top" alt="No preview available">';
    echo    '    </a>';
    echo    '    <div class="card-body">';
    echo    '        <p class="card-text">'.$video_name.'</p>';
    echo    '    </div>';
    echo    '</div>';
    echo '</div>';
}


?>