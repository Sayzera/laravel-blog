@extends('web.layout')
@php
    $css = '<style type="text/css">';
    $css .= ".bg-1 {
    background: url('../images/banner/".$result['hakkimizda_genel']->banner." ') no-repeat 50% 50% !important;
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
              <span class="text-white">Hakkımızda</span>
              <h1 class="text-capitalize mb-4 text-lg">Şirketimiz</h1>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="/" class="text-white">Anasayfa</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="{{route('web-hakkimizda')}}" class="text-white-50">Hakkımızda</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section About Start -->
    <section class="section about-2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h6 text-color">Biz Kimiz</span>
                        <h2 class="mt-3 mb-4 position-relative content-title">{{$result['hakkimizda_genel']->biz_kimiz_baslik}}</h2>
                        <p class="mb-5">{{$result['hakkimizda_genel']->biz_kimiz_aciklama}}</p>

                        {{-- <a href="#" class="btn btn-main btn-round-full">Get started</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <img src="{{asset('images/banner/'.$result['hakkimizda_genel']->hakkimizda_resim.'')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About End -->

    <section class="about-info section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md ">01.</span>Misyonumuz</h3>
                        <p>{{$result['hakkimizda_genel']->misyon}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">02.</span>Vizyonumuz</h3>
                        <p>{{$result['hakkimizda_genel']->vizyon}}</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">03.</span>Yaklaşımımız</h3>
                        <p>{{$result['hakkimizda_genel']->yaklasim}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section Counter Start -->
    <section class="section counter bg-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <i class="ti-check color-one text-md"></i>
                        <h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">1730</span> +</h3>
                        <p class="text-white-50">Project Done</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <i class="ti-flag color-one text-md"></i>
                        <h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">125 </span>M </h3>
                        <p class="text-white-50">User Worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <i class="ti-layers color-one text-md"></i>
                        <h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">39</span></h3>
                        <p class="text-white-50">Availble Country</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center">
                        <i class="ti-medall color-one  text-md"></i>
                        <h3 class="mt-2 mb-0 text-white"><span class="counter-stat font-weight-bold">14</span></h3>
                        <p class="text-white-50">Award Winner </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section Counter End  -->
    <!--  Section Services Start -->
    <section class="section team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Ekibimiz</span>
                        <h2 class="mt-3 content-title">En iyi hizmet için uzman ekibimiz</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              @foreach ($result['ekip'] as $ekip)
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-item-wrap mb-5">
                    <div class="team-item position-relative">
                        <img src="{{asset('images/team/'.$ekip->image.' ' )}}" alt="" class="img-fluid w-100">
                        <div class="team-img-hover">
                            <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                    <a href="{{$ekip->facebook}}" class="facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$ekip->twitter}}" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$ekip->instagram}}" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$ekip->linkedin}}" class="linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-item-content">
                        <h4 class="mt-3 mb-0 text-capitalize">{{$ekip->ad_soyad}}</h4>
                        <p>{{$ekip->meslek}}</p>
                    </div>
                </div>
            </div>
              @endforeach


            </div>
        </div>
    </section>
    <!--  Section Services End -->
    <!-- Section Testimonial Start -->
    <section class="section testimonial bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Müşteri Görüşleri</span>
                        <h2 class="mt-3 content-title">Müşterilerimizin hakkımızda söylediklerini kontrol edin</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="testimonial-wrap">
                @foreach ($result['yorumlar'] as $key =>  $yorum)
                <div class="testimonial-item position-relative">
                    <i class=" text-color">{{$key +1}}</i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">{{$yorum->yorum_aciklama}}</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">{{$yorum->ad_soyad}}</h5>
                            <p>{{$yorum->meslek}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- Section Testimonial End -->
    </div>

@endsection
