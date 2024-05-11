<!DOCTYPE html>
<html lang="en">

<head>

    <title>heroTV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords"
        content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">HeroTV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#section-home" class="nav-link">الرئيسية</a></li>
                    <li class="nav-item active"><a href="#section-home" class="nav-link">تحميل التطبيق</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover ftco-slant" style="background-image: url(images/bg_3.jpg);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                <div class="col-md-10">
                    <h1 class="ftco-heading ftco-animate">اهلا بك في اكبر تطبيق للبث المباشر</h1>
                    <h2 class="h5 ftco-subheading mb-5 ftco-animate">HeroTV<a href="#">يمكنك تحميل
                            التطبيق</a></h2>
                    <p><a href="https://free-template.co/" target="_blank" class="btn btn-primary ftco-animate">
                            من هنا</a></p>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section bg-light  ftco-slant ftco-slant-white" id="section-features">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">الفئات لدينا</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">يمكنك الان متابعة القنوات المفلضلة لديك</p>
                        </div>
                    </div>
                </div>
                @foreach ($categores as $categore)
                    <div class="col-lg-4 col-md-6">
                        <div class="media d-block mb-4 text-center ftco-media p-md-5 p-4 ftco-animate">
                            <div class="ftco-icon mb-3"><img width="50px" height="50px"
                                    src="{{ $categore->image }}" /></div>
                            <div class="media-body">
                                <h5 class="mt-0">{{ $categore->name }}</h5>
                                <p class="mb-5"></p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">المزيد</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-slant ftco-slant-white" id="section-counter">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center ftco-animate">
                    <h2 class="text-uppercase ftco-uppercase">Fun Facts</h2>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="34146">0</span>
                        <span class="ftco-label">Lines of Codes</span>
                    </div>
                </div>
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="1239">0</span>
                        <span class="ftco-label">Pizza Consume</span>
                    </div>
                </div>
                <div class="col-md ftco-animate">
                    <div class="ftco-counter text-center">
                        <span class="ftco-number" data-number="124">0</span>
                        <span class="ftco-label">Number of Clients</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="ftco-footer ftco-bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">About</a></li>
                                    <li><a href="#" class="py-2 d-block">Jobs</a></li>
                                    <li><a href="#" class="py-2 d-block">Press</a></li>
                                    <li><a href="#" class="py-2 d-block">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Communities</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Support</a></li>
                                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                                    <li><a href="#" class="py-2 d-block">Good Template</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Useful links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Bootstrap 4</a></li>
                                    <li><a href="#" class="py-2 d-block">jQuery</a></li>
                                    <li><a href="#" class="py-2 d-block">HTML5</a></li>
                                    <li><a href="#" class="py-2 d-block">Sass</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#4586ff" />
        </svg></div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
