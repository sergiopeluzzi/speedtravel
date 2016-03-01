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
    <!-- External -->
    <!-- Mobile menu -->
    <link href="{{ asset('assets/external/z-nav/z-nav.css') }}" rel="stylesheet">

    <!-- Sliders -->
    <!-- Revolution slider -->
    <link href="{{ asset('assets/external/rs-plugin/css/settings.css') }}" rel="stylesheet"  media="screen" />
    <!-- Touch slider - Swiper -->
    <link href="{{ asset('assets/external/swiper/idangerous.swiper.css') }}" rel="stylesheet" />

    <!-- Custom -->
    <link href="{{ asset('assets/css/style.css?v=1') }}" rel="stylesheet" />

    <!-- Basic JavaScript-->
    <!-- Modernizr -->
    <!-- <script src="{{ asset('assets/external/modernizr/modernizr.custom.js') }}"></script> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->

    <!--[if lte IE 9]>
    <link href="{{ asset('assets/css/ie9.css?v=1') }} " rel="stylesheet" />
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


    <div class="bannercontainer">
        <div class="banner">
            <ul>
                <!-- Slide -->
                <li data-transition="fade" data-slotamount="3" data-text="Rodapé aqui!">
                    <img src="{{ asset('assets/images/banner3.jpg') }}" alt="">
                    <div class="caption sft slider__heading" data-x="center" data-y="85" data-speed="800" data-start="1300" data-easing="Back.easeOut">
                        Speed Combo | Speed Fibra | Speed TV | Speed Phone
                    </div>
                    <div class="caption lfb skewtoleft slider__phone" data-x="center" data-y="bottom" data-speed="900" data-start="1900" data-easing="Power4.easeOut">
                        <!-- <img src="{{ asset('assets/images/slider/full-width/brand-phone.png') }}" alt=""> -->
                    </div>
                    <div class="caption customin customout slider__btn tp-resizeme" data-x="center" data-y="bottom" data-voffset="-70" data-speed="800" data-start="2700" data-easing="Back.easeOut" data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;">
                        <a class="btn btn-warning btn--decorated" href="#">Assine já!</a>
                    </div>
                </li>
                <!-- end slide -->

                <!-- Slide -->
                <li data-transition="fade" data-slotamount="3"  data-text="Rodapé 2 aqui!">
                    <img src="{{ asset('assets/images/banner2.jpg') }}" alt="">
                    <div class="caption customin customout slider-width slider__heading--sm-danger" data-x="right" data-y="120" data-speed="700" data-start="1300" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        Melhor produto da região!
                    </div>
                    <div class="caption customin customout slider-width slider__heading--lg-primary" data-x="right" data-y="156" data-speed="500" data-start="1600" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        Equipe qualificada!
                    </div>
                    <div class="caption customin customout slider-width slider__text" data-x="right" data-y="242" data-speed="700" data-start="2300" data-easing="Power4.easeOut" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;">
                        Nam auctor dapibus ante vel facilisis. Cras eget adipiscing nisi.<br>
                        Duis aliquet ligula non risus sollicitudin commodo. Donec ullamcorper<br>
                        lacinia turpis at aliquet. Cras consectetur fermentum erat,<br>
                        in placerat ligula pharetra eget.
                    </div>
                    <div class="caption sfr slider-width slider__btn" data-x="right" data-y="387" data-speed="600" data-start="2900">
                        <a class="link" href="#">Saiba mais > </a>
                    </div>
                </li>
                <!-- end slide -->

                <!-- Slide -->
                <li data-transition="fade" data-slotamount="3" data-text="Rodapé 3 Aqui!">
                    <img src="{{ asset('assets/images/banner4.jpg') }}" alt="">
                    <div class="caption customin tp-resizeme" data-x="center" data-y="center" data-speed="900" data-start="1200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-easing="Power3.easeInOut">
                        <div class="brand-circle"></div>
                    </div>
                    <div class="caption customin customout slider__heading--dark" data-x="center" data-y="241" data-speed="700" data-start="1700" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        Conecte-se ao Mundo
                    </div>
                    <div class="caption customin customout slider__heading--dark-sm" data-x="center" data-y="292" data-speed="500" data-start="2000" data-easing="Power1.easeIn" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        com a Speed Travel
                    </div>
                    <div class="caption lfr slider__btn slider__btn-lg tp-resizeme" data-x="center" data-y="362" data-speed="600" data-start="2600">
                        <a class="btn btn-warning btn--decorated" href="#">Junte-se a nós!</a>
                    </div>
                </li>
                <!-- end slide -->
            </ul>
        </div>
    </div>

    <div class="banner-control top-space">
        <div class="container">
            <p class="slider-info"></p>
        </div>
    </div>

    <!-- Slider placeholder for mobile view (first variant) -->
    <div class="mobile-full-placeholeder">
        <h2 class="full-placeholeder__headind slider__heading">Speed Combo | Speed Fibra | Speed TV | Speed Phone</h2>
        <a class="btn btn-warning btn--decorated" href="#">Assine já!</a>
    </div>

    <div class="placeholeder-control top-space">
        <p class="placeholeder-info">Rodape aqui!</p>
    </div>
    <!-- End Slider-->

    <!-- Pricing Table -->
    <section>
        <div class="container">
            <div class="price-container">
                <div class="col-sm-4 price--full">
                    <!-- Price table -->
                    <div class="price">
                        <header class="price__head">
                            <h4 class="price__package">Speed Basic</h4>
                            <p class="price__value">R$ 62,49</p>
                            <p class="price__descript">mensais</p>
                        </header>
                        <ul class="price__content">
                            <li class="price-quality">Download 1 MB</li>
                            <li class="price-quality">Upload 320 KB</li>
                            <li class="price-quality">Residencial</li>
                            <li class="price-quality">Suporte Técnico</li>
                            <li class="price-quality">Air Grid 5.4Ghz*</li>
                        </ul>
                        <footer>
                            <a class="btn btn-warning btn--decorated price__btn" href="#">Assine já!</a>
                        </footer>
                    </div>
                    <!-- end price table -->
                </div><!-- end col -->

                <div class="col-sm-4 price--full">
                    <!-- Price table -->
                    <div class="price price--popular">
                        <header class="price__head">
                            <h4 class="price__package">Speed Basic</h4>
                            <p class="price__value">R$ 62,49</p>
                            <p class="price__descript">mensais</p>
                        </header>
                        <ul class="price__content">
                            <li class="price-quality">Download 1 MB</li>
                            <li class="price-quality">Upload 320 KB</li>
                            <li class="price-quality">Residencial</li>
                            <li class="price-quality">Suporte Técnico</li>
                            <li class="price-quality">Air Grid 5.4Ghz*</li>
                        </ul>
                        <footer>
                            <a class="btn btn-warning btn--decorated price__btn" href="#">Assine já!</a>
                        </footer>
                    </div>
                    <!-- end price table -->
                </div><!-- end col -->

                <div class="col-sm-4 price--full">
                    <!-- Price table -->
                    <div class="price">
                        <header class="price__head">
                            <h4 class="price__package">Speed Basic</h4>
                            <p class="price__value">R$ 62,49</p>
                            <p class="price__descript">mensais</p>
                        </header>
                        <ul class="price__content">
                            <li class="price-quality">Download 1 MB</li>
                            <li class="price-quality">Upload 320 KB</li>
                            <li class="price-quality">Residencial</li>
                            <li class="price-quality">Suporte Técnico</li>
                            <li class="price-quality">Air Grid 5.4Ghz*</li>
                        </ul>
                        <footer>
                            <a class="btn btn-warning btn--decorated price__btn" href="#">Assine já!</a>
                        </footer>
                    </div>
                    <!-- end price table -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>
    <!-- End Priceing Table-->

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
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_21c10d3734fc03bebe9a827ab_ea1d7bc533" tabindex="-1" value="">
                                </div>
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
<script>window.jQuery || document.write('<script src="external/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<!-- Bootstrap 3-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- Mobile menu -->
<script src="{{ asset('assets/') }}external/z-nav/jquery.mobile.menu.js"></script>

<!-- Sliders -->
<!-- jQuery REVOLUTION Slider -->
<script src="{{ asset('assets/external/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('assets/external/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Touch slider - Swiper -->
<script src="{{ asset('assets/external/swiper/idangerous.swiper.js') }}"></script>

<!-- Twitter feed -->
<script src="{{ asset('assets/external/twitterfeed/twitterfeed.js') }}"></script>
<!-- Scroll to piugin -->
<script src="{{ asset('assets/external/scrollto/jquery.scrollTo.min.js') }}"></script>

<!-- Livicons -->
<script src="{{ asset('assets/external/livicons/livicons-1.3.min.js') }}"></script>
<script src="{{ asset('assets/external/livicons/raphael-min.js') }}"></script>

<!-- Waypoints -->
<script src="{{ asset('assets/external/waypoint/waypoints.min.js') }}"></script>
<!-- Event that will trigger when the element is scrolled in to the viewport.-->
<script src="{{ asset('assets/external/inview/jquery.inview.js') }}"></script>

<!-- Custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>



<script>
    $(document).ready(function() {
        revDefault();
        featureSlider();
        fadingSlider();
        numberStart();
        preloader();

        $('.feature .feature__heading').one('inview', function (event, visible) {
            if (visible == true) {
                $('.feature__image.start-1').addClass('fadeInUp');
                $('.feature__image.start-2').addClass('fadeInUp stage2');
                $('.feature__image.start-3').addClass('fadeInUp stage3');
            }
        });

        $('.animated-row').one('inview', function (event, visible) {
            if (visible == true) {
                $('.list.start-1').addClass('fadeInUp');
                $('.image-container.start-2').addClass('fadeInUp stage2');
                $('.list.start-3').addClass('fadeInUp stage3');
            }
        });

        $('.short-text').one('inview', function (event, visible) {
            if (visible == true) {
                $(this).addClass('fadeIn slow');
            }
        });


    });
</script>

</body>
</html>
