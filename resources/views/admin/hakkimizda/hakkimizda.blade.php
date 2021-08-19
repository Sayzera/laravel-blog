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
                  <h2>Hakkımızda Sayfası</h2>
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

                    <form action="{{route('hakkimizda-genel-update')}}"  method="POST"   enctype="multipart/form-data" id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
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
                                            <p>Hakkımızda sayfasında bulunan güncel resim</p>
                                          </div>
                                        </div>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="biz_kimiz_baslik">Biz kimiz yazısı için başlık<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="biz_kimiz_baslik" name="biz_kimiz_baslik" value="{{$data->biz_kimiz_baslik}}"  class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"  for="biz_kimiz_aciklama">Biz kimiz yazısı için açıklama<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="biz_kimiz_aciklama" id="biz_kimiz_aciklama"  cols="5" class="form-control" rows="5">{{$data->biz_kimiz_aciklama}}</textarea>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="hakkimizda_resim">Hakkımızda Resim<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="hakkimizda_resim"><i class="fa fa-picture-o"></i></a>
                                <input type="file" name="hakkimizda_resim" id="hakkimizda_resim" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                            </div>
                            </div>
                        </div>
                        <div class="item form-group d-flex justify-content-center">
                            <div class="col-md-6 col-sm-6">
                                        <div class="thumbnail">
                                          <div class="image view view-first" style="height: 400px">
                                            <img style="width: 100%;height:200px; display: block; object-fit:cover;" src="{{asset('images/banner/'.$data->hakkimizda_resim)}}" alt="image">
                                          </div>
                                          <div class="caption">
                                            <p>Hakkımızda acıklaması alanının yanında bulunan resim alanı</p>
                                          </div>
                                        </div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="misyon">Misyonumuz<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="misyon" id="misyon" cols="5" class="form-control" rows="5">{{$data->misyon}}</textarea>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="vizyon">Vizyonumuz<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="vizyon" id="vizyon" cols="5" class="form-control" rows="5">{{$data->vizyon}}</textarea>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="yaklasim">Yaklaşımımız<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea name="yaklasim" id="yaklasim" cols="5" class="form-control" rows="5">{{$data->yaklasim}}</textarea>
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

