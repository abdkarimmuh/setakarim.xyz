@extends('layouts.master')

@section('content')
@include('patrials.topnav')

<!--START HOME-->
<section class="home-bg section h-100vh" id="home">
    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-white text-center">
                            <h4>Hello & Welcome</h4>
                            <h2 class="header_title mb-0 mt-3">I Am <span class="element font-weight-bold"
                                    data-elements="Karim.,A Designer.,A Devloper."></span></h2>
                            <ul class="social_home list-unstyled text-center pt-4">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-dribbble"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a>
                                </li>
                            </ul>
                            <div class="header_btn">
                                <a href="#" class="btn btn-outline-custom btn-rounded mt-4">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll_down">
        <a href="#about" class="scroll">
            <i class="mbri-arrow-down text-white"></i>
        </a>
    </div>
</section>
<!--END HOME-->

<!-- START ABOUT -->
<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">About </span>Me</h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">I am a Developer and UI/UX Designer — based in Depok.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div>
                    <img src="images/sign.png" alt="" class="img-fluid mx-auto d-block">
                </div>
                <div class="text-center about-detail mx-auto mt-5">
                    <h3 class="mb-3">Hello! <span class="font-weight-bold text-custom">I'M {{ $about['name'] }}.</span>
                    </h3>
                    <ul class="mb-0 list-inline text-center about-work">
                        <li class="list-inline-item mr-0 text-muted">UI/UX Designer</li>
                        <li class="list-inline-item mr-0 text-muted">Web Developer</li>
                        <li class="list-inline-item mr-0 text-muted">Mobile Devloper</li>
                    </ul>
                    <p class="text-muted mt-3">{{ $about['desc'] }}</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($skills as $item)
            <div class="col-md-6">
                <div class="progress-bars skill-custom">
                    <div class="clearfix">
                        <div class="text-dark font-weight-bold float-left">{{ $item['name'] }}</div>
                        <div class="text-muted float-right">{{ $item['percent'] }}%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ $item['percent'] }}%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END ABOUT -->

