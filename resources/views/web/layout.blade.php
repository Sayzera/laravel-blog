<!doctype html>
<html lang="tr">

@php $data = $global_data['home'];  @endphp

<head>
    @include('web.inc.head')
</head>


<body>
    <!-- Header Start -->
    <header class="navigation">
        <div class="header-top ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-4">
                        <div class="header-top-socials text-center text-lg-left text-md-left">
                            <a href="{{$data->facebook}}" target="_blank"><i
                                    class="ti-facebook"></i></a>
                            <a href="{{$data->twitter}}" target="_blank"><i class="ti-twitter"></i></a>
                            <a href="{{$data->instagram}}" target="_blank"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                        <div class="header-top-info">
                            <a href="tel:+23-345-67890">Bizi Arayın : <span>{{$data->telefon}}</span></a>
                            <a href="mailto:{{$data->email}}"><i
                                    class="fa fa-envelope mr-2"></i><span>{{$data->email}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('web.inc.nav')
    </header>

    <!-- Header Close -->
    @yield('content')


    @include('web.inc.footer')
</body>

</html>
