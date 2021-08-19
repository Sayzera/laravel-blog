@extends('web.layout')
@php
    $css = '<style type="text/css">';
    $css .= ".bg-1 {
    background: url('../images/banner/".$result['servis_page']->banner." ') no-repeat 50% 50% !important;
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
              <span class="text-white">Hizmetlerimiz</span>
              <h1 class="text-capitalize mb-4 text-lg">Neler Yapıyoruz</h1>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="/" class="text-white">Anasayfa</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{route('web-servisler')}}" class="text-white-50">Hizmetlerimiz</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--  Section Services Start -->
    <section class="section service border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">{{$result['servis_page']->banner_title}}</span>
                        <h2 class="mt-3 content-title ">{{$result['servis_page']->banner_sub_title}} </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($result['servis_detay'] as $servis)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5">
                        <i class="ti-world"></i>
                        <h4 class="mb-3">{{$servis->servis_title}}</h4>
                        <p>{{$servis->servis_description}}</p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--  Section Services End -->

    <section class="cta-2">
        <div class="container">
            <div class="cta-block p-5 rounded">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <h2 class="mt-2 text-white">Projenizi profesyonel ekimize emanet edin</h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="contact.html" class="btn btn-main btn-round-full float-right">İletişime Geç</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


        </div>
@endsection
