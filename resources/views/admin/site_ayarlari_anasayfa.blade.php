@extends('admin.layout')

@section('content')
@php $data = $result['data']; @endphp
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
                  <h2>Anasayfa ve genel ayarlar</h2>
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
                    <form  action="{{route('site-ayarlari-anasayfa-update')}}" enctype="multipart/form-data"  method="POST" name="dd"  id="site-ayarlari-form" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="Facebook">Facebook<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="Facebook" name="facebook" value="{{$data->facebook}}"  class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="twitter">Twitter<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="twitter" name="twitter" value="{{$data->twitter}}"   class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"  for="instagram">İnstagram<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="instagram" name="instagram" value="{{$data->instagram}}"  class="form-control ">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">E-mail<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="email" name="email" value="{{$data->email}}"  class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="instagram">Telefon<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control"  value="{{$data->telefon}}" @error('telefon') is-invalid @enderror" name="telefon" data-inputmask="'mask' : '(999) 999-9999'">
                                @error('telefon')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="adres">Adres<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control" name="adres" id="adres" cols="30" rows="5">{{$data->adres}} </textarea>

                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo">Logo<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="logo"><i class="fa fa-picture-o"></i></a>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                              <br>
                                @error('logo')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="clearfix"></div>

                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{asset('images/logo/'.$data->logo.'')}}" alt="image">
                                  </div>

                            </div>

                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo">Banner<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="banner"><i class="fa fa-picture-o"></i></a>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="banner" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                              <br>
                                @error('banner')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="clearfix"></div>

                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{asset('images/banner/'.$data->banner.'')}}" alt="image">
                                  </div>

                            </div>

                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"  for="banner_yazi">Banner Yazısı<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="banner_yazisi" name="banner_yazisi" value="{{$data->banner_yazisi}}"  class="form-control ">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"  for="banner_yazi">Banner Link<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="banner_link" name="banner_link" value="{{$data->banner_link}}"  class="form-control ">
                            </div>
                        </div>



                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-success">Kaydet</button>
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
