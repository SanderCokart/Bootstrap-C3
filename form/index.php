<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <script src="/js/jquery-3.3.1.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist\css\bootstrap-grid.min.css">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist\css\bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist\css\bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
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


    <div class="container">
        <h1>Subscribe to our news letter!</h1>
        <form action="#" class="was-validated">
            <div class="form-group">
                <label for="name">Name:</label>
                <input data-toggle="tooltip" data-placement="bottom" title="Insert your name here...or else..." type="text" class="form-control" id="name" required pattern="^[a-zA-Z ,.'-]+$">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input data-toggle="tooltip" data-placement="bottom" title="Insert your address here...or else..." type="text" class="form-control" id="address" required pattern="^[a-zA-Z]+ ?[a-zA-Z]+ [0-9]+$">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button data-toggle="modal" data-target="#modal" type="button" class="btn btn-primary" id="submit">Submit</button>
            <br><br>
            <div id="invalid" class="alert alert-danger" style="display: none"><strong>Invalid</strong> please fill out everything with the appropriate characters</div>
            <div id="valid" class="alert alert-success" style="display: none"><strong>valid!</strong></div>
            <div id="submit-sent" class="alert alert-success" style="display: none"><strong>Thank you for your submission!<br>You will recieve our news letter as soon as possible!</strong></div>
        </form>
    </div>


    <!-- The Modal -->
<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Are you sure you want to submit?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          Have you entered your credentials correctly?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button id="submitted" type="submit" class="btn btn-danger" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Go back</button>
      </div>

    </div>
  </div>
</div>


</body>
<script src="/bootstrap-4.3.1-dist\js\popper.js" charset="utf-8"></script>
<script src="/bootstrap-4.3.1-dist\js\bootstrap.bundle.min.js" charset="utf-8"></script>
<script src="/bootstrap-4.3.1-dist\js\bootstrap.min.js" charset="utf-8"></script>
<script src="form.js" charset="utf-8"></script>
</html>
