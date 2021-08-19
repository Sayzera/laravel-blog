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

                    <form action="{{route('resim.guncelle',['resimid' => $result['resimid'] ])}}" enctype="multipart/form-data"  method="POST"  id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="resim">Resim<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="resim"><i class="fa fa-picture-o"></i></a>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="resim" id="resim" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="item form-group d-flex justify-content-center">
                          <img style="width: 400px; height:200px;object-fit: cover;" src="{{asset('images/portfolio/'.$result['data']->resim.' ')}}" alt="image">
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Baslik<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="title" required name="title"  value="{{$result['data']->title}}" class="form-control ">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="aciklama">Açıklama<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control" required name="aciklama" id="aciklama" cols="30" rows="5">{{$result['data']->aciklama}}</textarea>
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

