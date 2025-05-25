<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>MA Darul Falah</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('digimedia/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('digimedia/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('digimedia/assets/css/templatemo-digimedia-v1.css') }}">
    <link rel="stylesheet" href="{{ asset('digimedia/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('digimedia/assets/css/owl.css') }}">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Pre-header Starts -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-7">
                    <ul class="info">
                        <li><a href="#"><i class="fa fa-envelope"></i>darulfalah_sirahan@yahoo.co.id</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>02914277748</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-4 col-5">
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/ma.darulfalahsrh"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/madafasirahan"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/@DAFAMedia"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-header End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ asset('#') }}" class="logo">
                            <img src="{{ asset('kopma.png') }}" alt="" style="width: 200px; height: auto;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                            <li class="scroll-to-section"><a href="/ppdb/create" class="{{ Request::is('ppdb/create') ? 'active' : '' }}">PPDB</a></li>
                            {{-- <li class="scroll-to-section"><a href="/ppdb/search" class="{{ Request::is('ppdb/search') ? 'active' : '' }}">Bukti Pendaftaran</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="#blog">Akademik</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="#contact">Program Unggulan</a></li>
                            <li class="scroll-to-section"><a href="#contact">Kesiswaan</a></li> --}}
                            <li class="scroll-to-section">
                                <div class="border-first-button"><a href="/login">Login</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    {{-- <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>SELAMAT DATANG</h6>
                                        <h2>MADRASAH ALIYAH DARUL FALAH</h2>
                                        <p style="text-align: justify;"><b>MA Darul Falah</b> merupakan salah satu unit pelaksanaan teknis dibidang
                                            pendidikan berazazkan islami ikut serta dalam mengemban tugas dalam
                                            mencerdaskan bangsa. MA Darul Falah senantiasa berusaha untuk memperbaiki
                                            diri dalam peningkatan mutu pendidikan dan mutu pelayanan. Diantara
                                            hasil-hasil pendidikan yang ingin dicapai oleh MA Darul Falah sirahan adalah
                                            terbentuknya manusia-manusia yang memiliki keilmuan yang cukup dengan
                                            didasari keimanan yang kokoh dan keahlian yang memadai serta memiliki
                                            akhlaqul karimah. Oleh karena itu MA Darul Falah Sirahan menentukan visinya
                                            “Membentuk Insan yang Unggul dalam Keimanan, Keilmuan, Berkeahlian dan
                                            Berakhlak Mulia”.</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            <a href="#">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="sekolah.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Our Services</h6>
                        <h4>What Our Agency <em>Provides</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/service-icon-01.png') }}" alt="">
                                                </span>
                                                Apartments
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/service-icon-02.png') }}" alt="">
                                                </span>
                                                Food &amp; Life
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/service-icon-03.png') }}" alt="">
                                                </span>
                                                Cars
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/service-icon-04.png') }}" alt="">
                                                </span>
                                                Shopping
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/service-icon-01.png') }}" alt="">
                                                </span>
                                                Traveling
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>SEO Analysis &amp; Daily Reports</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt ut
                                                                    labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span> <span><i
                                                                            class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span> <span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('digimedia/assets/images/services-image.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Healthy Food &amp; Life</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt ut
                                                                    labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span> <span><i
                                                                            class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span> <span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('digimedia/assets/images/services-image-02.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Car Re-search &amp; Transport</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt ut
                                                                    labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span> <span><i
                                                                            class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span> <span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('digimedia/assets/images/services-image-03.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Online Shopping &amp; Tracking ID</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt ut
                                                                    labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span> <span><i
                                                                            class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span> <span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('digimedia/assets/images/services-image-04.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Enjoy &amp; Travel</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt ut
                                                                    labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span> <span><i
                                                                            class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO
                                                                        Analysis</span> <span><i
                                                                            class="fa fa-check"></i> Optimized
                                                                        Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('digimedia/assets/images/services-image.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="free-quote" class="free-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Get Your Free Quote</h6>
                        <h4>Grow With Us Now</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <input type="web" name="web" class="website" placeholder="Your website URL..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Email Address..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <button type="submit" class="main-button">Get Quote Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Our Portofolio</h6>
                        <h4>See Our Recent <em>Projects</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('digimedia/assets/images/portfolio-01.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('digimedia/assets/images/portfolio-01.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('digimedia/assets/images/portfolio-02.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('digimedia/assets/images/portfolio-03.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('digimedia/assets/images/portfolio-04.jpg') }}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-heading">
                        <h6>Recent News</h6>
                        <h4>Check Our Blog <em>Posts</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-post">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('digimedia/assets/images/blog-post-01.jpg') }}" alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category">SEO Analysis</span>
                            <span class="date">03 August 2021</span>
                            <a href="#">
                                <h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
                                    Eiusmod Tempor Incididunt</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis
                                tempor incididunt ut labore.</p>
                            <span class="author">
                                <img src="{{ asset('digimedia/assets/images/author-post.jpg') }}" alt="">By: Andrea
                                Mentuzi
                            </span>
                            <div class="border-first-button"><a href="#">Discover More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('digimedia/assets/images/blog-post-02.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('digimedia/assets/images/blog-post-03.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item last-post-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ asset('digimedia/assets/images/blog-post-04.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Contact Us</h6>
                        <h4>Get In Touch With Us <em>Now</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="{{ asset('digimedia/assets/images/contact-dec.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div id="map">
                                    <iframe
                                        src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        width="100%" height="636px" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/phone-icon.png') }}" alt="">
                                                    <a href="#">010-020-0340</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/email-icon.png') }}" alt="">
                                                    <a href="#">our@email.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('digimedia/assets/images/location-icon.png') }}" alt="">
                                                    <a href="#">123 Rio de Janeiro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                            </fieldset>
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                            </fieldset>
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <footer style="background-color: #1c1c1c; color: #fff; padding: 50px 0; font-size: 14px;">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Logo/Arab -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="{{ asset('white.png') }}" alt="" style="width: 70%; height: auto; display: block; margin: 0 auto;">
                    <p style="font-style: italic; margin-top: 10px;">
                        Teguh dalam Aqidah, Cerdas dalam Berpikir, dan Peka Terhadap Perkembangan
                    </p>
                </div>

                <!-- Kolom 2: Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 style="border-bottom: 2px solid #2ecc71; padding-bottom: 10px;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0; margin-top: 20px;">
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Info Kurikulum</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Info Buku-Buku Umum</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Info Buku PAI & Bahasa Arab</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Info Regulasi Madrasah</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Info Juknis & Pedoman</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Lembaga Terkait -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 style="border-bottom: 2px solid #2ecc71; padding-bottom: 10px;">Lembaga Terkait</h4>
                    <ul style="list-style: none; padding: 0; margin-top: 20px;">
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">PAUD KB Mutiara Hati</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">RA Masyithoh</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">MI Darul Falah</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">MTs Darul Falah</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Ponpes</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Hubungi Kami -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 style="border-bottom: 2px solid #2ecc71; padding-bottom: 10px;">Hubungi Kami</h4>
                    <ul style="list-style: none; padding: 0; margin-top: 20px;">
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">MA Darul Falah</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Jln. Raya Tayu – Jepara Km.17</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Ds. Sirahan Kec. Cluwak Kab. Pati Prov.Jawa Tengah</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Phone: 02914277748</a></li>
                        <li><a href="#" style="color: #ffffff; text-decoration: none;">Email: darulfalah_sirahan@yahoo.co.id</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 30px; font-size: 13px; color: #ffffff;">
                    Copyright © 2025 MA Darul Falah.
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- JavaScript Files -->
    <script src="{{ asset('digimedia/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('digimedia/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('digimedia/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('digimedia/assets/js/animation.js') }}"></script>
    <script src="{{ asset('digimedia/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('digimedia/assets/js/custom.js') }}"></script>


</body>

</html>
