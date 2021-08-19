@extends('web.layout')
@section('content')
@php
    $css = '<style type="text/css">';
    $css .= ".bg-1 {
    background: url('../images/banner/".$result['iletisim']->banner." ') no-repeat 50% 50% !important;
    background-repeat:no-repeat!important;
    background-position:center!important;
    background-size: cover!important;
    }";
    $css .= '</style>';

    echo $css;
@endphp
<div class="main-wrapper ">
    <section class="page-title bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white">İletişim</span>
              <h1 class="text-capitalize mb-4 text-lg">İletişime Geçin</h1>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="/" class="text-white">Anasayfa</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="#" class="text-white-50">İletişim</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact form start -->
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                     <form action="{{route('mesaj-post')}}"  class="contact__form" method="POST" >
                     @csrf
                     @if ($message = Session::get('success'))
                           <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" role="alert">
                                   {{$message}}
                                </div>
                            </div>
                        </div>
                     @endif

                        <!-- end message -->
                        <h3 class="text-md mb-4">İletişim Formu</h3>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control is-valid" placeholder="Ad Soyad">
                            @error('name')
                            <span class="text-color">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                            @error('email')
                            <span class="text-color">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" class="form-control" rows="4" placeholder="Mesajınız"></textarea>
                            @error('message')
                            <span class="text-color">{{$message}}</span>
                            @enderror
                        </div>
                        <button class="btn btn-main" name="formbtn" type="submit">Mesaj Gönder</button>
                    </form>
                </div>

                <div class="col-lg-5 col-sm-12">
                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <span class="text-muted">Bizler Profesyoneliz</span>
                        <h2 class="mb-5 mt-2">{{$result['iletisim']->title}}</h2>

                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>{{$result['iletisim']->adres}}
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email: {{$result['iletisim']->email}}
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Telefon:{{$result['iletisim']->phone}}
                            </li>
                        </ul>

                        <ul class="social-icons list-inline mt-5">
                            <li class="list-inline-item">
                                <a href="{{$global_data['home']->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$global_data['home']->twitter}}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$global_data['home']->instagram}}"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="google-map">
        <div id="map"></div>
    </div>
    <!-- footer Start -->


</div>

@endsection
