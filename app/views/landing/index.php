<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gludesa</title>
    <meta name="description" content="Garda - Collection Pages Template Based On Bootstrap 5" />

    <!-- Stylesheets -->
    <link href="<?= URLROOT ?>/landing/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/landing/assets/css/style.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/landing/assets/css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/landing/assets/css/owlcarousel/owl-style.css" rel="stylesheet">
    <link href="<?= URLROOT ?>/landing/assets/font-awesome/css/all.min.css" rel="stylesheet">

    <!--Font Stylesheet-->
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans:400,500,600,700,800,900&display=swap'
        rel='stylesheet'>

    <!-- Favicon -->
    <link href="<?= URLROOT ?>/landing/assets/images/favicon.ico" type="image/x-icon" rel="icon">
    <link rel="icon" href="<?= URLROOT ?>/landing/assets/images/favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileImage" content="<?= URLROOT ?>/landing/assets/images/favicon.ico" />

</head>

<body>

    <!-- Primary Header - Start -->

    <header class="primary-header">
        <div class="container-full">

            <!-- Topbar Header - Start -->

            <div class="d-flex align-items-center container-full topbar-header">
                <div class="container">
                    <div class="row no-gap">

                        <!-- Left Column -->

                        <div class="d-flex align-items-center justify-content-start col-md-8 p-0 left-info">
                            <ul class="text-small icon-list">
                                <li class="text-white-tr"><i class="fas fa-map-pin icon-list-f"></i> Sumatera Utara,
                                    Kab.Deli Serdang</li>
                                <li class="text-white-tr"><i class="fas fa-phone-square icon-list-f"></i> ( +62 ) 123
                                    456 789</li>
                            </ul>

                        </div>

                        <!-- Left Column - End -->

                        <!-- Right Column -->

                        <div
                            class="d-flex align-items-center justify-content-md-end justify-content-center col-md-4 p-0 right-info">
                            <span class="text-small">Follow Us : </span>
                            <ul class="text-small social-info">
                                <li class="social-icon-f"><a href="#" class="fab fa-facebook hvr-float"></a></li>
                                <li class="social-icon-f"><a href="#" class="fab fa-twitter hvr-float"></a></li>
                                <li class="social-icon-f"><a href="#" class="fab fa-linkedin hvr-float"></a></li>
                                <li class="social-icon-f"><a href="#" class="fab fa-youtube hvr-float"></a></li>
                            </ul>
                        </div>

                        <!-- Right Column - End -->

                    </div>
                </div>
            </div>

            <!-- Topbar Header - End -->

            <!-- Navbar Header - Start -->

            <div class="navbar-header">
                <div class="container clearfix">
                    <div class="row">

                        <!-- Left Column Navbar Header - Start -->

                        <div class="d-flex align-items-center col-10 nav-left p-0">
                            <div class="website-brand">
                                <a href="/"><img src="<?= URLROOT ?>/landing/assets/images/logo.png" alt=""></a>
                            </div>

                            <!-- Menu Navigation - Start -->

                            <nav class="navbar navbar-expand-md main-menu">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="d-flex justify-content-end navbar-nav accent-text">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="<?= URLROOT ?>/landing">
                                                Beranda
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Data Kelompok
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link drop-down" href="#">Profil Desa</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item accent-text" href="#">
                                                        Visi dan Misi
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item accent-text" href="#">
                                                        Sejarah Desa
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link drop-down" href="#">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item accent-text" href="/our-gallery.html">Our
                                                        Gallery</a></li>
                                                <li><a class="dropdown-item accent-text" href="/faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link drop-down" href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item accent-text" href="/contact-us.html">Contact
                                                        Us</a></li>
                                                <li><a class="dropdown-item accent-text" href="/404.html">404</a></li>
                                                <li><a class="dropdown-item accent-text" href="blog-page.html">Blog</a>
                                                </li>
                                                <li><a class="dropdown-item accent-text" href="/single-post.html">Single
                                                        Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Menu Navigation - End -->

                        </div>

                        <!-- Left Column Navbar Header - End -->

                        <!-- Right Column Navbar Header - Start -->

                        <div class="d-flex align-items-center justify-content-end col-2 nav-right p-0">
                            <a class="btn-one btn-nav hvr-float" type="button" href="<?= URLROOT ?>/users/login">Get
                                Started</a>

                            <!-- Mobile Menu - Start -->

                            <div class="mobile-menu">
                                <button class="menu-toggle float-end"><i class="fas fa-bars"></i></button>
                                <div class="mobile-menu-canvas">
                                    <div class="d-flex align-items-center clearfix bg-white">
                                        <div class="d-flex align-items-center mobile-brand float-start"></div>
                                        <div class="right-mb-head float-end">
                                            <button class="close-toggle float-end" type="button"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="menu-mb-content">
                                        <!-- Navigation Menu From Navbar Menu -->
                                    </div>
                                </div>
                                <div class="mb-overlay"></div>
                            </div>

                            <!-- Mobile Menu - End -->

                            <!-- Floating Search - Start -->

                            <button type="button" class="search-btn"></button>
                            <div class="d-flex align-items-center floating-search">
                                <div class="container search-form">
                                    <form class="d-flex search-transparent" role="search">
                                        <input class="form-control src-form" type="search"
                                            placeholder="What are you looking for . . ." aria-label="Search">
                                        <button class="btn-src-submit" type="submit"></button>
                                    </form>
                                </div>
                            </div>
                            <div class="floating-search-overlay"></div>

                            <!-- Floating Search - End -->

                        </div>

                        <!-- Right Column Navbar Header - End -->

                    </div>
                </div>
            </div>

            <!-- Navbar Header - End -->
        </div>
    </header>

    <!-- Primary Header - End -->

    <!-- Hero Block Section - Start -->

    <div class="container-full">
        <div class="hero-block-slider container-full owl-carousel owl-theme">

            <!-- Slider Content -->

            <div class="container-full hb-slider"
                data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
                <div class="d-flex align-items-center hb-slider-overlay">
                    <div class="container slider-content">
                        <div class="inner-slider-content">
                            <p class="subheading tc-secondary">Professionals Gardener Team</p>
                            <h1 class="text-white">Get The <span class="tc-secondary">Green House</span> Based What You
                                Want</h1>
                            <hr class="divider-heading">
                            <p class="text-white-tr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            <a class="btn-three hvr-float" type="button" href="/pricing-single.html">Get Started</a>
                            <a class="btn-transparent hvr-float" type="button" href="tel:123456789"><i
                                    class="fas fa-phone btn-icon-f"></i> 123 456 789</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Content -->

            <div class="container-full hb-slider"
                data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
                <div class="d-flex align-items-center hb-slider-overlay">
                    <div class="container slider-content">
                        <div class="inner-slider-content">
                            <p class="subheading tc-secondary">#1 Gardener Services</p>
                            <h1 class="text-white">Change <span class="tc-secondary">Your Garden</span> To More Better
                                Design</h1>
                            <hr class="divider-heading">
                            <p class="text-white-tr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            <a class="btn-three hvr-float" type="button" href="/pricing-single.html">Get Started</a>
                            <a class="btn-transparent hvr-float" type="button" href="tel:123456789"><i
                                    class="fas fa-phone btn-icon-f"></i> 123 456 789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Block Section - End -->

    <!-- Stats Number Block Section - Start -->

    <div class="container stats-section ct-last">
        <div class="row inner-stats-sections bx-shadow">

            <!-- Stats Number - Left Title -->

            <div class="col-lg-4 col-sm-12 pad-50 sitebg-accent">
                <p class="subheading tc-secondary">Our Stats Number</p>
                <h3>Our Business Archivements</h3>
                <hr class="divider-heading">
            </div>

            <!-- Stats Number - Right Counter -->

            <div class="d-flex align-items-center col-lg-8 col-sm-12 bg-white p-0">
                <div class="row">

                    <!-- Counter Box Column -->

                    <div class="d-flex align-items-center col-lg-4 col-sm-6 counter-box box-hvr-primary pad-50">
                        <div class="counter-box-content">
                            <h2 class="counter-stats plus tc-secondary">256</h2>
                            <div class="counter-info">
                                <h5>Garden Created</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Counter Box Column -->

                    <div class="d-flex align-items-center col-lg-4 col-sm-6 counter-box box-hvr-primary pad-50">
                        <div class="counter-box-content">
                            <h2 class="counter-stats plus tc-secondary">55</h2>
                            <div class="counter-info">
                                <h5>Gardener Team</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Counter Box Column -->

                    <div class="d-flex align-items-center col-lg-4 col-sm-12 counter-box box-hvr-primary pad-50">
                        <div class="counter-box-content">
                            <h2 class="counter-stats years tc-secondary">15</h2>
                            <div class="counter-info">
                                <h5>Years Experience</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Number Block Section - End -->

    <!-- About Block Section - Start -->

    <div class="container about-section ct-last">
        <div class="row">

            <!-- About Block Section - Left Column -->

            <div class="col-lg-6 col-sm-12 column-left clearfix">
                <div class="about-image-left float-start">
                    <img class="hvr-float" src="<?= URLROOT ?>/landing/assets/images/vertical-images.jpg" alt="">
                </div>
                <div class="about-image-right float-start">
                    <img class="hvr-float" src="<?= URLROOT ?>/landing/assets/images/vertical-images.jpg" alt="">
                </div>
            </div>

            <!-- About Block Section - Right Column -->

            <div class="col-lg-6 col-sm-12 column-right">

                <!-- Heading Section -->

                <p class="subheading tc-secondary">Who We Are</p>
                <h2>We Are Creative Gardener & Landscaping Team Work</h2>
                <hr class="divider-heading">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                    mattis, pulvinar dapibus leo.</p>

                <!-- Icon List -->

                <div class="icon-list-left float-md-start">
                    <ul class="vertical-list">
                        <li><span><i class="fas fa-check-circle icon-list-f"></i>Team Certification</span></li>
                        <li><span><i class="fas fa-check-circle icon-list-f"></i>Best Choicing Worker</span></li>
                    </ul>
                </div>
                <div class="icon-list-right float-md-end">
                    <ul class="vertical-list">
                        <li><span><i class="fas fa-check-circle icon-list-f"></i>Great Tools Used</span></li>
                        <li><span><i class="fas fa-check-circle icon-list-f"></i>Legal Business & Company</span></li>
                    </ul>
                </div>

                <!-- Button -->

                <div class="d-flex align-items-center about-button">
                    <a class="btn-one hvr-float" type="button" href="/about-us.html">About Us</a>
                    <a class="play-button-small hvr-float" type="button" data-bs-toggle="modal"
                        data-bs-target="#aboutVideo"><i class="fas fa-play"></i></a>
                    <span>Learn More</span>
                </div>

                <!-- LightBox Video Modal -->

                <div class="modal fade" id="aboutVideo" tabindex="-1" aria-labelledby="lightboxVideo"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl ligtbox">
                        <div class="modal-content lightbox-video">
                            <iframe class="iframe-lightbox"
                                src="https://www.youtube.com/embed/1MTkZPys7mU?feature=oembed?playlist=1MTkZPys7mU&mute=0&autoplay=0&loop=no&controls=0&start=0&end="></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Block Section - End -->

    <!-- Services Block Section - Start -->

    <div class="container-full services-section"
        data-background="/<?= URLROOT ?>/landing/assets/images/background-1.jpg">
        <div class="container-full services-section-overlay">
            <div class="container ct-first">

                <!-- Heading Section -->

                <div class="container heading-left p-0">
                    <div class="row p-0">
                        <div class="col-lg-6 col-sm-12 column-left">
                            <p class="subheading tc-secondary">What We Can Do</p>
                            <h2>Our Gardener Services</h2>
                            <hr class="divider-heading">
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-lg-end justify-content-sm-start col-lg-6 col-sm-12 column-right">
                            <a class="btn-one hvr-float" type="button" href="/our-services.html">View All Services</a>
                        </div>
                    </div>
                </div>

                <!-- Services Grid -->

                <div class="row services-grid">

                    <!-- Service Box Column - First -->

                    <div class="col-lg-4 col-md-6 pad-15">
                        <div class="services-box bx-shadow"
                            data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
                            <div class="inner-services-box first pad-50">
                                <div class="icon-big-stack">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <div class="content-service-box">
                                    <h4>Garden & Landscaping Installation Service</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="btn-border hvr-float" type="button" href="/service-single.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Box Column -->

                    <div class="col-lg-4 col-md-6 pad-15">
                        <div class="services-box bx-shadow"
                            data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
                            <div class="inner-services-box pad-50">
                                <div class="icon-big-stack">
                                    <i class="fas fa-toolbox"></i>
                                </div>
                                <div class="content-service-box">
                                    <h4>Garden Repair & Re - Installation</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="btn-border hvr-float" type="button" href="/service-single.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Box Column -->

                    <div class="col-lg-4 col-md-12 pad-15">
                        <div class="services-box bx-shadow"
                            data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
                            <div class="inner-services-box pad-50">
                                <div class="icon-big-stack">
                                    <i class="fas fa-truck-pickup"></i>
                                </div>
                                <div class="content-service-box">
                                    <h4>Garden Tools & Colletion Selling</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="btn-border hvr-float" type="button" href="/service-single.html">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Block Section - End -->

    <!-- Promotion Block Section - Start -->

    <div class="container-full promotion-block-section"
        data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
        <div class="container-full pbs-overlay">
            <div class="container ct-first">
                <div class="row">

                    <!-- Left Column -->

                    <div class="d-flex align-items-center justify-content-center col-lg-6 column-left play-pbs">

                        <!-- Play Button -->

                        <a class="play-button-big hvr-grow" type="button" data-bs-toggle="modal"
                            data-bs-target="#promotionVideo"><i class="fas fa-play"></i></a>

                        <!-- LightBox Video Modal -->

                        <div class="modal fade" id="promotionVideo" tabindex="-1" aria-labelledby="lightboxVideo"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl ligtbox">
                                <div class="modal-content lightbox-video">
                                    <iframe class="iframe-lightbox"
                                        src="https://www.youtube.com/embed/1MTkZPys7mU?feature=oembed?playlist=1MTkZPys7mU&mute=0&autoplay=0&loop=no&controls=0&start=0&end="></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->

                    <div class="col-lg-6 column-right">
                        <p class="subheading tc-secondary">Get 30% Off For First</p>
                        <h2 class="text-white" t>We Give Great Offer For Your First Service With Us</h2>
                        <hr class="divider-heading">
                        <p class="text-white-tr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <a class="btn-three hvr-float" type="button" href="#">Get Discount Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Promotion Block Section - End -->

    <!-- How We Work Section - Start -->

    <div class="container ct-first">

        <!-- Heading Section -->

        <div class="container heading-center p-0">
            <p class="text-center subheading tc-secondary">How We Work</p>
            <h2 class="text-center">Easy Working Step Proccess To Get Our Services</h2>
            <hr class="divider-heading-center">
        </div>

        <!-- Grid Box Working Step - Start -->

        <div class="row">

            <!-- Working Step Box Column -->

            <div class="col-lg-3 col-md-6 pad-15">
                <div class="d-flex justify-content-center">
                    <h4 class="text-white heading-box">01.</h4>
                </div>
                <div class="hww-box-content box-hvr-primary hvr-float sitebg-accent">
                    <h4 class="text-center">Choose Our Services</h4>
                    <p class="text-center mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Working Step Box Column -->

            <div class="col-lg-3 col-md-6 pad-15">
                <div class="d-flex justify-content-center">
                    <h4 class="text-white heading-box">02.</h4>
                </div>
                <div class="hww-box-content box-hvr-primary hvr-float sitebg-accent">
                    <h4 class="text-center">Make a Quotation</h4>
                    <p class="text-center mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Working Step Box Column -->

            <div class="col-lg-3 col-md-6 pad-15">
                <div class="d-flex justify-content-center">
                    <h4 class="text-white heading-box">03.</h4>
                </div>
                <div class="hww-box-content box-hvr-primary hvr-float sitebg-accent">
                    <h4 class="text-center">Pricing Confirmation</h4>
                    <p class="text-center mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Working Step Box Column -->

            <div class="col-lg-3 col-md-6 pad-15">
                <div class="d-flex justify-content-center">
                    <h4 class="text-white heading-box">04.</h4>
                </div>
                <div class="hww-box-content box-hvr-primary hvr-float sitebg-accent">
                    <h4 class="text-center">Our Team Working</h4>
                    <p class="text-center mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>

        <!-- Grid Box Working Step - End -->

    </div>

    <!-- How We Work Section - End -->

    <!-- Why Choose Us Block Section - Start -->

    <div class="container-full sitebg-accent">
        <div class="container ct-first">
            <div class="row">

                <!-- Left Column -->

                <div class="col-lg-6 column-left">

                    <!-- Heading Section -->

                    <p class="subheading tc-secondary">Why Choose Us</p>
                    <h2>Perfect Choicing Gardener & Landscaping Team Work</h2>
                    <hr class="divider-heading">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo.</p>

                    <!-- Block Quote Text -->

                    <p class="block-quote bg-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

                    <!-- Skills Bar -->

                    <div class="skills-bar">
                        <div class="title-bar">
                            <h6>Team Working Skills</h6>
                            <span class="skills-percent subheading tc-secondary">98</span>
                        </div>
                        <div class="skills-bar-bg">
                            <div class="skills-bar-main"></div>
                        </div>
                    </div>

                    <!-- Vertical Icon List -->

                    <ul class="vertical-list wcs-list">
                        <li><span><i class="fas fa-check-circle icon-list-f"></i>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod </span></li>
                        <li><span><i class="fas fa-check-circle icon-list-f"></i>tempor incididunt ut labore et dolore
                                magna aliqua</span></li>
                    </ul>
                    <a class="btn-one hvr-float" type="button" href="/pricing-single.html">Get Started</a>
                    <a class="btn-transparent-one hvr-float" type="button" href="tel:123456789"><i
                            class="fas fa-phone btn-icon-f"></i> 123 456 789</a>
                </div>

                <!-- Right Column -->

                <div class="col-lg-6 column-right">
                    <div class="row row-cols-md-2 row-cols-1">

                        <!-- Box Content -->

                        <div class="col box-left">
                            <div class="icon-box box-hvr-primary pad-35 bg-white hvr-float">
                                <i class="fas fa-hard-hat icon-big"></i>
                                <h4>Best Choicing Worker</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <!-- Box Content -->

                        <div class="col box-right">
                            <div class="icon-box box-hvr-primary pad-35 bg-white hvr-float">
                                <i class="fas fa-drafting-compass icon-big"></i>
                                <h4>Best Designing Idea</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <!-- Box Content -->

                        <div class="col box-left">
                            <div class="icon-box box-hvr-primary pad-35 bg-white hvr-float">
                                <i class="fas fa-tools icon-big"></i>
                                <h4>Completely Great Tools</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <!-- Box Content -->

                        <div class="col box-right">
                            <div class="icon-box box-hvr-primary pad-35 bg-white hvr-float">
                                <i class="fas fa-calendar-check icon-big"></i>
                                <h4>Deadline Time Consistency</h4>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Block Section - End -->

    <!-- Pricing Block Section - Start -->

    <div class="container ct-first">

        <!-- Heading Section -->

        <div class="container heading-center p-0">
            <p class="text-center subheading tc-secondary">Our Pricing</p>
            <h2 class="text-center">Our Recomendation Pricing Package Service</h2>
            <hr class="divider-heading-center">
        </div>
        <div class="row">

            <!-- Pricing Box -->

            <div class="col-lg-3 col-md-6 col-12 pad-15">
                <div class="pricing-box pad-35 hvr-shadow">
                    <div class="heading-pb">
                        <h5 class="heading-title-pb">Starter</h5>
                        <h3 class="tc-secondary">$35 <span class="text-small">/ One Time</span></h3>
                    </div>
                    <div class="pricing-features">
                        <ul class="vertical-list">
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Garden Designing</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Consultation Service</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Max 35 Mils</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Great Materials</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Give More Bonusses</span></li>
                        </ul>
                    </div>
                    <a class="btn-one hvr-float" type="button" href="/pricing-single.html">Get a Quote</a>
                </div>
            </div>

            <!-- Pricing Box -->

            <div class="col-lg-3 col-md-6 col-12 pad-15">
                <div class="pricing-box features pad-35 hvr-shadow">
                    <span class="features-badge">Most Popular</span>
                    <div class="heading-pb">
                        <h5 class="heading-title-pb">Installation</h5>
                        <h3 class="tc-secondary">$199 <span class="text-small text-white-tr">/ Garden Install</span>
                        </h3>
                    </div>
                    <div class="pricing-features">
                        <ul class="vertical-list">
                            <li><span class="text-white-tr"><i class="fas fa-check-circle icon-list-f"></i>Garden
                                    Designing</span></li>
                            <li><span class="text-white-tr"><i class="fas fa-check-circle icon-list-f"></i>Consultation
                                    Service</span></li>
                            <li><span class="text-white-tr"><i class="fas fa-check-circle icon-list-f"></i>Max 35
                                    Mils</span></li>
                            <li><span class="text-white-tr"><i class="fas fa-check-circle icon-list-f"></i>Great
                                    Materials</span></li>
                            <li><span class="text-white-tr"><i class="fas fa-check-circle icon-list-f"></i>Give More
                                    Bonusses</span></li>
                        </ul>
                    </div>
                    <a class="btn-three hvr-float" type="button" href="/pricing-single.html">Get a Quote</a>
                </div>
            </div>

            <!-- Pricing Box -->

            <div class="col-lg-3 col-md-6 col-12 pad-15">
                <div class="pricing-box pad-35 hvr-shadow">
                    <div class="heading-pb">
                        <h5 class="heading-title-pb">Maintanence</h5>
                        <h3 class="tc-secondary">$65 <span class="text-small">/ Each Month</span></h3>
                    </div>
                    <div class="pricing-features">
                        <ul class="vertical-list">
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Garden Designing</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Consultation Service</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Max 35 Mils</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Great Materials</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Give More Bonusses</span></li>
                        </ul>
                    </div>
                    <a class="btn-one hvr-float" type="button" href="/pricing-single.html">Get a Quote</a>
                </div>
            </div>

            <!-- Pricing Box -->

            <div class="col-lg-3 col-md-6 col-12 pad-15">
                <div class="pricing-box pad-35 hvr-shadow">
                    <div class="heading-pb">
                        <h5 class="heading-title-pb">Landscaping</h5>
                        <h3 class="tc-secondary">$2,500 <span class="text-small">/ Services</span></h3>
                    </div>
                    <div class="pricing-features">
                        <ul class="vertical-list">
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Garden Designing</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Consultation Service</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Max 35 Mils</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Great Materials</span></li>
                            <li><span><i class="fas fa-check-circle icon-list-f"></i>Give More Bonusses</span></li>
                        </ul>
                    </div>
                    <a class="btn-one hvr-float" type="button" href="/pricing-single.html">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Block Section - End -->

    <!-- Quote Block Section - Start -->

    <div class="container-full quote-block"
        data-background="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg">
        <div class="container-full quote-block-overlay">
            <div class="container p-0">
                <div class="row">

                    <!-- Column Left -->

                    <div class="col-lg-6 column-left">

                        <!-- Images -->

                        <div class="d-flex align-items-bottom justify-content-center image-quote">
                            <img src="<?= URLROOT ?>/landing/assets/images/vertical-images.jpg" alt="">
                        </div>
                    </div>

                    <!-- Right Column -->

                    <div class="col-lg-6 column-right">

                        <!-- Quote Box -->

                        <div class="d-flex align-items-center quote-box pad-50">
                            <div class="inner-quote-box">
                                <i class="fas fa-quote-left icon-big"></i>
                                <h2 class="quote-big-text text-white">" The Great Garden Is Perfect For Your Best Living
                                    Family "</h2>
                                <hr class="divider-heading">
                                <div class="quote-info">
                                    <h4 class="text-white">Mr. John Doe</h4>
                                    <p class="subheading tc-secondary">Business Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Block Section - End -->

    <!-- Testimonials Block Section - Start -->

    <div class="container-full sitebg-accent">
        <div class="container ct-first testimonials-block-section">

            <!-- Heading Section -->

            <div class="container heading-left p-0">
                <p class="subheading tc-secondary">Testimonials Client</p>
                <h2>Our Clients Feedback</h2>
                <hr class="divider-heading">
            </div>
            <div class="testimonials-slider owl-carousel owl-theme">

                <!-- Testimonials Box -->

                <div class="testimonials-box box-hvr-primary bg-white pad-35">
                    <i class="fas fa-quote-left icon-medium"></i>
                    <p class="testimonials-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus, luctus nec ullamcorper mattis.</p>
                    <div class="d-flex align-items-center client-info">
                        <div class="client-image">
                            <img src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt="">
                        </div>
                        <div class="client-text">
                            <h6>Mr. John Doe</h6>
                            <p class="subheading tc-secondary">House Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Box -->

                <div class="testimonials-box box-hvr-primary bg-white pad-35">
                    <i class="fas fa-quote-left icon-medium"></i>
                    <p class="testimonials-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus, luctus nec ullamcorper mattis.</p>
                    <div class="d-flex align-items-center client-info">
                        <div class="client-image">
                            <img src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt="">
                        </div>
                        <div class="client-text">
                            <h6>Mr. John Doe</h6>
                            <p class="subheading tc-secondary">House Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Box -->

                <div class="testimonials-box box-hvr-primary bg-white pad-35">
                    <i class="fas fa-quote-left icon-medium"></i>
                    <p class="testimonials-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus, luctus nec ullamcorper mattis.</p>
                    <div class="d-flex align-items-center client-info">
                        <div class="client-image">
                            <img src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt="">
                        </div>
                        <div class="client-text">
                            <h6>Mr. John Doe</h6>
                            <p class="subheading tc-secondary">House Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Box -->

                <div class="testimonials-box box-hvr-primary bg-white pad-35">
                    <i class="fas fa-quote-left icon-medium"></i>
                    <p class="testimonials-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                        tellus, luctus nec ullamcorper mattis.</p>
                    <div class="d-flex align-items-center client-info">
                        <div class="client-image">
                            <img src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt="">
                        </div>
                        <div class="client-text">
                            <h6>Mr. John Doe</h6>
                            <p class="subheading tc-secondary">House Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Block Section - End -->

    <!-- Partner Logo Block - Start -->

    <div class="container ct-last">
        <div class="logo-block-section pad-50 bg-white bx-shadow">
            <div class="logo-carousel owl-carousel owl-theme">
                <div class="partner-logo">
                    <img src="<?= URLROOT ?>/landing/assets/images/logoipsum-logo-44.png" alt="">
                </div>
                <div class="partner-logo">
                    <img src="<?= URLROOT ?>/landing/assets/images/logoipsum-logo-45.png" alt="">
                </div>
                <div class="partner-logo">
                    <img src="<?= URLROOT ?>/landing/assets/images/logoipsum-logo-47.png" alt="">
                </div>
                <div class="partner-logo">
                    <img src="<?= URLROOT ?>/landing/assets/images/logoipsum-logo-48.png" alt="">
                </div>
                <div class="partner-logo">
                    <img src="<?= URLROOT ?>/landing/assets/images/logoipsum-logo-49.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Partner Logo Block - End -->

    <!-- Blog Post Section - Start -->

    <div class="container ct-last">

        <!-- Heading Section -->

        <div class="container heading-center p-0">
            <p class="text-center subheading tc-secondary">Blog Post</p>
            <h2 class="text-center">Our Blog Content</h2>
            <hr class="divider-heading-center">
        </div>

        <!-- Blog Grid Box -->

        <div class="row">

            <!-- Blog Grid -->

            <div class="col-lg-4 col-md-6 pad-15">
                <div class="blog-grid">
                    <div class="blog-grid-content box-hvr-primary pad-35 sitebg-accent">
                        <div class="categories-thumbnail">
                            <a href="#">Tips & Tricks</a>
                        </div>
                        <div class="image-thumbnail"><img
                                src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt=""></div>
                        <a href="#"><span class="text-small"><i class="fas fa-calendar-check icon-list-f"></i>12 August
                                2022</span></a>
                        <h4><a href="/single-post.html">How To Get a Great Garden House</a></h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis.</p>
                        <hr class="divider">
                        <a class="btn-one hvr-float" type="button" href="/single-post.html">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Blog Grid -->

            <div class="col-lg-4 col-md-6 pad-15">
                <div class="blog-grid">
                    <div class="blog-grid-content box-hvr-primary pad-35 sitebg-accent">
                        <div class="categories-thumbnail">
                            <a href="#">Tips & Tricks</a>
                        </div>
                        <div class="image-thumbnail"><img
                                src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt=""></div>
                        <a href="#"><span class="text-small"><i class="fas fa-calendar-check icon-list-f"></i>12 August
                                2022</span></a>
                        <h4><a href="/single-post.html">Tips For Maintanence The Garden</a></h4>
                        <p class="mb-0" class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                            tellus, luctus nec ullamcorper mattis.</p>
                        <hr class="divider">
                        <a class="btn-one hvr-float" type="button" href="/single-post.html">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Blog Grid -->

            <div class="col-lg-4 col-md-12 pad-15">
                <div class="blog-grid">
                    <div class="blog-grid-content box-hvr-primary pad-35 sitebg-accent">
                        <div class="categories-thumbnail">
                            <a href="#">Tips & Tricks</a>
                        </div>
                        <div class="image-thumbnail"><img
                                src="<?= URLROOT ?>/landing/assets/images/horizontal-images.jpg" alt=""></div>
                        <a href="#"><span class="text-small"><i class="fas fa-calendar-check icon-list-f"></i>12 August
                                2022</span></a>
                        <h4><a href="/single-post.html">Garden Maintanence For Great Time</a></h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis.</p>
                        <hr class="divider">
                        <a class="btn-one hvr-float" type="button" href="/single-post.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Post Section - End -->

    <!-- Footer Block Section - Start -->

    <div class="container-full sitebg-accent">
        <div class="container ct-footer">

            <!-- Footer Row 1 -->

            <div class="row ft-row-top">

                <!-- Brand Information -->

                <div class="col-lg-6 first-ft-col">
                    <div class="footer-logo"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Ut elit tellus.</p>

                    <!-- Subscribe Form -->

                    <form class="subscribe-form">
                        <input type="email" class="form-control form-primary" id="subscribeForm"
                            placeholder="Email Address">
                        <button class="btn-one" type="submit">Subscribe Now</button>
                    </form>
                </div>

                <!-- Quick Links -->

                <div class="col-lg-3">
                    <h4>Qucik Links</h4>
                    <ul class="vertical-list">
                        <li><a href="/"><i class="fas fa-caret-right icon-list-f"></i>Homepage</a></li>
                        <li><a href="/about-us.html"><i class="fas fa-caret-right icon-list-f"></i>About Us</a></li>
                        <li><a href="/our-services.html"><i class="fas fa-caret-right icon-list-f"></i>Our Services</a>
                        </li>
                        <li><a href="/our-pricing.html"><i class="fas fa-caret-right icon-list-f"></i>Our Pricing</a>
                        </li>
                        <li><a href="/our-gallery.html"><i class="fas fa-caret-right icon-list-f"></i>Latest Working</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Information -->

                <div class="col-lg-3">
                    <h4>Lets Get In Touch</h4>
                    <ul class="vertical-list">
                        <li>
                            <p>Lumbung Hidup St. 28 East Java Madiun City</p>
                        </li>
                        <li><a href="#"><i class="fas fa-envelope icon-list-f"></i>Hello@Contact.co</a></li>
                        <li><a href="tel:123456789"><i class="fas fa-square-phone icon-list-f"></i>( +62 ) 123 456
                                789</a></li>
                    </ul>
                </div>
            </div>
            <hr class="divider">

            <!-- Footer Row 2 -->

            <div class="row ft-row-bottom">

                <!-- Credit Footer -->

                <div class="d-flex align-items-center col-md-6 p-0">
                    <p class="subheading mb-0">Allright Reserved - By <span class="subheading tc-secondary mb-0"><a
                                href="#">Wirastudio Creative</a></span></p>
                </div>

                <!-- Footer Social Info -->

                <div class="d-flex align-items-center justify-content-md-end justify-content-center col-md-6 p-0">
                    <ul class="social-info">
                        <li><a href="#"><span class="icon-small-stack hvr-float"><i
                                        class="fab fa-facebook"></i></span></a></li>
                        <li><a href="#"><span class="icon-small-stack hvr-float"><i
                                        class="fab fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="icon-small-stack hvr-float"><i
                                        class="fab fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span class="icon-small-stack hvr-float"><i
                                        class="fab fa-youtube"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Block Section - End -->

    <!-- Javascript -->
    <script src="<?= URLROOT ?>/landing/assets/js/bootstrap.min.js"></script>
    <script src="<?= URLROOT ?>/landing/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= URLROOT ?>/landing/assets/js/jquery.min.js"></script>
    <script src="<?= URLROOT ?>/landing/assets/js/main-script.js"></script>
    <script src="<?= URLROOT ?>/landing/assets/js/owl-script.js"></script>
    <script src="<?= URLROOT ?>/landing/assets/js/owl.carousel.min.js"></script>
</body>

</html>