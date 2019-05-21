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

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        </nav>
        <script type="text/javascript">
        $("nav").load("/html-preload/nav.html");
        </script>

        <br>

        <div class="container text-center">
            <div class="btn-group col-sm-12">
                <a href="/news/recent" type="button" class="btn btn-primary">
                    Previous
                </a>
                <a href="/news/recent" type="button" class="btn btn-primary active">
                    Recent&#09;<span class="badge badge-light">4</span>
                </a>
                <a href="/news/tech" type="button" class="btn btn-primary">
                      Tech&#09;<span class="badge badge-light">4</span>
                </a>
                <a href="/news/politics" type="button" class="btn btn-primary">
                      Politics&#09;<span class="badge badge-light">1</span>
                </a>
                <a href="/news/science" type="button" class="btn btn-primary">
                      Science&#09;<span class="badge badge-light">0</span>
                </a>
                <a href="/news/music" type="button" class="btn btn-primary">
                      Music&#09;<span class="badge badge-light">2</span>
                </a>
                <a href="/news/music" type="button" class="btn btn-primary">
                      Next
                </a>
            </div>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Voorpagina</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="home"><?php include "news1.html" ?></div>
          <div class="tab-pane container fade" id="menu1"><?php include "news2.html" ?></div>
          <div class="tab-pane container fade" id="menu2"><?php include "news3.html" ?></div>
        </div>

    </body>
    <script src="/bootstrap-4.3.1-dist\js\popper.js" charset="utf-8"></script>
    <script src="/bootstrap-4.3.1-dist\js\bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="/bootstrap-4.3.1-dist\js\bootstrap.min.js" charset="utf-8"></script>
</html>
