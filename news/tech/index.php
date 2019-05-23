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
        <title>Test</title>
    </head>
    <body>
<!-- NAVIGATION START -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        </nav>
        <script type="text/javascript">
        $("nav").load("/html-preload/nav.html?version=1.1");
        </script>
<!-- NAVIGATION END -->

<!-- NAVBAR CATAGORIES START -->
            <div class="row">
                <div class="col-lg-12 col-lg-6">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a href="/news/recent" class="nav-link"><i class="fa fa-arrow-left"></i> Vorige</a>
                        </li>
                        <li class="nav-item active">
                            <a href="/news/recent" class="nav-link">Recent <span class="badge badge-pill bg-dark badge-dark">3</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/news/tech" class="nav-link active">Tech <span class="badge badge-pill bg-dark badge-dark">2</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/news/wetenschap" class="nav-link">Wetenschap <span class="badge badge-pill bg-dark badge-dark">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/news/wetenschap" class="nav-link">Volgende <i class="fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
<!-- NAVBAR CATAGORIES END -->

            <hr>

<!-- NAV PAGES START -->
            <div class="row">
                <div class="col-lg-12 col-lg-6">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1">Voorpagina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2">Pagina 1</a>
                        </li>
                    </ul>
                </div>
            </div>
<!-- NAV PAGES END -->

            <br>

<!-- HIDDEN CONTENT START-->
            <div class="tab-content">
                <div class="tab-pane container active" id="tab1"><?php include "news1.html" ?></div>
                <div class="tab-pane container" id="tab2"><?php include "news2.html" ?></div>
            </div>
<!-- HIDDEN CONTENT END-->

    </body>
    <script src="/bootstrap-4.3.1-dist\js\popper.js" charset="utf-8"></script>
    <script src="/bootstrap-4.3.1-dist\js\bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="/bootstrap-4.3.1-dist\js\bootstrap.min.js" charset="utf-8"></script>
</html>
