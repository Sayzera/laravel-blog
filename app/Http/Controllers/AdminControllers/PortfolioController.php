<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Core\PortfolioModel;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct(PortfolioModel $galeri)
    {
        $this->Galeri = $galeri;
    }

    public function index() {
        $result = [];
        $result['data'] = $this->Galeri->galeri_data();
        return view('admin.portfolio.index')->with('result',$result);
    }

    public function portfolio_page_guncelle(Request $request) {
       return $this->Galeri->portfolio_page_guncelle($request);
    }

    public function resim_ekleme_sayfasi() {
        return view('admin.portfolio.portfolio_ekle');
    }

    public function resim_ekle(Request $request) {
        return $this->Galeri->resim_ekle($request);
    }

    public function resim_list() {
        $result = [];
        $result['data'] = $this->Galeri->resim_list();
        return view('admin.portfolio.portfolio_list')->with('result',$result);
    }

    public function resim_delete(Request $request) {
        return $this->Galeri->resim_delete($request);
    }

    public function resim_update_page(Request $request) {
        $result = [];
        $result['resimid'] = $request->resimid;
        $result['data'] = $this->Galeri->resim_data($request);
        return view('admin.portfolio.portfolio_guncelle')->with('result',$result);
    }

    public function resim_guncelle(Request $request){
        return $this->Galeri->resim_update($request);
    }
}
