

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>मौन गूँज - मुख्य पृष्ठ</title>
    <!-- Stylesheets -->
    <meta name="keywords" content="Moun Goonj" />
<meta name="description" content="Moun Goonj - Responsive HTML5 Template">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Gotu&family=Open+Sans&display=swap" rel="stylesheet">

<!-- Libs CSS -->
<link href="/vendor/css/bootstrap.css" rel="stylesheet" />
<link href="/vendor/css/all.min.css" rel="stylesheet" />
<link href="/vendor/css/fontawesome.min.css" rel="stylesheet" />
<link href="/vendor/css/streamline-icon.css" rel="stylesheet" />
<link href="/vendor/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="/vendor/css/header.css" rel="stylesheet" />
<link href="/vendor/css/style.css" rel="stylesheet" />
<link href="/vendor/css/utilities.css" rel="stylesheet" />
<link href="/vendor/css/css3-variables.css" rel="stylesheet" />

<!-- Skin -->
<link rel="stylesheet" href="/vendor/css/default.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="/vendor/css/custom.css">

<!-- Custom CSS -->
{{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <!-- End Stylesheets -->
</head>
<body>
    <div class="wrapper" id="app">
        <!--Header-->
        <header id="header" class="header-effect-reveal" 
    data-plugin-options="{
        'stickyEnabled': true, 
        'stickyEffect': 'reveal', 
        'stickyEnableOnBoxed': true, 
        'stickyEnableOnMobile': true, 
        'stickyChangeLogo': true, 
        'stickyStartAt': 100, 
        'stickySetTop': '-35px'
    }"
>
  <div class="header-body">
      <div class="header-container container">
          <div class="header-row">
              <div class="header-column">
                  <div class="header-row sticky-logo">
                      <div class="header-logo">
                          <a class="logo-link" href="/index.ejs">
                              <img alt="Vertex" width="100" height="100" 
                                  data-sticky-width="60" 
                                  data-sticky-height="60" 
                                  data-sticky-top="35" 
                                  src="/images/MounGoonjLogo.png"
                              />
                          </a>
                      </div>
                      <div class="header-title">
                          <h3>मौन गूँज</h3>
                      </div>
                  </div>
              </div>
              <div class="header-column justify-content-end">
                  <div class="header-row pt-2">
                      <nav class="header-nav-top">
                          <ul class="nav nav-pills">
                              <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                  <a class="nav-link text-primary pl-0" href="#"><i class="icon-mail-2 fs-15 mr-1"></i> moungoonj@gmail.com </a>
                              </li>
                              <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                  <span class="ws-nowrap text-success"><i class="icon-headphone"></i> +91 9903248480</span>
                              </li>
                              <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                  <div class="social social-brand text-center">
                                      <a class="social-facebook m-0 transition-hover" href="#"><i class="fab fa-facebook"></i></a>
                                      <a class="social-twitter m-0 transition-hover" href="#"><i class="fab fa-twitter"></i></a>
                                      <a class="social-instagram m-0 transition-hover" href="#"><i class="fab fa-instagram"></i></a>
                                  </div>
                              </li>
                          </ul>
                      </nav>
                      <div class="header-nav-features">
                          <div class="header-nav-feature header-nav-features-search d-inline-flex">
                              <a href="#" class="header-nav-features-toggle" data-focus="headerSearch">
                                  <i class="fas fa-search header-nav-top-icon"></i>
                              </a>
                              <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                  <form class="input-round" role="search" action="#" method="get">
                                      <div class="simple-search input-group">
                                          <input class="form-control form-control-sm" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                          <span class="input-group-append">
                                              <button class="btn btn-white text-primary btn-sm" type="submit">
                                                  <i class="fa fa-search"></i>
                                              </button>
                                          </span>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="header-row">
                      <div class="header-nav header-nav-links order-2 order-lg-1">
                          <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                              <nav class="collapse">
                                  <ul class="nav nav-pills" id="mainNav">
                                      <li class="dropdown dropdown-mega">
                                          <a class="dropdown-item active" href="/index.ejs">
                                            होम
                                          </a>
                                      </li>
                                      <li class="dropdown">
                                          <a class="dropdown-item dropdown-toggle" href="/patrika.ejs">
                                            पत्रिका
                                          </a>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=kavitayein">कवितायेँ</a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=kahaniyaan ">कहानी </a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=gatiwidhiyaan">गतिविधियाँ</a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=pustak-samiksha">पुस्तक समीक्षा</a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=pravashi-sahitya">प्रवासी साहित्य</a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=anuwad">और अनुवाद</a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=media-aur-sinema">मीडिया और सिनेमा</a></li>
                                            <li><a class="dropdown-item" href="/patrika.ejs?category=yatra-vritant">यात्रा वृत्तांत</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown dropdown-mega">
                                          <a class="dropdown-item dropdown-toggle" href="/blog-list.ejs">
                                            ब्लॉग
                                          </a>
                                          <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-mega-content">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-0">
                                                                <h3 class="h5 mb-4">Trending Posts</h3>
                                                                <div class="clearfix">
                                                                    <div class="media mb-4">
                                                                        <div class="w-60px mr-3">
                                                                            <img class="pi-img-round" src="/images/bls1.jpg">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix p-0" href="/single-blog.ejs?blogId=1">Tourism in Dubai is booming by international tourist</a>
                                                                            <span class="time small text-muted">Dec 17, 2019</span>
                                                                        </div>
                                                                    </div>
                                  
                                                                    <div class="media mb-4">
                                                                        <div class="w-60px mr-3">
                                                                            <img class="pi-img-round" src="/images/bls3.jpg">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix p-0" href="/single-blog.ejs?blogId=2">3 Ways to Boost Online Sales off Season</a>
                                                                            <span class="time small text-muted">May 28, 2019</span>
                                                                        </div>
                                                                    </div>
                                  
                                                                    <div class="media mb-4">
                                                                        <div class="w-60px mr-3">
                                                                            <img class="pi-img-round" src="/images/bls2.jpg">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix p-0" href="/single-blog.ejs?blogId=3">Google Play Warns Users It Doesn’t Carry Fortnite</a>
                                                                            <span class="time small text-muted">Jun 14, 2019</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-0">
                                                                <h3 class="h5 mb-4">Don't Miss</h3>
                                                                <div class="clearfix">
                                                                    <div class="media align-items-center mb-4">
                                                                        <div class="w-60px mr-3 text-center">
                                                                            <i class="icon-bubble-conversation-2 fs-35"></i>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix p-0" href="/single-blog.ejs?blogId=4">Instant coffee was invented by a brilliant man</a>
                                                                            <span><a href="#" class="text-dark small anim-link-2 p-0">Sophia Green</a> <span class="small">-</span> </span>
                                                                            <span class="time small text-muted">Dec 17, 2019</span>
                                                                        </div>
                                                                    </div>
                                  
                                                                    <div class="media align-items-center mb-4">
                                                                        <div class="w-60px mr-3 text-center">
                                                                            <i class="icon-bubble-conversation-2 fs-35"></i>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix p-0" href="/single-blog.ejs?blogId=5">The world consumes close to 2.25B cups of coffee daily</a>
                                                                            <span><a href="#" class="text-dark small anim-link-2 p-0">Sophia Green</a> <span class="small">-</span> </span>
                                                                            <span class="time small text-muted">Dec 17, 2019</span>
                                                                        </div>
                                                                    </div>
                                  
                                                                    <div class="media align-items-center mb-4">
                                                                        <div class="w-60px mr-3 text-center">
                                                                            <i class="icon-bubble-conversation-2 fs-35"></i>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 clearfix p-0" href="/single-blog.ejs?blogId=6">Coffee beans aren’t beans at all, they are just fruit pits</a>
                                                                            <span><a href="#" class="text-dark small anim-link-2 p-0">Sophia Green</a> <span class="small">-</span> </span>
                                                                            <span class="time small text-muted">Dec 17, 2019</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-0">
                                                                <h3 class="h5 mb-4">Recent Comments</h3>
                                                                <div class="clearfix">
                                                                    <div class="media align-items-center mb-4">
                                                                        <div class="w-60px mr-3 text-center">
                                                                            <i class="icon-bubble-conversation-2 fs-35"></i>
                                                                        </div>
                                                                        <div class="media-body fs-15">
                                                                            <span><a href="#" class="text-dark anim-link-2 text-style-italic p-0">Sophia Green</a> <span class="text-muted">on</span> </span>
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 text-style-italic p-0" href="#">Five reasons why in-form Leicester City will finish the job and stay up</a>
                                                                        </div>
                                                                    </div>
                                  
                                                                    <div class="media align-items-center mb-4">
                                                                        <div class="w-60px mr-3 text-center">
                                                                            <i class="icon-bubble-conversation-2 fs-35"></i>
                                                                        </div>
                                                                        <div class="media-body fs-15">
                                                                            <span><a href="#" class="text-dark anim-link-2 text-style-italic p-0">John Doe</a> <span class="text-muted">on</span> </span>
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 text-style-italic p-0" href="#">Pasta with caramelised onions and yogurt recipe</a>
                                                                        </div>
                                                                    </div>
                                  
                                                                    <div class="media align-items-center mb-4">
                                                                        <div class="w-60px mr-3 text-center">
                                                                            <i class="icon-bubble-conversation-2 fs-35"></i>
                                                                        </div>
                                                                        <div class="media-body fs-15">
                                                                            <span><a href="#" class="text-dark anim-link-2 text-style-italic p-0">Sophia Green</a> <span class="text-muted">on</span> </span>
                                                                            <a class="mt-0 mb-2 text-dark anim-link-2 text-style-italic p-0" href="#">Pasta with caramelised onions and yogurt recipe</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                      </li>
                                      <li class="dropdown">
                                          <a class="dropdown-item dropdown-toggle" href="#">
                                            लेखक परिचय
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="../portfolio/agency.html">Agency</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/awesome-work.html">Awesome Work</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/full-width.html">Full Width</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/juicy-projects.html">Juicy Projects</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/masonry.html">Masonry</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/masonry-projects.html">Masonry Projects</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/mosaic.html">Mosaic</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/mosaic-flat.html">Mosaic Flat</a></li>
                                              <li><a class="dropdown-item" href="../portfolio/mosaic-projects.html">Mosaic Projects</a></li>
                                              <li class="header-divider"></li>
                                              <li class="dropdown-submenu">
                                                  <a class="dropdown-item dropdown-toggle font-weight-bold" href="#">Single</a>
                                                  <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="../portfolio/single.html">Single</a></li>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="dropdown dropdown-mega">
                                          <a class="dropdown-item dropdown-toggle" href="#">
                                            वस्तुऩिष्ठ हिंदी
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li>
                                                  <div class="dropdown-mega-content">
                                                      <div class="row">
                                                          <div class="col-lg-3 dropdown-mega-sub-content-block gradient-half-primary-v6 d-none d-lg-block">
                                                              <span class="top-sub-title text-white-50 d-block">THE MOST</span>
                                                              <span class="text-white font-weight-bold d-block text-4 mb-2">POWERFUL</span>
                                                              <p class="text-white-50">A revolutionary theme trusted by tons of customers</p>
                                                              <a class="btn btn-light btn-sm" href="#">Get Started</a>
                                                          </div>
                                                          <div class="col-lg-3 ml-auto">
                                                              <ul class="dropdown-mega-sub-nav">
                                                                  <li><a class="dropdown-item" href="../uikit/accordion.html"><i class="icon-list-1 menu-icon"></i> Accordion & Tab</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/alert.html"><i class="icon-list-1 menu-icon"></i> Alert</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/misc.html#badge"><i class="icon-list-1 menu-icon"></i> Badge</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/button.html"><i class="icon-list-1 menu-icon"></i> Button</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/card.html"><i class="icon-list-1 menu-icon"></i> Card</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/color.html"><i class="icon-list-1 menu-icon"></i> Color</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/countup.html"><i class="icon-list-1 menu-icon"></i> Countup</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/form.html"><i class="icon-list-1 menu-icon"></i> Form</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/gallery.html"><i class="icon-list-1 menu-icon"></i> Gallery</a></li>
                                                              </ul>
                                                          </div>
                                                          <div class="col-lg-3">
                                                              <ul class="dropdown-mega-sub-nav">
                                                                  <li><a class="dropdown-item" href="../uikit/icons.html"><i class="icon-list-1 menu-icon"></i> Icons <span class="badge badge-danger">New</span></a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/icon-box.html"><i class="icon-list-1 menu-icon"></i> Icon Box</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/icon-grid.html"><i class="icon-list-1 menu-icon"></i> Icon Grid</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/misc.html#lightbox"><i class="icon-list-1 menu-icon"></i> Lightbox</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/misc.html"><i class="icon-list-1 menu-icon"></i> Misc</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/misc.html#modal"><i class="icon-list-1 menu-icon"></i> Modal</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/overlay.html"><i class="icon-list-1 menu-icon"></i> Overlay</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/popup.html"><i class="icon-list-1 menu-icon"></i> Popup</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/divider.html"><i class="icon-list-1 menu-icon"></i> Oval Divider <span class="badge badge-primary">Hot</span></a></li>
                                                              </ul>
                                                          </div>
                                                          <div class="col-lg-3">
                                                              <ul class="dropdown-mega-sub-nav">
                                                                  <li><a class="dropdown-item" href="../uikit/progress.html"><i class="icon-list-1 menu-icon"></i> Progress</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/slider.html"><i class="icon-list-1 menu-icon"></i> Slider</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/social-icons.html"><i class="icon-list-1 menu-icon"></i> Social Icons</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/table.html"><i class="icon-list-1 menu-icon"></i> Table</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/team.html"><i class="icon-list-1 menu-icon"></i> Team <span class="badge badge-primary">Unique</span> </a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/testimonial.html"><i class="icon-list-1 menu-icon"></i> Testimonial</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/typing.html"><i class="icon-list-1 menu-icon"></i> Typing</a></li>
                                                                  <li><a class="dropdown-item" href="../uikit/video.html"><i class="icon-list-1 menu-icon"></i> Video</a></li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="dropdown">
                                          <a class="dropdown-item dropdown-toggle" href="#">
                                            शब्द कोश
                                          </a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="../feature/blog.html">Blog</a></li>
                                              <li><a class="dropdown-item" href="../feature/footer.html">Footer</a></li>
                                              <li><a class="dropdown-item" href="../feature/header.html">Header</a></li>
                                              <li><a class="dropdown-item" href="index-2-left-header.html">Header - Left Side <span class="badge badge-primary">New</span></a></li>
                                              <li><a class="dropdown-item" href="../feature/map.html">Map</a></li>
                                              <li><a class="dropdown-item" href="../feature/modal.html">Modal/Popup</a></li>
                                              <li><a class="dropdown-item" href="../feature/section.html">Section</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown dropdown-mega">
                                        <a class="dropdown-item" href="/about-us.ejs">हमारे बारे में</a>
                                      </li>
                                      <li class="dropdown dropdown-mega">
                                        <a class="dropdown-item" href="/our-team.ejs">हमारी टीम</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                          <a href="/contact-us.ejs" class="btn btn-primary transition-hover btn-sm ml-3">संपर्क करें</a>
                          <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                              <i class="fas fa-bars"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>
        <!--End Header-->

        <main class="main-content">
            <section id="theme-banner-four">
  <img src="/svgs/shape-8.svg" alt="" class="shape-one">
  <img src="/svgs/shape-9.svg" alt="" class="shape-two">
  <img src="/svgs/shape-10.svg" alt="" class="shape-three">
  <img src="/svgs/shape-11.svg" alt="" class="shape-four">
  <div class="round-shape-one"></div>
  <div class="round-shape-two"></div>
  <div class="round-shape-three"></div>
  <div class="round-shape-four"></div>

  <div class="container">
      <div class="main-wrapper aos-init" data-aos="fade-right" data-aos-duration="800">
        <div class="row align-items-center pt-8">
          <div class="col-sm-12 col-lg-6">
              <div id="svg_parent" class="mb-sm-8 mb-md-4 mb-lg-0">
                  <figure class="ie-main-hero">
                      <img class="js-svg-injector" src="/svgs/svg3.svg" alt="Image Description"
                        data-img-info='[{"targetId": "#svg_changing_id", "src": "/images/profile-logo.png"}]'
                        data-parent="#svg_parent">
                  </figure>
              </div>
          </div>
          <div class="col-sm-12 col-lg-6">
              <div class="clearfix text-center text-lg-left">
                  <h2 class="display-4">
                      मौन गूँज <br/>
                      <!-- <span class="text-primary" data-typing="मौन गूँज, ऑनलाइन पत्रिका" data-back-speed="75"></span> -->
                  </h2>
                  <h2 class="display-5">
                      <!-- साहित्य, संस्कृति, कला एवं शोध की त्रैमासिकी -->
                      <span class="text-primary" data-typing="ऑनलाइन पत्रिका, साहित्य, संस्कृति, कला एवं शोध की त्रैमासिकी" data-back-speed="75"></span>
                  </h2>
                  <p class="mt-3 mb-4"> 
                      विवामस ने एक क्वॉलम कॉपर को बताया, लेकिन उसने कहा, यह ठीक नहीं है, लेकिन यह अभी भी नहीं है। इसके अलावा, लेकिन यह भी कीमत के लिए तैयार है। क्वालिवलिस लैगूला में एसईडी
                      इसके अलावा, लेकिन यह भी कीमत के लिए तैयार है। क्वालिवलिस लैगूला में एसईडी...
                  </p>
                  <a href="#" class="btn btn-sleek-primary pr-4 pl-4 transition-hover mr-3">
                      हमारे बारे में अधिक
                  </a>
                  <div class="d-inline-block">
                      <div class="media align-items-center text-left">
                          <div class="mr-2">
                              <a class="btn btn-pill btn-sleek-primary" href="https://www.youtube.com/watch?v=bmixiVwtDso" data-provide="lightbox">
                                  <i class="fa fa-play fs-12" style="margin-left: .15rem;"></i>
                              </a>
                          </div>
                          <div class="media-body">
                              <a class="mb-0 text-default" href="https://www.youtube.com/watch?v=bmixiVwtDso" data-provide="lightbox">वीडियो देखें</a>
                          </div>
                      </div>
                  </div>

                </div>
            </div>
        </div>
      </div> <!-- /.main-wrapper -->
  </div> <!-- /.container -->
</section>
            
            <section class="section pt-8">
                <div class="container">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
                        <h2>आइए देखते हैं हमारा <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">काम</mark></h2>
                        <p class="lead">यदि आप हमारे साथ काम करना चाह रहे हैं तो संपर्क पृष्ठ के माध्यम से हमसे संपर्क करने में संकोच न करें।</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="cbp-l-center">
                                <div id="js-filters-agency" class="cbp-l-filters-text">
                                    <div class="cbp-l-filters-text-sort">के द्वारा छनित:</div>
                                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                                        सब <div class="cbp-filter-counter"></div>
                                    </div> |
                                    <div data-filter=".identity" class="cbp-filter-item">
                                        पहचान <div class="cbp-filter-counter"></div>
                                    </div> |
                                    <div data-filter=".web-design" class="cbp-filter-item">
                                        वेब डिजाइन <div class="cbp-filter-counter"></div>
                                    </div> |
                                    <div data-filter=".graphic" class="cbp-filter-item">
                                        ग्राफिक <div class="cbp-filter-counter"></div>
                                    </div> |
                                    <div data-filter=".logos" class="cbp-filter-item">
                                        ्रतीक चिन्ह <div class="cbp-filter-counter"></div>
                                    </div>
                                </div>
                                <div id="js-sort-agency" class="cbp-l-sort cbp-l-sort--simple">
                                    <div class="cbp-l-text-sort">इसके अनुसार क्रमबद्ध करें: </div>
                                    <div class="cbp-l-dropdown">
                                        <div class="cbp-l-dropdown-wrap">
                                            <div class="cbp-l-dropdown-header">मूल आदेश</div>
                                            <div class="cbp-l-dropdown-list">
                                                <div class="cbp-l-dropdown-item cbp-sort-item cbp-l-dropdown-item--active" data-sort="" data-sortBy="">मूल आदेश</div>
                                                <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-title" data-sortBy="string:asc">शीर्षक - चढ़ते क्रम</div>
                                                <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-title" data-sortBy="string:desc">शीर्षक - उतरते क्रम</div>
                                                <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-desc" data-sortBy="string:asc">विवरण - चढ़ते क्रम</div>
                                                <div class="cbp-l-dropdown-item cbp-sort-item" data-sort=".cbp-l-grid-agency-desc" data-sortBy="string:desc">विवरण - उतरते क्रम</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp cbp-l-grid-agency mb-8"
                                 data-filters="#js-filters-agency"
                                 data-layout-mode="grid"
                                 data-animation-type='slideLeft'
                                 data-caption='zoom'
                                 data-display-type='fadeIn'
                                 data-display-type-speed="100"
                                 data-gap-horizontal="35"
                                 data-gap-vertical="15"
                                 data-plugin-sort-element="#js-sort-agency"
                                 data-media-queries='[
                                    {"width": 1500, "cols": 4},
                                    {"width": 1100, "cols": 4},
                                    {"width": 800, "cols": 3},
                                    {"width": 480, "cols": 2},
                                    {"width": 300, "cols": 1}
                                  ]'>
                                <div class="cbp-item graphic">
                                    <a href="/images/portfolio-1.jpg" target="_blank">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="/images/portfolio-1.jpg" data-cbp-src="/images/portfolio-1.jpg" alt="" width="380" height="320">
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-agency-title">डैशबोर्ड</div>
                                        <div class="cbp-l-grid-agency-desc">वेब डिजाइन / ग्राफिक</div>
                                    </a>
                                </div>
                                <div class="cbp-item web-design logos">
                                    <a href="/images/portfolio-2.jpg" target="_blank">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="/images/portfolio-2.jpg" data-cbp-src="/images/portfolio-2.jpg" alt="" width="380" height="320">
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-agency-title">विश्व घड़ी</div>
                                        <div class="cbp-l-grid-agency-desc">लोगो / वेब डिज़ाइन</div>
                                    </a>
                                </div>
                                <div class="cbp-item graphic logos">
                                    <a href="/images/portfolio-3.jpg" target="_blank">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="/images/portfolio-3.jpg" data-cbp-src="/images/portfolio-3.jpg" alt="" width="380" height="320">
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-agency-title">करने के लिए डैशबोर्ड</div>
                                        <div class="cbp-l-grid-agency-desc">ग्राफिक / लोगो</div>
                                    </a>
                                </div>
                                <div class="cbp-item web-design graphic">
                                    <a href="/images/portfolio-4.jpg" target="_blank">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="/images/portfolio-4.jpg" data-cbp-src="/images/portfolio-4.jpg" alt="" width="380" height="320">
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-agency-title">घटनाक्रम और अधिक</div>
                                        <div class="cbp-l-grid-agency-desc">वेब डिजाइन / ग्राफिक</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <a class="btn btn-sleek-primary transition-hover pr-5 pl-5" href="#" target="_self">
                                सभी परियोजना देखें
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            | Parallax video
            |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
            !-->
            <section class="section text-white text-center ml-0 mr-0 ml-lg-5 mr-lg-5" data-video="mp4:/video/video_space_cover.mp4">
                <div class="container">
                    <header class="section-header mb-3">
                        <img src="/images/MounGoonjLogo.png" width="50"/>
                    </header>

                    <p class="white-color fs-24 fw-100">
                        हमारी थीम पूरे विश्व में <b class="fsx">24,000</b> <br />
                        से अधिक वेबसाइटों की शक्ति है
                    </p>

                    <a class="btn btn-sleek-white transition-hover mt-4 btn-wide mb-5 common-Link--arrow" href="#" target="_self">
                      हमारे बारे में अधिक
                    </a>
                </div>
                <figure class="position-absolute right-0 bottom-0 left-0 z-index-2 mb-0">
                    <img class="js-svg-injector" src="./svgs/divider-bottom.svg" alt="Image Description">
                </figure>
            </section>

            <section class="section">
                <div class="container">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
                        <h2>तेज और आसान <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">डिज़ाइन</mark></h2>
                        <p class="lead">अंतिम और भयानक अनुभव में शामिल हों</p>
                    </div>

                    <div class="row justify-content-lg-center">
                        <div class="col-md-6 col-lg-5 mb-7">
                            <div class="media pr-lg-5">
                                <div class="w-60px mr-4">
                                    <img class="icon bg-primary" src="/svgs/bulb-1.svg" alt="Icon" data-inject-svg />
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 mb-2">तुरंत आरंभ करें</h3>
                                    <p class="mb-1"> लडस में सैड क्विस डोलर ullamcorper euismod nec et nibh। <a href="#" class="anim-link-2 anim-link-2-primary">मोरबी</a>  मोलिस, एनिम विटे। </p>
                                    <a href="#" class="anim-link-2 anim-link-2-primary  common-Link--arrow common-BodyText">अब अन्वेषण करें </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-7">
                            <div class="media pl-lg-5">
                                <div class="w-60px mr-4">
                                    <img class="icon bg-primary" src="/svgs/crop.svg" alt="Icon" data-inject-svg />
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 mb-2">पूर्ण उत्तरदायी <span class="badge bg-secondary font-weight-normal">अद्वितीय</span></h3>
                                    <p class="mb-1"> लडस में सैड क्विस डोलर <span class="m-link-muted">ullamcorper</span> euismod nec et nibh। मोरबी मोलिस एनिम विटे यूरोप। </p>
                                    <a href="#" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">अब अन्वेषण करें  </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6 col-lg-5 mb-7">
                            <div class="media pr-lg-5">
                                <div class="w-60px mr-4">
                                    <img class="icon bg-primary" src="/svgs/brush.svg" alt="Icon" data-inject-svg />
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 mb-2">अनुकूलित करने के लिए आसान है</h3>
                                    <p class="mb-1"> लडस में सैड क्विस डोलर ullamcorper euismod nec et nibh। मोरबी मोलिस यूरोपिज़म ।। </p>
                                    <a href="#" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">अब अन्वेषण करें </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mb-7">
                            <div class="media pl-lg-5">
                                <div class="w-60px mr-4">
                                    <img class="icon bg-primary" src="/svgs/couch.svg" alt="sketch icon" data-inject-svg />
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 mb-2">स्वच्छ और आधुनिक</h3>
                                    <p class="mb-1"> लडस में सैड क्विस डोलर ullamcorper euismod nec et nibh। मोरबी मोलिस, एनिम विटे रटरु। </p>
                                    <a href="#" class="anim-link-2 anim-link-2-primary common-Link--arrow common-BodyText">अब अन्वेषण करें </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12 mt-2">
                            <a class="btn btn-sleek-primary transition-hover pr-5 pl-5" href="#" target="_self">
                               आइए देखें हमारी विशेषताएं
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
                        <h2>हमारी <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">टीम</mark> से मिलें </h2>
                        <p class="lead">अंतिम और भयानक अनुभव में शामिल हों</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">

                            <div class="team-member">
                                <div class="position-relative">
                                    <img class="img-fluid w-100 rounded" src="/images/t1.jpg" alt="Roberto Willis">
                                    <div class="member-social">
                                        <div class="member-social-inner">
                                            <ul class="list-inline">
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Twitter">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h5 mb-0">रॉबर्टो विलिस</h3>
                                        <p class="font-weight-light mb-0 small">सह-संस्थापक</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">

                            <div class="team-member">
                                <div class="position-relative">
                                    <img class="img-fluid w-100 rounded" src="/images/t5.jpg" alt="Roberto Willis">
                                    <div class="member-social">
                                        <div class="member-social-inner">
                                            <ul class="list-inline">
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Twitter">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h5 mb-0">विक्टोरिया लॉडा</h3>
                                        <p class="font-weight-light mb-0 small">वेब डेवलपर</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">

                            <div class="team-member">
                                <div class="position-relative">
                                    <img class="img-fluid w-100 rounded" src="/images/t2.jpg" alt="Roberto Willis">
                                    <div class="member-social">
                                        <div class="member-social-inner">
                                            <ul class="list-inline">
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Twitter">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h5 mb-0">जॉन डो</h3>
                                        <p class="font-weight-light mb-0 small">डिजाइनर</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">

                            <div class="team-member">
                                <div class="position-relative">
                                    <img class="img-fluid w-100 rounded" src="/images/t4.jpg" alt="Roberto Willis">
                                    <div class="member-social">
                                        <div class="member-social-inner">
                                            <ul class="list-inline">
                                                <li>
                                                    <a target="_blank" href="#" class="tooltips" data-placement="top" rel="tooltip" data-original-title="Facebook">
                                                        <i class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-body text-center p-3">
                                        <h3 class="h5 mb-0">जॉन स्मिथ</h3>
                                        <p class="font-weight-light mb-0 small">सॉफ्टवेयर डेवलपर</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section data-overlay="3" class="m-gab-3" data-parallax="/images/h26.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="clearfix">
                                <h2 class="text-white font-weight-bold fs-40">
                                    चलो काम करते हैं
                                </h2>
                                <p class="text-white mt-3 mb-4 lead">
                                    हमारे साथ संपर्क में रहें और हमें आपकी मदद करने दें, हम आपकी परियोजना को साकार कर सकते हैं ।
                                </p>
                                <a href="#getStarted" class="btn btn-outline-light">
                                    शुरू करते हैं
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="https://www.youtube.com/watch?v=bmixiVwtDso" class="m-video-link" data-provide="lightbox">
                                <div class="m-video-link--icon"><i class="fas fa-play"></i></div>
                                <div class="m-video-link--text text-white">
                                    <div class="font-weight-bold">इंट्रो वीडियो</div>
                                    <div>देखें</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="oval-divider--top oval-divider--5"></div>
                <div class="oval-divider--bottom oval-divider--5"></div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
                        <h2>हमारी ख़ुश <mark data-aos="highlight-text" data-aos-delay="200" class="aos-init aos-animate">ग्राहकेँ</mark></h2>
                        <p class="lead">हमारे ग्राहक हमारे व्यवसाय के जीवन-स्रोत हैं और हमारे नवाचारों के पीछे बल हैं।</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div data-provide="slider" data-slides-to-show="7" data-slides-to-scroll="3" data-autoplay="true" data-dots="true">
                                <div><img class="p-4 opacity-04" src="/images/01.png"></div>
                                <div><img class="p-4 opacity-04" src="/images/02.png"></div>
                                <div><img class="p-4 opacity-04" src="/images/03.png"></div>
                                <div><img class="p-4 opacity-04" src="/images/04.png"></div>
                                <div><img class="p-4 opacity-04" src="/images/05.png"></div>
                                <div><img class="p-4 opacity-04" src="/images/04.png"></div>
                                <div><img class="p-4 opacity-04" src="/images/03.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section pt-6 pb-8 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text-center text-sm-left">
                            <h2 class="h3 primary-color mb-0 fw-400">शुरू करने के लिए?</h2>
                            <h3 class="h4 mb-0 fw-400">एक मुफ्त खाता बनाएं या संपर्क करें।</h3>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center text-lg-right">
                                <a class="btn btn-primary transition-hover mt-3 mb-0 mr-2" target="_blank" href="#"><span>शुरू करें</span></a>
                                <a class="btn btn-secondary transition-hover mt-3 mb-0" href="#" target="_self"><span class="text">संपर्क में रहें</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--Footer-Wrap-->
        <footer class="border-top border-bottom bg-light">
            <!-- footer-content -->
            <div class="container m-gab-2"> 
  <div class="row">
      <div class="col-sm-5 mb-5 mb-lg-0">
          <p>
              <img alt="Vertex" src="/images/MounGoonjLogo.png" class="mr-1 mb-2" width="60">
              <span class="fs-20 mt-2">मौन गूँज</span>
          </p>
          <p class="fs-20 ml-2">
              <span class="m-link">मास्टर</span> व्यवसाय के लिए नवाचार मंच
              है। और बिल्लियों।
          </p>
          <span class="fs-12">हमें </span>
          <a href="#" class="primary-color fs-12">Facebook</a>,
          <a href="#" class="primary-color fs-12">LinkIn</a>,
          <a href="#" class="primary-color fs-12">Twitter</a>,
          <a href="#" class="primary-color fs-12">Instagram</a>
          <span class="fs-12">पर फॉलो करें</span>
      </div>
      <div class="col-sm-3 mb-5 mb-lg-0">
          <h3 class="h6 text-uppercase fs-14">
              <strong>समाधान</strong>
          </h3>
          <ul class="list-unstyled mb-0">
              <li><a class="m-list--link" href="#">मास्टर प्रबंधन</a></li>
              <li><a class="m-list--link" href="#">जारी रखा</a></li>
              <li><a class="m-list--link" href="#">कर्मचारी को काम पर लगाना</a> </li>
              <li><a class="m-list--link" href="#">परिवर्तन प्रबंधन</a> </li>
              <li><a class="m-list--link" href="#">और देखो...</a> </li>
          </ul>
      </div>
      <div class="col-sm-2 mb-5 mb-lg-0">
          <h3 class="h6 text-uppercase fs-14">
              <strong>उत्पाद</strong>
          </h3>
          <ul class="list-unstyled mb-0">
              <li><a class="m-list--link" href="#">मास्टर क्यों</a></li>
              <li><a class="m-list--link" href="#">निशुल्क साइन अप करें</a></li>
              <li><a class="m-list--link" href="#">एक डेमो प्राप्त करें</a> </li>
              <li><a class="m-list--link" href="#">विशेषताएं</a> </li>
              <li><a class="m-list--link" href="#">मूल्य निर्धारण</a> </li>
          </ul>
      </div>
      <div class="col-sm-2">
          <h3 class="h6 text-uppercase fs-14">
              <strong>ग्राहकों</strong>
          </h3>
          <ul class="list-unstyled mb-0">
              <li><a class="m-list--link" href="#">गेटिंग स्टार्टेड गाइड</a></li>
              <li><a class="m-list--link" href="#">ग्राहक सफलता</a></li>
              <li><a class="m-list--link" href="#">प्यार की दीवार</a> </li>
              <li><a class="m-list--link" href="#">सहायता केंद्र</a> </li>
              <li><a class="m-list--link" href="#">भागीदारों</a> </li>
          </ul>
      </div>
  </div>
