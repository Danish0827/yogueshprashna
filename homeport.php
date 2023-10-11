<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

</head>
<style>
    :root {
        --dark: #6F4E37;
        /* --gap: 15px; */
        --width: 240px;
        --height: var(--width);
    }

    .img-box-p>a {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
        overflow: hidden;
    }

    .img-box-p>a::after {
        content: "";
        background: linear-gradient(transparent, black);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        transform: translateY(100%);
        transition-duration: .75s;
    }

    .img-box-p>a:hover::after {
        transform: translateY(50%);
    }

    .img-box-p>a>* {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition-duration: 1s;
        padding: 15px;
    }

    .img-box-p>a:hover>img {
        transform: scale(1.05);
    }

    .img-box-p {
        display: grid;
        grid-gap: var(--gap);
        grid-template-columns: repeat(auto-fit, minmax(var(--width), 1fr));
        grid-auto-rows: var(--height);
        grid-auto-flow: dense;
    }

    .horizontal {
        grid-column: span 2;
    }

    .vertical {
        grid-row: span 2;
    }

    .big {
        grid-column: span 2;
        grid-row: span 2;
    }
</style>

<body>
    <html>

    <body>
        <div class="portfolio-section-p" style="padding: 50px 0;background:#c79687;">
            <div class="col-md-12">
                <div class="hero-section-title text-center">
                    <h1 style="color: black;">Portfolio</h1>
                </div><!--end .hero-section-title-->
            </div><!--end .col-md-12-->
            <div class="img-box-p psakkk" style="padding: 0px 160px;">
                <a href="assets/images/prashnaallimages/image00007.jpeg" data-lightbox="homePortfolio" class="big">
                    <img src="assets/images/prashnaallimages/image00007.jpeg" />
                </a>

                <a href="assets/images/prashnaallimages/image00019.jpeg" data-lightbox="homePortfolio" class="">
                    <img src="assets/images/prashnaallimages/image00019.jpeg" />
                </a>

                <a href="assets/images/prashnaallimages/image00032.jpeg" data-lightbox="homePortfolio" class="">
                    <img src="assets/images/prashnaallimages/image00032.jpeg" />
                </a>

                <a href="assets/images/prashnaallimages/image00013.jpeg" data-lightbox="homePortfolio">
                    <img src="assets/images/prashnaallimages/image00013.jpeg" />
                </a>

                <a href="assets/images/prashnaallimages/image00034.jpeg" data-lightbox="homePortfolio">
                    <img src="assets/images/prashnaallimages/image00034.jpeg" />
                </a>
            </div>
            <div class="port-button" style="text-align: center;padding-top:50px">
                <a href="portfolio" class="btn-yellow">LEARN MORE</a>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
        <script src=""></script>
    </body>

    </html>
</body>

</html>