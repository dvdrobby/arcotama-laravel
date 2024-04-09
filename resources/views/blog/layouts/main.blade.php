<!doctype html>
<html lang="en">


  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Arcotama Company Profile" />
    <meta name="keywords" content="Water treatment services, indonesia" />

    <title>Arcotama | Blog</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/arcotama-favicon.png" />

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="/text/css" href="/css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/swiper.css" />

    <!--Bootstrap ================================================== -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet"
        href="/css/bootstrap-datepicker.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    {{-- <link rel="stylesheet" href="css/blog/bootstrap-icons.css"> --}}

    <link rel="stylesheet" href="/css/blog/tiny-slider.css">
    <link rel="stylesheet" href="/css/blog/aos.css">
    <link rel="stylesheet" href="/css/blog/glightbox.min.css">
    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    
    <script src="/js/modernizr.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">


    <nav class="navbar navbar-expand-lg bg-white navbar-light container-fluid py-3 position-fixed ">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="/images/arcotama-logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-3 " aria-current="page" href="/">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-3" href="/#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase px-3" href="/#about">about</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link text-uppercase  dropdown-toggle text-center {{Request::is('blog*') ? 'active' : ''}}" data-bs-toggle="dropdown" href="#"
                              role="button" aria-expanded="false">Pages</a>
                          <ul class="dropdown-menu">
                              <li><a href="/overview" class="dropdown-item text-uppercase ">Products Overview</a></li>
                              <li><a href="/client" class="dropdown-item text-uppercase ">Clients</a></li>
                              <li><a href="/blog" class="dropdown-item text-uppercase {{Request::is('blog*') ? 'active' : ''}}">Blog</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase  px-3 {{Request::is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
                        </li>
                    </ul>
  
                </div>
            </div>
        </div>
    </nav>

  @yield('content')

  <footer class="site-footer">
    {{-- <div class="container">
      <div class="row">

        <div class="col-lg-4">
            <h1 class="fs-1 fw-bold text-light">ARCOTAMA</h1>
            <p class="">Water Treatment Solutions and Spareparts</p>
            <div class="d-flex align-items-center ">
                <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                        icon="mdi:facebook"></iconify-icon></a>
                <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                        icon="mdi:twitter"></iconify-icon></a>
                <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                        icon="mdi:instagram"></iconify-icon></a>
                <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                        icon="mdi:linkedin"></iconify-icon></a>
                <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                        icon="mdi:youtube"></iconify-icon></a>
            </div>
        </div> <!-- /.col-lg-4 -->

        <div class="col-lg-4 ps-lg-5">
          <div class="widget">
            <h3 class="mb-4">Company</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="list-unstyled float-start links">
              <li><a href="#">Partners</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Creative</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3 class="mb-4">Recent Post Entry</h3>
            <div class="post-entry-footer">
              <ul>
                <li>
                  <a href="">
                    <img src="images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>


          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
    </div> <!-- /.container --> --}}
    <div class="container footer-container mt-5 pt-3">
            
        {{-- <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 "> --}}
        <footer class="row">
            <div class=" col-lg-4 mt-5 mt-md-0 ">
                <h1 class="fs-1 fw-bold text-danger">ARCOTAMA</h1>
                <p class="">Water Treatment Solutions and Spareparts</p>

                <div class="d-flex align-items-center ">
                  <a href="https://www.facebook.com/{{ $socials->facebook }}" target="_blank"><iconify-icon class="social-link-icon pe-4"
                          icon="mdi:facebook"></iconify-icon></a>
                  <a href="https://www.twitter.com/{{ $socials->twitter}}" target="_blank"><iconify-icon class="social-link-icon pe-4"
                          icon="mdi:twitter"></iconify-icon></a>
                  <a href="https://www.instagram.com/{{ $socials->instagram }}" target="_blank"><iconify-icon class="social-link-icon pe-4"
                          icon="mdi:instagram"></iconify-icon></a>
                  <a href="https://www.linkedin.com/{{ $socials->linkedin }}" target="_blank"><iconify-icon class="social-link-icon pe-4"
                          icon="mdi:linkedin"></iconify-icon></a>
                  <a href="https://www.youtube.com/{{ $socials->youtube }}" target="_blank"><iconify-icon class="social-link-icon pe-4"
                          icon="mdi:youtube"></iconify-icon></a>
              </div>
            </div>

            <div class="col-lg-2">
                <h5 class="py-3">Our services</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Installation</a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Reverse Osmosis </a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Mini Looping</a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Electrical</a>
                    </li>
                    <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Sparepart Supplier</a></li>
                </ul>
                
            </div>
            
            <div class="col-lg-2 ">
                <h5 class="py-3">Quick links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-3"><a href="/contact" class="nav-link fw-normal p-0 "> Our locations </a>
                    </li>
                    <li class="nav-item mb-3"><a href="/#about" class="nav-link fw-normal p-0 "> About us </a>
                    </li>
                    <li class="nav-item mb-3"><a href="/#projects" class="nav-link fw-normal p-0 "> Our projects </a>
                    </li>
                    <li class="nav-item mb-3"><a href="/contact" class="nav-link fw-normal p-0 "> Contact us </a></li>
                </ul>
            </div>
            <div class="col-lg-3 ">
                <h5 class="py-3">Contact Info</h5>
                <ul class="nav flex-column">
                  <li class="nav-item d-flex mb-3">
                    <iconify-icon class="contact-icon pe-3" icon="ion:location"></iconify-icon>
                    <a href="#" class="nav-link p-0 "> {{ $contact->address }} </a>
                  </li>
                  <li class="nav-item d-flex mb-3">
                      <iconify-icon class="contact-icon pe-3" icon="ion:call"></iconify-icon><a href="#"
                          class="nav-link p-0 "> {{ $contact->phone }} </a>
                  </li>
                  <li class="nav-item d-flex mb-3">
                      <iconify-icon class="contact-icon pe-3" icon="ion:mail"></iconify-icon><a href="#"
                          class="nav-link p-0 "> {{ $contact->email }} </a>
                  </li>

                </ul>
            </div>



        </footer>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-center align-items-center py-2 pt-4">
            <div class="align-items-center fs-5">
                <p class="fs-6">© 2023 Arcotama - All rights reserved</p>
            </div>
        </footer>
    </div>
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>


    <script src="/js/blog/bootstrap.bundle.min.js"></script>
    <script src="/js/blog/tiny-slider.js"></script>

    <script src="/js/blog/aos.js"></script>
    <script src="/js/blog/glightbox.min.js"></script>
    <script src="/js/blog/counter.js"></script>
    <script src="/js/blog/custom.js"></script>
    <script src="/js/iconify.js"></script>

    
  </body>
  </html>


