<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">  

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Strimakashi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="radiostream.php">Live Radio Stream</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="audiostream.php">Audio Stream</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="videostream.php">Live Video Stream</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Video Stream</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header --
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <hr class="intro-divider">
          <h3> Free Radio Streaming</h3>
          <a href="http://192.168.100.18:8000/listen.m3u"> Click To Tune in </a>
        </div>
      </div> -->


    < <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <hr class="intro-divider">
          <h3> Free Radio Streaming</h3>
          <audio autoplay="false" autobuffer="false" controls="true" src="http://192.168.100.18:8000/listen"/>
        </div>
      </div> -->
      
 
 <!--          <form class="box" method="post" action="" enctype="multipart/form-data">
  <div class="box__input">
    <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
    <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
    <button class="box__button" type="submit">Upload</button>
  </div>
  <div class="box__uploading">Uploading&hellip;</div>
  <div class="box__success">Done!</div>
  <div class="box__error">Error! <span></span>.</div>
</form>
    </header> -->
    
    <!-- Withoutdropzone -->
    <!-- <div ondrop="drop(event)" ondragover=" allowDrop(event)" > 
    <form action="upload.php" method="POST">
  <input type="file" multiple>
  <p id="uploadtext">Drag your files here or click in this area.</p>
  <button type="submit">Upload</button>
</form>
</div> -->


<!-- Withdropzone --
<div class="container">
<button id="submit-all">Submit all files</button> 
<form action="/file-upload" class="dropzone" id="myAwesomeDropzone ">
  <div class="fallback">
    <div class="row">
    </div>
    <input type="file">
  </div>
</form>


    <!-- Page Content -->
    <!-- <section class="content-section-a">

      <div class="container">
        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
            <p class="lead">A special thanks to
              <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>
              for providing the photographs that you see in this template. Visit their website to become a member.</p>
          </div>
          <div class="col-lg-5 mr-auto">
            <img class="img-fluid" src="img/ipad.png" alt="">
          </div>
        </div>

      </div>
      <!-- /.container --
    </section> -->

<!--     <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <form action="upload.php" method="POST">
            <input type="file" multiple>
              <p>Drag your files here or click in this area.</p>
            <button type="submit">Upload</button>
          </form>
        </div>
      </div>
  </div> -->

    <!-- <section class="content-section-b">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 mr-auto order-lg-2">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
            <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by
              <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
          </div>
          <div class="col-lg-5 ml-auto order-lg-1">
            <img class="img-fluid" src="img/dog.png" alt="">
          </div>
        </div>

      </div>
      <!-- /.container --

    </section> -->
    <!-- /.content-section-b -->

    <!-- <section class="content-section-a">

      <div class="container">

        <div class="row">
          <div class="col-lg-5 ml-auto">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
            <p class="lead">This template features the 'Lato' font, part of the
              <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as
              <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
          </div>
          <div class="col-lg-5 mr-auto ">
            <img class="img-fluid" src="img/phones.png" alt="">
          </div>
        </div>

      </div>
      <!-- /.container --

    </section> -->
    <!-- /.content-section-a -->
<!-- 
    <aside class="banner">

      <div class="container">

        <div class="row">
          <div class="col-lg-6 my-auto">
            <h2>Connect to Start Bootstrap:</h2>
          </div>
          <div class="col-lg-6 my-auto">
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-lg">
                  <i class="fa fa-linkedin fa-fw"></i>
                  <span class="network-name">Linkedin</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <!-- /.container --

    </aside> -->
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <ul class="list-inline">
          <!-- <li class="list-inline-item">
            <a href="#">Home</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a>About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a>Services</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#contact">Contact</a>
          </li>
        </ul> -->
        <p class="copyright text-muted small">Copyright &copy; Your Company 2017. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/dragdrop.js"></script> 
    <script src="vendor/bootstrap/js/dropzone.js"></script> 
    <script type="text/javascript" src="jquery.playlist.js"></script>

  </body>

</html>