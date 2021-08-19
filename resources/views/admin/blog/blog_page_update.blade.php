@extends('admin.layout')
@php $data = $result['blog_data']; @endphp
@section('head-script')
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
@endsection


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
                  <h2>Blog Yazısı Ekleyin</h2>
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

                    <form action="{{route('blog.guncelle',['blogid' => $result['blogid']])}}"  method="POST"   enctype="multipart/form-data" id="hakkimizda-genel-update" data-parsley-validate="" class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Blog Resmi<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <div class="btn-group">
                                <a class="btn" title="Insert picture (or just drag &amp; drop)" id="image"><i class="fa fa-picture-o"></i></a>
                                <input type="file" class="form-control" name="resim" id="resim" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                                @error('resim')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="item form-group d-flex justify-content-center">
                            <img style="width: 400px; height:200px;object-fit: cover;" src="{{asset('images/blog/'.$data->resim.' ')}}" alt="image">
                          </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="konu_basligi">Konu Basligi<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="konu_basligi" name="konu_basligi" value="{{$data->konu_basligi}}"  class="form-control   @error('konu_basligi') is-invalid @enderror">
                                @error('konu_basligi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="meslek">Konu<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="konu" name="konu"  value="{{$data->konu}}"  class="form-control  @error('konu') is-invalid @enderror ">
                                @error('konu')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Konu Açıklaması<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea  required name="content" id="content" rows="10" cols="80">
                                    {{$data->content}}
                                </textarea>
                                @error('content')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <script>
                              CKEDITOR.replace( 'content' );
                        </script>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="etiketler">Etiketler<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="etiketler" name="etiketler" value="{{$data->etiketler}}"   class="form-control  @error('etiketler') is-invalid @enderror ">
                                @error('etiketler')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
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

