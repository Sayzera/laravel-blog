<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Core\ServislerModel;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function __construct(ServislerModel $servis)
    {
        $this->Servisler = $servis;
    }

    public function index(){
        $result = [];
        $result['data'] = $this->Servisler->servis_genel_veriler();

        return view('admin.servisler.index')->with('result',$result);
    }

    public function servis_page_update(Request $request) {
        return $this->Servisler->servis_page_update($request);
    }

    public function servis_ekle_page(Request $request) {
       return view('admin.servisler.servis_ekle_page');
    }

    public function servis_ekle(Request $request){
        return $this->Servisler->servis_ekle($request);
    }

    public function servis_list(Request $request) {
        $result = [];
        $result['data'] = $this->Servisler->servis_list();

        return view('admin.servisler.servis_list')->with('result',$result);
    }

    public function servis_sil(Request $request) {
        return $this->Servisler->servis_sil($request);
    }

    public function servis_guncelle_page(Request $request) {
        $result = [];
        $result['servisid'] = $request->servisid;
        $result['data'] = $this->Servisler->servis_guncelle_data($request);
        return view('admin.servisler.servis_guncelle_page')->with('result',$result);
    }

    public function servis_guncelle(Request $request) {
      return $this->Servisler->servis_guncelle($request);
    }



}
