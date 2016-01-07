<!doctype html>
<html lang="en-us">
<head>
    <!-- Basic Page Needs -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <title>Speed Travel Inc</title>
    <meta name="description" content="A Template by Designzway team">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Designzway team">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <!-- Fonts -->
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,600,700italic,400,700,800italic' rel='stylesheet' type='text/css'>
    <!-- VarelaRound -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- Icon Font - Font Awesome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    <!-- Mobile menu -->
    <link href="{{ asset('assets/external/z-nav/z-nav.css') }}" rel="stylesheet">
    <!-- Flexslider -->
    <link href="{{ asset('assets/external/flexslider/flexslider.css') }}" rel="stylesheet">
    <!-- Touch slider - Swiper -->
    <link href="{{ asset('assets/external/swiper/idangerous.swiper.css') }}" rel="stylesheet" />
    <!-- Custom -->
    <link href="{{ asset('assets/css/style.css?v=1') }}" rel="stylesheet" />
    <!-- Basic JavaScript-->
    <!-- Modernizr -->
    <script src="{{ asset('assets/external/modernizr/modernizr.custom.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->

    <!--[if lte IE 9]>
    <link href="{{ asset('assets/css/ie9.css?v=1') }}" rel="stylesheet" />
    <![endif]-->
</head>

<body>

<div class="wrapper" id="top">

    <!-- Header section -->
    <header class="header">
        <div class="header-fixed">
            <div class="header-line waypoint" data-animate-down="header-up" data-animate-up="header-down">
                <div class="container">
                    <!-- Contact information about company -->
                    <address class="contact-info pull-left hidden-lower">
						<span class="contact-info__item">
							<i class="fa fa-location-arrow"></i>
							Rua dos Pioneiros, 1575 - Cacoal/RO
						</span>
						<span class="contact-info__item">
							<i class="fa fa-mobile"></i>
							+55 69 8467-8083
						</span>
						<span class="contact-info__item">
							<i class="fa fa-envelope"></i>
							sergiopeluzzi@gmail.com
						</span>
                    </address>
                    <!-- end contact information -->

                    <!-- Search field -->
                    <form class="search pull-right" id="search-form" name="search-form" method="get" action="#">
                        <input class="search__field" name="search-request" type="search" placeholder="search" value="">
                        <button class="search__btn" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <!-- end search field -->
                </div>  <!-- end container -->
            </div>

            <div class="fixed-top header-down">
                <div class="container">
                    <!--  Logo  -->
                    <a class="logo" href="{{ route('site.index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="SpeedTravel">
                    </a>
                    <!-- End Logo -->

                    <!-- Navigation section -->
                    <nav class="z-nav">
                        <!-- Toggle for menu mobile view -->
                        <a href="#" class="z-nav__toggle">
                            <span class="menu-icon"></span>
                            <span class="menu-text">navigation</span>
                            <div class="menu-head"></div>
                        </a>

                        <div class="z-nav-inner">
                            <ul class="z-nav__list">
                                <li class="z-nav__item">
                                    <!-- Subsidiary menu toogle button -->
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Inicio</a>
                                </li>

                                <li class="z-nav__item">
                                    <!-- Subsidiary menu toogle button -->
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Combo</a>
                                    <!-- Subsidiary menu list-->
                                    <ul class="z-nav__list-secondary">
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Combo 01</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Combo 02</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Combo 03</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Monte o seu</a></li>
                                    </ul>
                                    <!-- end subsidiary menu list-->
                                </li>

                                <li class="z-nav__item">
                                    <!-- Subsidiary menu toogle button -->
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Internet</a>
                                    <!-- Subsidiary menu list-->
                                    <ul class="z-nav__list-secondary">
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Speed Rádio</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Speed Fibra</a></li>
                                    </ul>
                                    <!-- end subsidiary menu list-->
                                </li>


                                <li class="z-nav__item">
                                    <!-- Subsidiary menu toogle button -->
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">TV</a>
                                    <!-- Subsidiary menu list-->
                                    <ul class="z-nav__list-secondary">
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Speed TV</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Speed HD MAX</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Speed HD</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Speed Light</a></li>
                                    </ul>
                                    <!-- end subsidiary menu list-->
                                </li>

                                <li class="z-nav__item">
                                    <!-- Subsidiary menu toogle button -->
                                    <span class="z-nav__toggle-sub plus"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>
                                    <a class="z-nav__link" href="#">Telefonia</a>
                                    <!-- Subsidiary menu list-->
                                    <ul class="z-nav__list-secondary">
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Planos</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Serviços Inteligentes</a></li>
                                        <li class="z-nav__item"><a class="z-nav__link" href="#">Portabilidade</a></li>
                                    </ul>
                                    <!-- end subsidiary menu list-->
                                </li>
                            </ul>
                        </div><!-- end list menu inner container -->
                        <!-- end list menu item -->
                    </nav>
                    <!-- end navigation section -->
                </div> <!-- end container -->

                <!-- Colored devider -->
                <div class="devider-color"></div>

            </div> <!-- end fixed top block -->

        </div>
    </header>
    <!-- end header section -->



    <!-- Section show current page and breadcrumb -->
    <section class="page-indecator">
        <div class="container">
            <h2 class="heading">Current</h2>

            <!-- Breadcrumb pattern -->
            <ol class="breadcrumb">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li class="active">Current</li>
            </ol>

            <!-- Default one color devider -->
            <div class="devider devider--bottom-md"></div>
        </div>
    </section>
    <!-- end section show current page and breadcrumb -->

    <section class="container">
        <div class="row">
            <div class="col-sm-6">

            </div><!-- end col -->

            <div class="col-sm-6">

            </div><!-- end col -->
        </div><!-- end row -->
    </section><!-- end container -->

    <div style="height:500px;"></div>

    <!-- Colored devider -->
    <div class="devider-color bottom-space"></div>

    <!-- Footer section -->
    <footer class="footer footer--info">
        <div class="container">
            <div class="row">

                <!-- Latest post -->
                <div class="col-sm-4">
                    <!--  Logo  -->
                    <a class="logo" href="{{ route('site.index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="SpeedTravel">
                    </a>
                    <!-- End Logo -->
                    <br>
                    <p>In eleifend vel leo id tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
                <!-- end latest post -->

                <!-- Contact info about company -->
                <div class="col-sm-4">
                    <h3 class="heading-info heading-info--mobile">Contato:</h3>
                    <!-- Contact information about company -->
                    <address class="contact-info contact-info--list">
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 one-column">
                                        <span class="contact-info__item">
                                            <i class="fa fa-location-arrow"></i>
                                            Rua dos Pioneiros, 1575 - Cacoal/RO
                                        </span>
                                        <span class="contact-info__item">
                                            <i class="fa fa-mobile"></i>
                                            +55 69 8467-8083
                                        </span>
                            </div>

                            <div class="col-xs-6 col-sm-12 one-column">
                                        <span class="contact-info__item">
                                            <i class="fa fa-envelope"></i>
                                            sergiopeluzzi@gmail.com
                                        </span>
                                        <span class="contact-info__item">
                                            <i class="fa fa-skype"></i>
                                            peluzzi85
                                        </span>
                            </div>
                        </div>
                    </address>
                    <!-- end contact information -->
                </div>
                <!-- end contact info -->

                <!-- Social links -->
                <div class="col-sm-4">
                    <h3 class="heading-info heading-info--mobile">Inscreva-se:</h3>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. </p>

                    <!-- Working subscribe form with MailChimp -->
                    <div id="mc_embed_signup">
                        <form action="//twitter.us9.list-manage.com/subscribe/post?u=21c10d3734fc03bebe9a827ab&amp;id=ea1d7bc533" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form--name" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <input type="email" value="" name="EMAIL" class="email form__input" id="mce-EMAIL" placeholder="enter email" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;"><input type="text" name="b_21c10d3734fc03bebe9a827ab_ea1d7bc533" tabindex="-1" value=""></div>
                                <div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button form__submit"><span class="fa fa-arrow-circle-right"></span></button></div>
                            </div>
                        </form>
                    </div>
                    <!-- end subscribe form -->


                </div>
                <!-- end social links -->
            </div><!-- end row -->

            <div class="copy">
                &copy; Shift Dev., 2016. All rights reserved. Desenvolvido por <a href="http://www.sergiopeluzzi.com.br" target="_blank">Shift Soluções em Tecnologia</a>

                <ul class="navigation navigation--add">
                    <li><a href="{{ route('site.index') }}">Home</a></li>
                    <li><a href="{{ route('site.index') }}">Combo</a></li>
                    <li><a href="{{ route('site.index') }}">Internet</a></li>
                    <li><a href="{{ route('site.index') }}">TV</a></li>
                    <li><a href="{{ route('site.index') }}">Telefonia</a></li>
                </ul>
            </div>

        </div><!-- end container -->
    </footer>
    <!-- end footer section -->

    <div class="top-scroll"><i class="fa fa-angle-up"></i></div>

