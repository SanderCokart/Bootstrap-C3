<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <script src="/js/jquery-3.3.1.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist\css\bootstrap-grid.min.css">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist\css\bootstrap-reboot.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <style media="screen">
        .carousel-item>img {
            height: 400px;
            object-fit: cover;
        }
    </style>

    <title>Test</title>
</head>

<body>

<!-- NAVIGATION START -->
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html-preload/nav.html";
        include_once($path);
    ?>
<!-- NAVIGATION END -->

<!-- CAROUSEL START -->
    <div class="container">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class=" w-100"
                        src="/images/car.jpg"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class=" w-100"
                        src="/images/flower.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class=" w-100"
                        src="/images/canal.jpg"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
<!-- CAROUSEL END -->

        <br>

<!-- ABOUT ME START -->
        <img style="width:100px;" class="mx-auto d-block" src="/images
        /profilecircle.png" alt="" class="img-fluid">
        <h1 class="text-center">ABOUT ME</h1>

        <br>

        <div class="card">

            <div class="card-body">
                <p>My name is Sander Cokart and I'm the guy with too many hobbies, there is a lot in my life that I want to achieve and learn, I'm ambitious and hard working. With my ability to have great interest in many subjects I hope to gain a lot of knowledge in many departments, I'm currently doing livestreams in gaming as well as coding, I also make tech videos about all sorts of hardware and software. In the future I want to make my own song, learn djing, become a respected photographer and videographer, animator and internet personality. Honesty is a top priority for me so if my idea of creating my own companies will ever come true then the word I would definitively put in my company’s name is “Transparent” because we live in a corporate society where companies lie left right and center (a reason I became a tech youtuber).</p>
            </div>

        </div>

    </div>
<!-- ABOUT ME END -->

    <br>

</body>
<script src="/bootstrap-4.3.1-dist\js\bootstrap.bundle.min.js" charset="utf-8"></script>
<script src="/bootstrap-4.3.1-dist\js\bootstrap.min.js" charset="utf-8"></script>

</html>