<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

    <!-- start files for template -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link href="{{asset('css/app.css') }}" rel="stylesheet"> -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/added_style.css')}}" rel="stylesheet">
    <!-- end files for template -->
</head>
<body>
    <div id="app">
        <!-- {{--  @include('layouts.header') --}} -->
        
          <!-- <example-component></example-component> -->
          <!-- <global-home></global-home> -->
        @yield('content')
      @include('layouts.footer')
    </div>



    <!-- start files for template -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}" defer ></script>
        <script>
            $(document).ready(function(){
              $('.switch-tologin-modal').on('click',function(){
                $('#register-modal').modal('hide');
                $('#login-modal').modal('show');
              })
            $('.switch-toregister-modal').on('click',function(){
                $('#login-modal').modal('hide');
                    $('#register-modal').modal('show');
                })
            })
        </script>
    <!-- end files for template -->

</body>
</html>
