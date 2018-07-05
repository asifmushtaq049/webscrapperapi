<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WEB Scraping</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{URL::asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{URL::asset('/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('/css/creative.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">WEB Scraping</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Home</a>
            </li> -->
            <!-- <li class="nav-item">


              <a class="nav-link js-scroll-trigger" href="#">Docs<b class="caret"></b></a> -->
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('/dashboard/register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('/dashboard/login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('/dashboard/loginasadmin')}}">Login as Admin</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Feel free to scrap web</strong>
            </h1>
            <!-- <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Select your favourite website and category and then click scrap or download.You will get data in JSON or XML format.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Web Scraper API</a>
          </div> -->
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what developers need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">These days web scraping is very popular.Scraping data from other websites is very common but it was a very difficult task.Here is the complete solution with full featured scraped products!</p>
            <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">What we provide!</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-dashboard text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Dashboard</h3>
              <p class="text-muted mb-0">Here you can get the complete features.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-download text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Download File</h3>
              <p class="text-muted mb-0">You can download data file by clicking on download button</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-cog text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Auto API Generator</h3>
              <p class="text-muted mb-0">Web Scraper API will automaticaly generate the popular format data.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">User Manual</h3>
              <p class="text-muted mb-0">Here is the basic info of Web Scraper API!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{URL::asset('img/portfolio/fullsize/1.jpg')}}">
              <img class="img-fluid" src="{{URL::asset('img/portfolio/thumbnails/1.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    amazon.com
                  </div> -->
                  <div class="project-name">
                    ebay.com
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{URL::asset('img/portfolio/fullsize/2.jpg')}}">
              <img class="img-fluid" src="{{URL::asset('img/portfolio/thumbnails/2.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    Category
                  </div> -->
                  <div class="project-name">
                    gsmarena.com
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{URL::asset('img/portfolio/fullsize/3.jpg')}}">
              <img class="img-fluid" src="{{URL::asset('img/portfolio/thumbnails/3.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    Category
                  </div> -->
                  <div class="project-name">
                    alibaba.com
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{URL::asset('/img/portfolio/fullsize/4.jpg')}}">
              <img class="img-fluid" src="{{URL::asset('img/portfolio/thumbnails/4.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    Category
                  </div> -->
                  <div class="project-name">
                    daraz.pk
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{URL::asset('/img/portfolio/fullsize/5.jpg')}}">
              <img class="img-fluid" src="{{URL::asset('/img/portfolio/thumbnails/5.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    Category
                  </div> -->
                  <div class="project-name">
                    urdupoint.com
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{URL::asset('/img/portfolio/fullsize/6.jpg')}}">
              <img class="img-fluid" src="{{URL::asset('/img/portfolio/thumbnails/6.jpg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <!-- <div class="project-category text-faded">
                    Category
                  </div> -->
                  <div class="project-name">
                    mobile-phone.pk
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Start showing products!</h2>
        <a class="btn btn-light btn-xl sr-button" href="{{url('/dashboard/login')}}">Get API!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to join us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p><b>0092-3333353471</b></p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p> <b>web.scraper3@gmail.com </b></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{URL::asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{URL::asset('/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('/js/creative.min.js')}}"></script>

  </body>

</html>
