@extends('manager.index')

@section('conteudo')

<section class="container">
    <h2 class="block-title block-title--top-large block-title--bottom">Login</h2>

    <div class="login">
        <form class="contact" id="contact-form" name="contact-form" method="post" action="#" novalidate>

            <input class="contact__field" name="contact-email" type="email" placeholder="email">
            <input class="contact__field" name="contact-pass" type="password" placeholder="password">

            <div class="checkbox">
                <input id="check1" type="checkbox" name="check" value="check1" checked="checked">
                <label for="check1">remember me</label>
            </div>
            <a class="login__callback" href="#">Forgot password?</a>
            <button class="btn btn--decorated btn-warning login__btn" type="submit">Login</button>
        </form>
    </div>

    <div class="btn-wrapper">
        <h3 class="heading-helper heading-helper--bottom">You can also sign in via social accounts:</h3>

        <a class="btn btn--decorated btn--facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
        <a class="btn btn--decorated btn--twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a>
    </div>
</section><!-- end container -->

@stop