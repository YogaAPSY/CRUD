<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel' ) }}</title>

    <link href='{{ asset('image/icon.png') }}' rel='shortcut icon'>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <style rel="type/css">
        a:hover{
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: rgba( 0 , 0 , 0 ,0.5);">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="navbar-brand">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('image/icon.png') }}" alt="" style="width: 50px; height: 50px">
                            <b>
                                {{ config('app.name', 'Portal Mahasiswa') }}
                            </b>
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        @if(!empty($halaman) && $halaman == 'home')
                        <li class="active"><a href="{{ url('/') }}"><b>Home</b></a></li>
                        @else
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @endif

                        @if(!empty($halaman) && $halaman == 'input')
                        <li class="active"><a href="{{ url('input') }}"><b>Input Mahasiswa</b></a></li>
                        @else
                        <li><a href="{{ url('input') }}">Input Mahasiswa</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 @yield('content')
            </div>
        </div>
    </div>
   <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.chained.min.js') }}"></script>

    <script type="text/javascript">
        $("#select_jurusan").chained("#select_fakultas");
    </script>
</body>
</html>
