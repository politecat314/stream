<?php
include 'stream.php';

// $filePath = 'C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf\Parks.And.Recreation.S02E22.Telethon.WEB-DL.x264-LeRalouf.mp4';
// $stream = new VideoStream($filePath);
// $stream->start();

function printNicely($array)
{
    foreach ($array as $key => $value) {
        // echo $key . "=>" . $value . "</br>";
    }
}





$dir = 'C:\Users\user\Downloads\Parks.And.Recreation.S02.COMPLETE.WEB-DL.x264-LeRalouf';



printNicely(scandir($dir));



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

    

    <!-- <link rel="icon" type="image/svg" href="/components/logo.svg"/> -->
    <title>Stream</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Stream</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <!-- <div class="collapse navbar-collapse" id="navbarText">
                <ul id="link_list" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div> -->
        </div>
    </nav>

    <div class="container folder">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>Parks and Recreation S02</h2>
            </div>
        
        </div>
        
        <div class="row">
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container folder">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>Seinfeld</h2>
            </div>
        
        </div>
        
        <div class="row">
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-sm-12 d-flex justify-content-center videoCol">
                <div class="card" style="width: 18rem;">
                    <a href="watch.php?path=path_to_video">
                        <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" class="card-img-top" alt="No preview available">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Parks.And.Recreation.S02E16.Galentines.Day.WEB-DL.x264-LeRalouf.mp4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



</body>

</html>