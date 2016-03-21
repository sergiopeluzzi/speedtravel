@extends('site.modelo')

@section('conteudo')

<!-- Section show current page and breadcrumb -->
<section class="page-indecator">
    <div class="container">
        <h2 class="heading">Telefonia</h2>

        <!-- Default one color devider -->
        <div class="devider devider--bottom-m"></div>
    </div>
</section>
<!-- end section show current page and breadcrumb -->

<section class="container product-wrapper">
    <h3 class="not-visible">Main conrainer</h3>

    <!-- Product preview list -->
    @foreach($telefonias as $telefonia)
    <div class="product product--list">
        <div class="row">
            <div class="col-sm-7 col-md-8 separate-block">
                <a class="product__title" href="">{{ $telefonia->nome }}</a>
                <div class="product-rating">
                    <div class="score"></div>
                </div>
                <p class="product__info">{{ $telefonia->descricao }}</p>
            </div><!-- end col -->
            <div class="col-sm-4 col-md-3">
                <div class="product__action">
                    <p class="product__price">R$ {{ number_format($telefonia->valorresidencial, 2, ',', '.') }}</p>
                    <a class="btn btn-warning btn--decorated product__btn" href="#">Assine já!</a>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
    @endforeach
    <!-- end product preview list -->

</section><!-- end container -->

<!-- Colored devider -->
<div class="devider-color bottom-space"></div>

@stop