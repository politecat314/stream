window.onload = () => {

    console.log('page is fully loaded');

    updateWatched();
    

    let cache = setInterval(()=>{
        fetch('thumbnails.php', { // loading the cached ones
            method: 'get',
            // may be some code of fetching comes here
        }).then(function (response) {
            if (response.status >= 200 && response.status < 300) {
                return response.text()
            }
            throw new Error(response.statusText)
        })
            .then(function (response) {
    
                thumbnails = JSON.parse(response);
    
                loadImages(thumbnails, "load.gif");
            })
    },100);

    

        

    fetch('load.php', {
        method: 'get',
        // may be some code of fetching comes here
    }).then(function (response) {
        if (response.status >= 200 && response.status < 300) {
            return response.text()
        }
        throw new Error(response.statusText)
    })
        .then(function (response) {

            thumbnails = JSON.parse(response);

            loadImages(thumbnails, "unnamed.png");

            clearInterval(cache);
        })
};

function loadImages(thumbnails, default_image) { // load the thumbnails for all the cards
    var card = document.querySelectorAll(".card");

    for (var i = 0; i < card.length; i++) {
        videoName = card[i].children[1].children[0].innerHTML;
        
        image_src = "./thumbnails/"+default_image;
        
        if (thumbnails.includes(videoName+'.jpg')) { // if thumbnail already generated
            image_src = "./thumbnails/"+videoName+'.jpg';
        }
        
        // setting the image
        card[i].children[0].innerHTML = `<img src="`+image_src+`" class="card-img-top" alt="No preview available"></img>`;
        
    }
}


function updateWatched() {
    console.log('watched function loaded');
    fetch('watched.php', { // loading the cached ones
        method: 'get',
        // may be some code of fetching comes here
    }).then(function (response) {
        if (response.status >= 200 && response.status < 300) {
            return response.text()
        }
        throw new Error(response.statusText)
    })
        .then(function (response) {

            watched = JSON.parse(response);

            var videoLink = document.querySelectorAll(".videoLink");

            for (var i = 0; i < videoLink.length; i++) {
                video = videoLink[i];
                video_name = video.parentNode.children[1].children[0].innerHTML;

                if (watched.includes(video_name)) {
                    video.parentNode.style.backgroundColor = "#454444";
                }

            }
        })

}