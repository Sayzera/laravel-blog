<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Core\HakkimizdaModel;
use Illuminate\Http\Request;

class HakkimizdaController extends Controller
{
    public function __construct(HakkimizdaModel $hakkimizda)
    {
        $this->Hakkimizda = $hakkimizda;
    }

    public function index() {
        $result = [];
        $result['data'] = $this->Hakkimizda->hakkimizda_genel_data();
        return view('admin.hakkimizda.hakkimizda')->with('result',$result);
    }
    public function genel_update(Request $request) {
       return  $this->Hakkimizda->genel_update($request);
    }

    // Ekip üyeleri ekleme sayfasi
    public function ekip_uyesi_ekleme() {
        return view('admin.hakkimizda.ekip_uyeleri_ekle');
    }

    // Ekip üyesi ekle
    public function ekip_uyesi_ekle(Request $request) {
        return $this->Hakkimizda->ekip_uyesi_ekle($request);
    }

    // Ekip üyeleri listesi
    public function ekip_uyeleri_list(Request $request) {
        $result = [];
        $result['data'] = $this->Hakkimizda->ekip_uyeleri_list();

        return view('admin.hakkimizda.ekip_uyeleri')->with('result',$result);
    }

    //Uye sil
    public function uye_sil(Request $request) {
        return $this->Hakkimizda->uye_sil($request);
    }

    //Uye güncelle page
    public function uye_guncelle(Request $request) {
        $result = [];
        $result['data'] = $this->Hakkimizda->uye_verilerini_al($request);
        $result['uyeid'] =  $request->uyeid;
        return view('admin.hakkimizda.ekip_uyeleri_guncelle')->with('result',$result);
    }

    //Güncelleme
    public function guncelle(Request $request) {
      return $this->Hakkimizda->guncelle($request);
    }

    // Hakkimızda yorum
    public function hakkimizda_yorum(Request $request) {
        return view('admin.hakkimizda.yorum_ekle');
    }

    public function hakkimizda_yorum_kayit(Request $request) {
       return $this->Hakkimizda->hakkimizda_yorum_kayit($request);
    }

    public function hakkimizda_yorum_list(Request $request) {
        $result = [];
        $result['data'] = $this->Hakkimizda->yorumlari_al($request);

        return view('admin.hakkimizda.yorum_list')->with('result',$result);
    }

    public function yorum_sil(Request $request) {
        return $this->Hakkimizda->yorum_sil($request);
    }

    public function yorum_guncelle_page(Request $request) {
        $result = [];
        $result['yorumid'] = $request->yorumid;
        $result['yorum_data'] = $this->Hakkimizda->yorum_data($request->yorumid);
        return view('admin.hakkimizda.yorum_guncelle')->with('result',$result);
    }

    public function yorum_guncelle(Request $request) {
       return  $this->Hakkimizda->yorum_guncelle($request);
    }



}