<!-- START SERVICES -->
<section class="section bg-light" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Our <span class="font-weight-bold">Services</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            @foreach ($services as $item)
            <div class="col-lg-4 mt-4">
                <div class="lan_box_ser text-center rounded p-4 mt-3">
                    <div class="ser_icon">
                        <i class="{{ $item['icon'] }}"></i>
                    </div>
                    <div class="service-content mt-4">
                        <h5 class="font-weight-bold">{{ $item['name'] }}</h5>
                        <p class="mt-3 text-muted mb-0">{{ $item['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END SERVICES -->

<!-- END FUNFACTS -->
<section class="section bg-funfact">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row" id="counter">
            @foreach ($funfacts as $item)
            <div class="col-lg-3">
                <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                    <div class="lan_fun_icon mb-3">
                        <i class="{{ $item['icon'] }} h1"></i>
                    </div>
                    <h1 class="lan_fun_value mb-1" data-count="{{ $item['count'] }}">0</h1>
                    <p class="lan_fun_name mb-0">{{ $item['name'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- START FUNFACTS -->

<!-- START EXP. & EDU. -->
<section class="section" id="education">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">Education & Experiance</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-5">
                <div class="cv_edu_exp mt-3">
                    @foreach ($educations as $item)
                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">{{ $item['year'] }}</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>{{ $item['name'] }}</h4>
                                    <p class="cv_desc mb-0">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <div class="cv_edu_exp mt-3">
                    @foreach ($experiences as $item)
                    <div class="cv_edu_exp_box mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cv_edu_exp_year font-weight-bold text-custom position-relative">{{ $item['year'] }}</div>
                                <div class="cb_edu_exp_detail">
                                    <h4>{{ $item['name'] }}</h4>
                                    <p class="cv_desc mb-0">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END EXP. & EDU. -->

<!-- START CTA -->
<section class="section bg-cta">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-white">
                    <h1>I Am Available For Freelancer.</h1>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-custom">Hire Me!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CTA -->

<!--START WORK -->
<section class="section text-center" id="work">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Our <span class="font-weight-bold">Work</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <ul class="text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".work">Work</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5 work-filter">
            <div class="col-lg-4 webdesign wordpress">
                <div class="work_img_box rounded">
                    <a class="img-zoom" href="images/works/1.jpg"></a>
                    <div class="work_images">
                        <img src="images/works/1.jpg" alt="image" class="img-fluid mx-auto d-block">
                        <div class="work_overlay">
                            <h4 class="mb-0">UI Elements, Icons</h4>
                            <h6 class="mb-0">Studio &amp; Art</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 seo webdesign">
                <div class="work_img_box rounded">
                    <a class="img-zoom" href="images/works/2.jpg"></a>
                    <div class="work_images">
                        <img src="images/works/2.jpg" alt="image" class="img-fluid mx-auto d-block">
                        <div class="work_overlay">
                            <h4>Illustrations</h4>
                            <h6>Creative &amp; Art</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 work">
                <div class="work_img_box rounded">
                    <a class="img-zoom" href="images/works/3.jpg"></a>
                    <div class="work_images">
                        <img src="images/works/3.jpg" alt="image" class="img-fluid mx-auto d-block">
                        <div class="work_overlay">
                            <h4>Media, Icons</h4>
                            <h6>Open Imagination</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 seo webdesign">
                <div class="work_img_box rounded">
                    <a class="img-zoom" href="images/works/4.jpg"></a>
                    <div class="work_images">
                        <img src="images/works/4.jpg" alt="image" class="img-fluid mx-auto d-block">
                        <div class="work_overlay">
                            <h4>Graphics, UI Elements</h4>
                            <h6>Locked Steel Gate</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 seo work">
                <div class="work_img_box rounded">
                    <a class="img-zoom" href="images/works/5.jpg"></a>
                    <div class="work_images">
                        <img src="images/works/5.jpg" alt="image" class="img-fluid mx-auto d-block">
                        <div class="work_overlay">
                            <h4>Illustrations, Graphics</h4>
                            <h6>Mac Sunglasses</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wordpress">
                <div class="work_img_box rounded">
                    <a class="img-zoom" href="images/works/6.jpg"></a>
                    <div class="work_images">
                        <img src="images/works/6.jpg" alt="image" class="img-fluid mx-auto d-block">
                        <div class="work_overlay">
                            <h4>UI Elements, Media</h4>
                            <h6>Backpack Contents</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END WORK -->

<!-- START CLIENT -->
<section class="section bg-client" id="client">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto text-white section-main-title">
                    <h2>Our <span class="font-weight-bold">Client</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="mx-auto mt-2">It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div id="owl-demo" class="owl-carousel">
                    <div class="text-white people_says text-center">
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">Kirk McFall</p>
                            <p class="h6">Google</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy
                                text is the 'Lorem Ipsum', which is said originated the 16th century. This
                                ancient dummy text is also incomprehensible, of most European in Latin script."
                            </p>
                        </div>
                    </div>
                    <div class="text-white people_says text-center">
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">Edward Evans</p>
                            <p class="h6">Google</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy
                                text is the 'Lorem Ipsum', which is said originated the 16th century. This
                                ancient dummy text is also incomprehensible, of most European in Latin script."
                            </p>
                        </div>
                    </div>
                    <div class="text-white people_says text-center">
                        <div class="people_icon">
                            <i class="mbri-user"></i>
                        </div>
                        <div class="people_review_box mt-4">
                            <p class="people_name text-white h5 font-weight-bold mb-0">Antonio Hernandez</p>
                            <p class="h6">Google</p>
                            <p class="people_review text-white mx-auto pt-3 mb-0">" The most well-known dummy
                                text is the 'Lorem Ipsum', which is said originated the 16th century. This
                                ancient dummy text is also incomprehensible, of most European in Latin script."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CLIENT -->

<!-- START GREAT PEOPLE -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Trusted by <span class="font-weight-bold">Great People</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-2 mt-3">
                <div class="logo_img">
                    <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <div class="col-lg-2 mt-3">
                <div class="logo_img">
                    <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <div class="col-lg-2 mt-3">
                <div class="logo_img">
                    <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <div class="col-lg-2 mt-3">
                <div class="logo_img">
                    <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <div class="col-lg-2 mt-3">
                <div class="logo_img">
                    <img src="images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <div class="col-lg-2 mt-3">
                <div class="logo_img">
                    <img src="images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END GREAT PEOPLE -->

<!-- START SUBCRIBE  -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2><span class="font-weight-bold">Subscribe</span> to Newsletter </h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div class="text-center subcribe-newslatter mt-4">
                    <form class="mx-auto position-relative">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="btn btn-custom">Subcribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SUBCRIBE -->

<!-- START BLOG -->
<section class="section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Our <span class="font-weight-bold">Blog</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-4 mt-3">
                <div class="text-center rounded bg-white p-2">
                    <div class="img_blog">
                        <img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                    </div>
                    <div class="content_blog pt-3 pb-3">
                        <div>
                            <h5 class="font-weight-bold mb-0"><a href="blog-sidebar.html" class="text-dark">There are
                                    many variations</a></h5>
                        </div>
                        <div class="mt-3">
                            <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Lifestyle</a>
                            </p>
                            <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#"
                                    class="text-dark font-weight-bold">By Envato</a></p>
                            <p class="mt-3 desc_blog pl-2 pr-2 text-muted">Sit sagittis vulputate laoreet
                                sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.
                            </p>
                            <p class="h6 mb-0"><a href="blog-sidebar.html" class="text-muted font-weight-bold">Read
                                    More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="text-center rounded bg-white p-2">
                    <div class="blog_video position-relative">
                        <div class="img_blog">
                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                        </div>
                        <a href="http://vimeo.com/99025203" class="blog_play"><i class="mdi mdi-play"></i></a>
                    </div>
                    <div class="content_blog pt-3 pb-3">
                        <div>
                            <h5 class="font-weight-bold mb-0"><a href="blog-sidebar.html" class="text-dark">Contrary to
                                    popular belief</a></h5>
                        </div>
                        <div class="mt-3">
                            <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Travel</a></p>
                            <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#"
                                    class="text-dark font-weight-bold">By Envato</a></p>
                            <p class="mt-3 desc_blog pl-2 pr-2 text-muted">Sit sagittis vulputate laoreet
                                sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.
                            </p>
                            <p class="h6 mb-0"><a href="blog-sidebar.html" class="text-muted font-weight-bold">Read
                                    More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="text-center rounded bg-white p-2">
                    <div class="img_blog">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/blog/blog-3.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/blog/blog-4.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/blog/blog-5.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="content_blog pt-3 pb-3">
                        <div>
                            <h5 class="font-weight-bold mb-0"><a href="blog-sidebar.html" class="text-dark">Lorem Ipsum
                                    is not simply</a></h5>
                        </div>
                        <div class="mt-3">
                            <p class="font-weight-bold h6 mb-3"><a href="#" class="text-custom">Food &
                                    Drinks</a></p>
                            <p class="h6 text-muted date_blog mb-0">13 February 2018 <a href="#"
                                    class="text-dark font-weight-bold">By Envato</a></p>
                            <p class="mt-3 desc_blog pl-2 pr-2 text-muted">Sit sagittis vulputate laoreet
                                sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.
                            </p>
                            <p class="h6 mb-0"><a href="blog-sidebar.html" class="text-muted font-weight-bold">Read
                                    More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BLOG -->

<!-- CONTACT FORM START-->
<section class="section " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center mx-auto section-main-title">
                    <h2>Get In <span class="font-weight-bold">Tuch</span></h2>
                    <div class="main-title-border">
                        <i class="mdi mdi-asterisk"></i>
                    </div>
                    <p class="text-muted mx-auto mt-2">It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-4">
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-mobile2 text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Call Us On</p>
                        <p class="text-muted">{{ $about['phone'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-letter text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Email Us At</p>
                        <p class="text-muted">{{ $about['mail'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div>
                        <i class="mbri-pin text-custom h2"></i>
                    </div>
                    <div class="mt-2">
                        <p class="mb-0 font-weight-bold">Visit Office</p>
                        <p class="text-muted">{{ $about['address'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact_form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your name..." required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <label for="email" class="font-weight-bold">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Your email..." required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="subject" class="font-weight-bold">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject.."
                                        required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <label for="comments" class="font-weight-bold">Message</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control"
                                        placeholder="Your message..." required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" class="btn btn-custom" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT FORM END-->
@endsection