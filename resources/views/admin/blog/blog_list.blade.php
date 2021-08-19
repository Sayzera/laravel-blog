@extends('admin.layout')

@section('content')
<style>
    #datatable-buttons_length {
        display: flex;
        justify-content: flex-end
    }
    #datatable-buttons_filter {
        display: flex;
        justify-content: flex-end
    }
</style>
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
                  <h2>Blog Yazilari</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">

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
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">

                  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Resim</th>
                        <th>Baslik</th>
                        <th>Konu</th>
                        <th>İçerik</th>
                        <th>Etiketler</th>
                        <th>İşlemler</th>
                      </tr>
                    </thead>


                    <tbody>
                     @foreach ($result['data'] as $blog)
                        <tr>
                        <td><img height="100" width="100" src="{{asset('images/blog/'.$blog->resim)}}" alt=""></td>
                        <td>{{$blog->konu_basligi}}</td>
                        <td>{{$blog->konu}}</td>
                        <td>{{substr($blog->content,0,150).'...'}}</td>
                        <td>{{$blog->etiketler}}</td>
                        <td>
                        <a href="{{route('blog.delete',['blogid' => $blog->id])}}"><button type="button" class="btn btn-warning">Sil</button></a>
                        <a href="{{route('blog.guncelle.page',['blogid' => $blog->id])}}"> <button type="button" class="btn btn-success">Güncelle</button></a>
                        </td>
                      </tr>
                     @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
@endsection

@section('script')
    <script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
@endsection
