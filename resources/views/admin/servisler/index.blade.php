@extends('admin.layout')
@section('content')
@php $data = $result['data'] @endphp

<!-- page content -->
     <div class="right_col" role="main">
        <div class="">
          <div class="page-title">

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Servisler Sayfası</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <Strong>{{ $message }}</Strong>
                    </div>
                  @endif

                    <form action="{{route('servis-page-update')}}"  method="POST"   enctype="multipart/form-data" id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner">Banner Resim<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="banner"><i class="fa fa-picture-o"></i></a>
                                <input type="file" name="banner" id="banner" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                            </div>
                            </div>
                        </div>
                        <div class="item form-group d-flex justify-content-center">
                            <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail">
                                          <div class="image view view-first" style="height: 400px">
                                            <img style="width: 100%;height:200px; display: block; object-fit:cover;" src="{{asset('images/banner/'.$data->banner)}}" alt="image">
                                          </div>
                                          <div class="caption">
                                            <p>Servis sayfasında bulunan güncel resim</p>
                                          </div>
                                        </div>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner_title">Banner Baslık<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="banner_title" name="banner_title" value="{{$data->banner_title}}"  class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner_title">Servis Sayfası Alt Baslık<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="banner_sub_title" name="banner_sub_title" value="{{$data->banner_sub_title}}"  class="form-control ">
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="hakkimizda_resim">Servis footer resim<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="servis_footer_banner"><i class="fa fa-picture-o"></i></a>
                                <input type="file" name="servis_footer_banner" id="servis_footer_banner" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                            </div>
                            </div>
                        </div>
                        <div class="item form-group d-flex justify-content-center">
                            <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail">
                                          <div class="image view view-first" style="height: 400px">
                                            <img style="width: 100%;height:200px; display: block; object-fit:cover;" src="{{asset('images/banner/'.$data->servis_footer_banner)}}" alt="image">
                                          </div>
                                          <div class="caption">
                                            <p>Servis sayfasının sonunda bulunan resim alanı</p>
                                          </div>
                                        </div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="misyon">Servis footer başlık<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="servis_footer_title" id="servis_footer_title" cols="5" class="form-control" rows="5">{{$data->servis_footer_title}}</textarea>
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" name="site_ayar_btn" class="btn btn-success">Kaydet</button>
                            </div>
                        </div>

                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
@endsection

