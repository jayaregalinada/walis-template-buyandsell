<!DOCTYPE html>
<!--[if IE 8]>         <html @yield('html-attribute', '') class="no-js lt-ie9 @yield('html-class', '')" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html @yield('html-attribute', '') class="no-js @yield('html-class', '')" lang="en"> <!--<![endif]-->
<head>
    @yield('pre.head')
    {{ HTML::style('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700') }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Vollkorn') }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700') }}
    {{ HTML::style('//fonts.googleapis.com/css?family=Inconsolata:400') }}
    {{ HTML::style('/assets/css/styles.' . minified() . 'css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        {{ HTML::script('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.min.js') }}
        {{ HTML::script('//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
    <title>@yield( 'title', Config::get('app.title') )</title>
    {{ HTML::meta(['charset' => 'UTF-8']) }}
    {{ HTML::meta(['content' => 'width=device-width, initial-scale=1', 'name' => 'viewport']) }}
    {{ HTML::meta(['name' => 'apple-mobile-web-app-capable', 'content' => 'yes']) }}
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    <script>window.jQuery || document.write('<script src="/assets/vendor/jquery/jquery.min.js"><\/script>')</script>
{{--    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0-beta.13/angular.js') }}--}}
    {{ HTML::script('/assets/vendor/angular/angular.' . minified() .'js') }}


    @yield('post.head')
</head>
<body class="main @yield( 'body-class', '' )" @yield( 'body-attribute', '' )>

@yield('pre.body')

@include('walis-t-buyandsell::widgets.top-phone')
<div class="master-container container @yield( 'main-container-class', 'main-container' )">

    @yield('pre.container')


    @include('walis-t-buyandsell::widgets.header')

    @yield('body')
</div>

@yield('post.body')


@include('walis-t-buyandsell::partials.footer')

{{ HTML::script('/assets/vendor/angular/angular_modules.'.minified().'js') }}
{{ HTML::script('/assets/js/script.'.minified().'js') }}


@include('walis-dashboard::copyright')
</body>
</html>
