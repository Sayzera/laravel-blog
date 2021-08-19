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
                  <h2>İletisim Sayfası</h2>
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

                    <form action="{{route('iletisim-guncelle')}}"  method="POST"  enctype="multipart/form-data" id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
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
                                            <p>İletisim sayfasında bulunan güncel resim</p>
                                          </div>
                                        </div>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="title" name="title" value="{{$data->title}}"  class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="email" name="email" value="{{$data->email}}"  class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Telefon<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="phone" name="phone" value="{{$data->phone}}"  class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="misyon">Adres<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="adres" id="adres" cols="5" class="form-control" rows="5">{{$data->adres}}</textarea>
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

