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
                  <h2>Yorum Guncelle</h2>
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

                    <form action="{{route('servis.guncelle',['servisid' => $result['servisid'] ])}}"  method="POST"  id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="servis_title">Servis Başlık<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="servis_title" required name="servis_title"  value="{{$result['data']->servis_title}}" class="form-control ">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="yorum_aciklama">Servis Açıklama<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control" required name="servis_description" id="servis_description" cols="30" rows="5">{{$result['data']->servis_description}}</textarea>
                            </div>
                        </div>



                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" name="servis_btn" class="btn btn-success">Kaydet</button>
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

