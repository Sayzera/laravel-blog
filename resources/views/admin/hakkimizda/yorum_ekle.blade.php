@extends('admin.layout')
@section('content')

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
                  <h2>Yorum Ekle</h2>
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

                    <form action="{{route('yorum-kayit')}}"  method="POST"  id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="biz_kimiz_baslik">Ad Soyad<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="ad_soyad" required name="ad_soyad"  class="form-control   @error('ad_soyad') is-invalid @enderror">
                                @error('ad_soyad')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="meslek">Meslek/Pozisyon<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="meslek" required name="meslek"   class="form-control  @error('ad_soyad') is-invalid @enderror ">
                                @error('meslek')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="yorum_aciklama">Yorum<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control" required name="yorum_aciklama" id="yorum_aciklama" cols="30" rows="5"></textarea>
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

