@extends('manager.index')

@section('conteudo')

<section class="container">
    <h2 class="block-title block-title--top-large block-title--bottom">Login</h2>

    <div class="login">
        {!! Form::open(['route' => 'manager.login', 'method' => 'post', 'class' => 'contact', 'id' => 'contact-form', 'name' => 'contact-form', 'novalidate']) !!}

            <input class="contact__field" name="contact-email" type="email" placeholder="email">
            <input class="contact__field" name="contact-pass" type="password" placeholder="password">

            <div class="checkbox">
                <input id="check1" type="checkbox" name="check" value="check1" checked="checked">
                <label for="check1">lembrar-me</label>
            </div>
            <button class="btn btn--decorated btn-warning login__btn" type="submit">Login</button>
        {!! Form::close() !!}
    </div>
</section><!-- end container -->

@stop