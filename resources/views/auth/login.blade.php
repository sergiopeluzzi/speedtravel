<!doctype html>
<html lang="en-us">
<head>
    <!-- Basic Page Needs -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <title>Speed Manager</title>
    <meta name="author" content="Sergio Peluzzi">

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Select box -->
    <link href="{{ asset('assets/external/bootstrap-select/bootstrap-select.css') }}" rel="stylesheet">
    <!-- Datepicker -->
    <link href="{{ asset('assets/external/bootstrap-datepicker/datepicker.css') }}" rel="stylesheet">
    <!--Wijmo Widgets CSS-->
    <link href="http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20141.34.min.css" rel="stylesheet"/>
    <!-- mCustomScrollbar -->
    <link href="{{ asset('assets/external/mCustomScrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

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
</head>

<body>
<div class="wrapper">
    <header class="header-fluid">
        <!-- Logo -->
        <a class="logo" href="{{ route('manager.index') }}">
            <img style="width: 200px; height: auto; padding-left: 30px; padding-top: 20px" src="{{ asset('assets/images/logo.png') }}" alt="SpeedTravel">
        </a>
        <!-- end logo -->
    </header>
    <!-- Colored devider -->
    <div class="devider-color"></div>
</div>


<section>

    <div class="content">
        <section class="container">
            <h2 class="block-title block-title--top-large block-title--bottom">Login</h2>

            <div class="login">
                {!! Form::open(['route' => 'manager.login', 'method' => 'post', 'class' => 'contact', 'id' => 'contact-form', 'name' => 'contact-form']) !!}

                <input class="contact__field" id="email" name="email" type="email" placeholder="email">
                <input class="contact__field" id="password" name="password" type="password" placeholder="password">

                <div class="checkbox">
                    <input id="check1" type="checkbox" name="check" value="check1" checked="checked">
                    <label for="check1">lembrar-me</label>
                </div>
                <button class="btn btn--decorated btn-warning login__btn" type="submit">Login</button>
                {!! Form::close() !!}
            </div>
        </section><!-- end container -->
    </div>

</section>

<!-- JavaScript-->
<!-- External-->
<!-- jQuery 1.10.1-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/external/jquery/jquery-1.10.1.min.js') }}"><\/script>')</script>
<!--jQuery References-->
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- JqueryMask -->
<script src="{{ asset('assets/external/jQuery-mask/jquery-mask.min.js') }}"></script>
<!-- Bootstrap 3-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- Select box -->
<script src="{{ asset('assets/external/bootstrap-select/bootstrap-select.js') }}"></script>
<!-- Circle progress bar -->
<script src="{{ asset('assets/external/knob/jquery.knob.js') }}"></script>
<!-- Datepicker -->
<script src="{{ asset('assets/external/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<!-- mCustomScrollbar -->
<script src="{{ asset('assets/external/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Charts widget scripts -->
<!--Wijmo Widgets JavaScript-->
<script src="http://cdn.wijmo.com/jquery.wijmo-open.all.3.20141.34.min.js" type="text/javascript"></script>
<script src="http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20141.34.min.js" type="text/javascript"></script>
<script src="http://cdn.wijmo.com/interop/wijmo.data.ajax.3.20141.34.js" type="text/javascript"></script>

@yield('scripts')

</body>
</html>

