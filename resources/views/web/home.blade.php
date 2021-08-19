@extends('web.layout')

@section('content')

@php
    $css = '<style type="text/css">';
    $css .= ".slider {
    background: url('../images/banner/".$result['data']->banner." ') no-repeat;
    background-size: cover;
    background-position: 10% 0%;
    padding: 200px 0 280px 0;
    position: relative;
    }";
    $css .= '</style>';

    echo $css;
@endphp


<div class="main-wrapper">
    <!-- Slider Start -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <div class="block">
                        <h1 class="animated fadeInUp mb-5">{{$result['data']->banner_yazisi}}</h1>
                        <a href="{{$result['data']->banner_link}}" target="_blank" class="btn btn-main animated fadeInUp btn-round-full" >Get started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Intro Start -->

    {{-- <section class="section intro">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="h6 text-color ">We are creative & expert people</span>
                        <h2 class="mt-3 content-title">We work with business & provide solution to client with their business problem </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="ti-desktop color-one"></i>
                        <h4 class="mt-4 mb-3">Modern & Responsive design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="ti-medall color-one"></i>
                        <h4 class="mt-4 mb-3">Awarded licensed company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-item">
                        <i class="ti-layers-alt color-one"></i>
                        <h4 class="mt-4 mb-3">Build your website Professionally</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Section Intro END -->
    <!-- Section About Start -->

    {{-- <section class="section about position-relative">
        <div class="bg-about"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-0">
                    <div class="about-item ">
                        <span class="h6 text-color">What we are</span>
                        <h2 class="mt-3 mb-4 position-relative content-title">We are dynamic team of creative people</h2>
                        <div class="about-content">
                            <h4 class="mb-3 position-relative">We are Perfect Solution</h4>
                            <p class="mb-5">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>

                            <a href="#" class="btn btn-main btn-round-full">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Section About End -->
    <!-- section Counter Start -->
    <section class="section counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">1730</span> +</h3>
                        <p class="text-muted">Project Done</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">125 </span>M </h3>
                        <p class="text-muted">User Worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">39</span></h3>
                        <p class="text-muted">Availble Country</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">14</span></h3>
                        <p class="text-muted">Award Winner </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section Counter End  -->
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
     <!-- Section Cta Start -->
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-item  bg-white p-5 rounded">
                        <span class="h6 text-color">Sizin için geliştiriyoruz</span>
                        <h2 class="mt-2 mb-4">Projenizi En İyi Profesyonel Ekibimize Emanet Edin</h2>
                        <p class="lead mb-4">Aklında herhangi bir proje var mı? Anında destek için :</p>
                        <h3><i class="ti-mobile mr-3 text-color"></i>{{$result['data']->telefon}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Cta End-->
    <!-- Section Testimonial Start -->
    <section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="section-title">
                        <span class="h6 text-color">Müşteri Görüşleri</span>
                        <h2 class="mt-3 content-title">Müşterilerimizin hakkımızda söylediklerini kontrol edin</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row testimonial-wrap">
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
    <section class="section latest-blog bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Son Paylaşılanlar</span>
                        <h2 class="mt-3 content-title text-white">Son makalelerimize bakmak ister misiniz ? </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($result['blog'] as $blog)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card bg-transparent border-0">
                        <img src="{{asset('images/blog/'.$blog->resim.' ')}}" alt="" class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">{{$blog->konu}}<span class="ml-2 mr-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="{{route('blog.detay',['blogid' => $blog->id])}}" class="text-white ">{{$blog->konu_basligi}}</a></h3>

                            <a href="{{route('blog.detay',['blogid' => $blog->id])}}" class="btn btn-small btn-solid-border btn-round-full text-white">Detaya git</a>
                        </div>
                    </div>
                </div>


                @endforeach



            </div>
        </div>
    </section>

    <section class="mt-70 position-relative">
        <div class="container">
        <div class="cta-block-2 bg-gray p-5 rounded border-1">
            <div class="row justify-content-center align-items-center ">
                <div class="col-lg-7">
                    <h2 class="mt-2 mb-4 mb-lg-0">Projenizi En İyi Profesyonel Ekibimize Emanet Edin BİZE ULAŞIN</h2>
                </div>
                <div class="col-lg-4">
                    <a href="contact.html" class="btn btn-main btn-round-full float-lg-right ">İletişime Geç</a>
                </div>
            </div>
        </div>
    </div>

    </section>
</div>
    @endsection