</div>
            <!-- end footer-content -->

            <hr class="mt-0 mb-1">

            <!-- Copyright -->
            <div class="container m-gab-1">
  <div class="row">
      <div class="col-md-5">
          <ul class="list-inline mb-0 text-center text-lg-left">
              <li class="list-inline-item"><a class="m-list--link" href="#"><i class="icon-chat-1 fs-17 text-primary mr-1"></i> चैट </a></li>
              <li class="list-inline-item"><a class="m-list--link" href="#"><i class="icon-camera-landscape fs-17 text-primary mr-1"></i> अंग्रेज़ी </a></li>
              <li class="list-inline-item"><a class="m-list--link" href="#"><i class="icon-headphone fs-17 text-primary mr-1"></i> +91 9903248480 </a></li>
          </ul>
      </div>
      <div class="col-md-2 center">
          <p>
          <img src="/images/MounGoonjLogo.png" class="center my-lg-0 mr-1" width="40"/>
          <span class="fs-16">मौन गूँज</span>
        </p>
      </div>
      <div class="col-md-5">
          <ul class="list-inline mb-0 text-center text-lg-right">
              <li class="list-inline-item"><a class="m-list--link" href="#">© 2020</a></li>
              <li class="list-inline-item"><a class="m-list--link" href="#"> ब्लॉग </a></li>
              <li class="list-inline-item"><a class="m-list--link" href="#"> एकांत </a></li>
              <li class="list-inline-item"><a class="m-list--link" href="#"> शर्तें </a></li>
              <li class="list-inline-item"><a class="m-list--link" href="#"> सुरक्षा </a></li>
          </ul>
      </div>
  </div>
</div>
            <!-- End Copyright -->
        </footer>
        <!--End Footer-Wrap-->
    </div>

    <script src="/vendor/js/jquery.min.js"></script>
    <script src="/vendor/js/jquery-migrate.min.js"></script>
    <script src="/vendor/js/jquery.visible.min.js"></script>
    <script src="/vendor/js/jquery.easing.min.js"></script>
    <script src="/vendor/js/popper.js"></script>
    <script src="/vendor/js/bootstrap.min.js"></script>
    <script src="/vendor/js/jquery.cubeportfolio.min.js"></script>
    <script src="/vendor/js/cubeportfolio.init.js"></script>
    <script src="/vendor/js/slick.js"></script>
    <script src="/vendor/js/svg-injector.min.js"></script>

    <script src="/vendor/js/other.js"></script>
    <script src="/vendor/js/page.js"></script>
    <script src="/vendor/js/script.js"></script>

    <!-- Theme Custom -->
    <script src="/vendor/js/custom.js"></script>
</body>
</html>