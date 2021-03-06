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
                  <h2>Resim Ekle</h2>
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

                    <form action="{{route('resim-ekle')}}"  method="POST"   enctype="multipart/form-data" id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner">Resim<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="banner"><i class="fa fa-picture-o"></i></a>
                                <input type="file" name="resim" id="resim" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                            </div>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="baslik">Ba??lik<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="baslik" required name="baslik"  class="form-control">

                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="aciklama">A????klama<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea
                                required
                                name="aciklama"
                                class="form-control" id="aciklama"
                                cols="30" rows="5"></textarea>
                            </div>
                        </div>



                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" name="portfolio_btn" class="btn btn-success">Kaydet</button>
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

