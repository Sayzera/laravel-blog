@extends('web.layout')

@php
    $css = '<style type="text/css">';
    $css .= ".bg-1 {
    background: url('../images/banner/".$result['galeri_genel']->banner." ') no-repeat 50% 50% !important;
    background-repeat:no-repeat!important;
    background-position:center!important;
    background-size: cover!important;
    }";
    $css .= '</style>';

    echo $css;
@endphp
@section('content')

<div class="main-wrapper ">
    <section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white">Son çalışmalar</span>
              <h1 class="text-capitalize mb-4 text-lg">Portfolio</h1>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="/" class="text-white">Anasayfa</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="#" class="text-white-50">Son çalışmalar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- section portfolio start -->
    <section class="section portfolio pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Çalışmalarımız</span>
                        <h2 class="mt-3 content-title ">{{$result['galeri_genel']->baslik}}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio-gallery">
                @foreach ($result['resimler'] as $resim)
                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative  mb-4">
                        <a href="{{asset('images/portfolio/'.$resim->resim.' ')}}" class="popup-gallery">
                            <img src="{{asset('images/portfolio/'.$resim->resim.' ')}}" alt="" class="img-fluid w-100">

                            <i class="ti-plus overlay-item"></i>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">{{$resim->title}}</h3>
                                <p class="text-white-50">{{$resim->aciklama}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach


                <div class="col-lg-4 col-md-6">
                    <div class="portflio-item position-relative mb-4">
                        <a href="images/portfolio/6.jpg" class="popup-gallery">
                            <img src="images/portfolio/6.jpg" alt="" class="img-fluid w-100">

                            <i class="ti-plus overlay-item"></i>
                            <div class="portfolio-item-content">
                                <h3 class="mb-0 text-white">Project california</h3>
                                <p class="text-white-50">Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section portfolio END -->


</div>

@endsection
