@extends('site.modelo')

@section('conteudo')
    <div class="bannercontainer">
        <div class="banner">
            <ul>
                <!-- Slide -->
                <li data-transition="fade" data-slotamount="3" data-text="Rodapé aqui!">
                    <img src="{{ asset('assets/images/banner3.jpg') }}" alt="">
                    <div class="caption sft slider__heading" data-x="center" data-y="85" data-speed="800"
                         data-start="1300" data-easing="Back.easeOut">
                        Speed Combo | Speed Fibra | Speed TV | Speed Phone
                    </div>
                    <div class="caption lfb skewtoleft slider__phone" data-x="center" data-y="bottom" data-speed="900"
                         data-start="1900" data-easing="Power4.easeOut">
                        <!-- <img src="{{ asset('assets/images/slider/full-width/brand-phone.png') }}" alt=""> -->
                    </div>
                    <div class="caption customin customout slider__btn tp-resizeme" data-x="center" data-y="bottom"
                         data-voffset="-70" data-speed="800" data-start="2700" data-easing="Back.easeOut"
                         data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;">
                        <a class="btn btn-warning btn--decorated" href="#">Assine já!</a>
                    </div>
                </li>
                <!-- end slide -->

                <!-- Slide -->
                <li data-transition="fade" data-slotamount="3" data-text="Rodapé 2 aqui!">
                    <img src="{{ asset('assets/images/banner2.jpg') }}" alt="">
                    <div class="caption customin customout slider-width slider__heading--sm-danger" data-x="right"
                         data-y="120" data-speed="700" data-start="1300" data-easing="Power1.easeIn"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        Melhor produto da região!
                    </div>
                    <div class="caption customin customout slider-width slider__heading--lg-primary" data-x="right"
                         data-y="156" data-speed="500" data-start="1600" data-easing="Power1.easeIn"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        Equipe qualificada!
                    </div>
                    <div class="caption customin customout slider-width slider__text" data-x="right" data-y="242"
                         data-speed="700" data-start="2300" data-easing="Power4.easeOut"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;">
                        Nam auctor dapibus ante vel facilisis. Cras eget adipiscing nisi.<br>
                        Duis aliquet ligula non risus sollicitudin commodo. Donec ullamcorper<br>
                        lacinia turpis at aliquet. Cras consectetur fermentum erat,<br>
                        in placerat ligula pharetra eget.
                    </div>
                    <div class="caption sfr slider-width slider__btn" data-x="right" data-y="387" data-speed="600"
                         data-start="2900">
                        <a class="link" href="#">Saiba mais > </a>
                    </div>
                </li>
                <!-- end slide -->

                <!-- Slide -->
                <li data-transition="fade" data-slotamount="3" data-text="Rodapé 3 Aqui!">
                    <img src="{{ asset('assets/images/banner4.jpg') }}" alt="">
                    <div class="caption customin tp-resizeme" data-x="center" data-y="center" data-speed="900"
                         data-start="1200"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-easing="Power3.easeInOut">
                        <div class="brand-circle"></div>
                    </div>
                    <div class="caption customin customout slider__heading--dark" data-x="center" data-y="241"
                         data-speed="700" data-start="1700" data-easing="Power1.easeIn"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        Conecte-se ao Mundo
                    </div>
                    <div class="caption customin customout slider__heading--dark-sm" data-x="center" data-y="292"
                         data-speed="500" data-start="2000" data-easing="Power1.easeIn"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;">
                        com a Speed Travel
                    </div>
                    <div class="caption lfr slider__btn slider__btn-lg tp-resizeme" data-x="center" data-y="362"
                         data-speed="600" data-start="2600">
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
            <h2 class="block-title">Planos</h2>
            <div class="price-container">
                @if($tv)
                    <div class="col-sm-4 price--full">
                        <!-- Price table -->
                        <div class="price">
                            <header class="price__head">
                                <h4 class="price__package">{{ $tv->nome }}</h4>
                                <p class="price__value">R$ {{ number_format($tv->valorresidencial, 2, ',', '.') }}</p>
                                <p class="price__descript">mensais</p>
                            </header>
                            <ul class="price__content">
                                <li class="price-quality">{{ $tv->canais }} canais</li>
                                <li class="price-quality">Residencial</li>
                                <!--
                                <li class="price-quality">Suporte Técnico</li>
                                <li class="price-quality">Air Grid 5.4Ghz*</li>
                                -->
                            </ul>
                            <footer>
                                <a class="btn btn-warning btn--decorated price__btn" href="#">Assine já!</a>
                            </footer>
                        </div>
                        <!-- end price table -->
                    </div><!-- end col -->
                @endif

                @if($internet)
                    <div class="col-sm-4 price--full">
                        <!-- Price table -->
                        <div class="price price--popular">
                            <header class="price__head">
                                <h4 class="price__package">{{ $internet->nome }}</h4>
                                <p class="price__value">
                                    R$ {{ number_format($internet->valorresidencial, 2, ',', '.') }}</p>
                                <p class="price__descript">mensais</p>
                            </header>
                            <ul class="price__content">
                                <li class="price-quality">Download: {{ $internet->download }}</li>
                                <li class="price-quality">Upload: {{ $internet->upload }}</li>
                                <li class="price-quality">Residencial</li>
                                <!--
                                <li class="price-quality">Suporte Técnico</li>
                                <li class="price-quality">Air Grid 5.4Ghz*</li>
                                -->
                            </ul>
                            <footer>
                                <a class="btn btn-warning btn--decorated price__btn" href="#">Assine já!</a>
                            </footer>
                        </div>
                        <!-- end price table -->
                    </div><!-- end col -->
                @endif

                @if($telefonia)
                    <div class="col-sm-4 price--full">
                        <!-- Price table -->
                        <div class="price">
                            <header class="price__head">
                                <h4 class="price__package">{{ $telefonia->nome }}</h4>
                                <p class="price__value">
                                    R$ {{ number_format($telefonia->valorresidencial, 2, ',', '.') }}</p>
                                <p class="price__descript">mensais</p>
                            </header>
                            <ul class="price__content">
                                <li class="price-quality">{{ $telefonia->minutos }} minutos</li>
                                <li class="price-quality">Residencial</li>
                                <!--
                                <li class="price-quality">Suporte Técnico</li>
                                <li class="price-quality">Air Grid 5.4Ghz*</li>
                                -->
                            </ul>
                            <footer>
                                <a class="btn btn-warning btn--decorated price__btn" href="#">Assine já!</a>
                            </footer>
                        </div>
                        <!-- end price table -->
                    </div><!-- end col -->
                @endif
            </div><!-- end row -->
        </div>
    </section>
    <!-- End Priceing Table-->
    <div align="center">
        <a class="btn btn--decorated btn-info" href="#">Veja mais planos</a>
    </div>
    <!-- Colored devider -->
    <div class="devider-color bottom-space"></div>

@stop
