window.onload = () => {
    console.log('page is fully loaded');

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

            loadImagesCached(thumbnails);
        })



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

            loadImages(thumbnails);
        })
};





function loadImages(thumbnails) { // load the thumbnails for all the cards
    var card = document.querySelectorAll(".card");

    for (var i = 0; i < card.length; i++) {
        videoName = card[i].children[1].children[0].innerHTML;

        image_src = "./thumbnails/unnamed.png";

        if (thumbnails.includes(videoName+'.jpg')) { // if thumbnail already generated
            image_src = "./thumbnails/"+videoName+'.jpg';
        }

        // setting the image
        card[i].children[0].innerHTML = `<img src=${image_src} class="card-img-top" alt="No preview available"></img>`;
    }
}

function loadImagesCached(thumbnails) { // load the thumbnails for all the cards
    var card = document.querySelectorAll(".card");

    for (var i = 0; i < card.length; i++) {
        videoName = card[i].children[1].children[0].innerHTML;

        image_src = "./thumbnails/load.gif";

        if (thumbnails.includes(videoName+'.jpg')) { // if thumbnail already generated
            image_src = "./thumbnails/"+videoName+'.jpg';
        }

        // setting the image
        card[i].children[0].innerHTML = `<img src=${image_src} class="card-img-top" alt="No preview available"></img>`;
    }
}