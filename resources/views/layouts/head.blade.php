<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-32x32.png')  }}" sizes="32x32">

    <title>@yield('title')</title>


    <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('bower_components/uikit/css/uikit.almost-flat.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('bower_components/metrics-graphics/dist/metricsgraphics.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('bower_components/chartist/dist/chartist.min.css') }}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{ asset('assets/icons/flags/flags.min.css')  }}" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">


    <!-- style switcher -->


    <!-- altair admin -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/style_switcher.min.css') }}" media="all">


    <!-- themes -->
    <link rel="stylesheet" href="{{ asset('assets/css/themes/themes_combined.min.css') }}" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
    <script type="text/javascript" src="{{ asset('bower_components/matchMedia/matchMedia.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/matchMedia/matchMedia.addListener.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/ie.css')  }}" media="all">
    <![endif]-->
    @yield('css')

    <style type="text/css">
        .md-card.payment {
            height: 260px;
        }
        .md-card.income_expense{
            height: 280px;
        }
        .payment_amount.uk-grid.uk-grid-width-1-1.uk-grid-width-large-1-2 {
            padding: 0px 10px;
        }
    </style>
</head>