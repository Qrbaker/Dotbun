var image = document.getElementById("main_img")
var fade_elements = document.querySelector('.js-fade')
var static_link = document.getElementById('static_url')
var downloadingImage = new Image()

// Async load from CloudFront
fetch('https://auccypbji2.execute-api.us-east-2.amazonaws.com/random-img')
    .then(resp => resp.text())
    .then((url) => {
        console.log("Got URL: %s", url)
        image.src = url
        static_link.setAttribute('href', url)
            // Using a small timeout reduces image flashing
        setTimeout(() => {
            if (fade_elements.classList.contains('is-paused')) {
                fade_elements.classList.remove('is-paused')
            }
            document.querySelector(".loader").style.visibility = 'hidden'
        }, 50)
    })