</div>
<!--
<div class="animationload">
    <div class="preloader"></div>
</div>
-->
<!-- JavaScript-->
<!-- External-->
<!-- jQuery 1.10.1-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/external/jquery/jquery-1.10.1.min.js') }}"><\/script>')</script>
<!-- Bootstrap 3-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- Mobile menu -->
<script src="{{ asset('assets/external/z-nav/jquery.mobile.menu.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('assets/external/flexslider/jquery.flexslider-min.js') }}"></script>
<!-- Touch slider - Swiper -->
<script src="{{ asset('assets/external/swiper/idangerous.swiper.js') }}"></script>
<!-- Scroll to piugin -->
<script src="{{ asset('assets/external/scrollto/jquery.scrollTo.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('assets/external/waypoint/waypoints.min.js') }}"></script>
<!-- Custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
    $(document).ready(function() {
        flexSlider();
        sliderSides();
        scrollSlider();
        preloader();

        $('.animated-services').one('inview', function (event, visible) {
            if (visible == true) {
                $('.service.start-1').addClass('zoomIn');
                $('.service.start-2').addClass('zoomIn stage2');
                $('.service.start-3').addClass('zoomIn stage3');
                $('.service.start-4').addClass('zoomIn stage4');
            }
        });

        $('.price-container').one('inview', function (event, visible) {
            if (visible == true) {
                $('.price-container').addClass('fadeInUp');
            }
        });

        $('.share').one('inview', function (event, visible) {
            if (visible == true) {
                $('.share').addClass('fadeInUp');
            }
        });


    });
</script>

</body>
</html>
