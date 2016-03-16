@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container col-md-12">
            <h2 class="heading heading--start">Planos | Selecione o tipo de plano</h2>

            @include('toast::messages-jquery')
            <div class="text-center">
                <a class="btn btn--decorated btn-lg btn-info" href="{{ route('manager.planos.internet.index') }}">internet</a>
                <a class="btn btn--decorated btn-lg btn-warning" href="{{ route('manager.planos.tv.index') }}">Tv</a>
                <a class="btn btn--decorated btn-lg btn-danger" href="{{ route('manager.planos.telefonia.index') }}">Telefonia</a>
            </div>
        </div>
        <!-- end container -->
    </section>
@stop
