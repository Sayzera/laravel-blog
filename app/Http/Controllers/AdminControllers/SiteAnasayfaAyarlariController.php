<?php

namespace App\Http\Controllers\AdminControllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Core\SiteAnasayfaAyarlariModel;

class SiteAnasayfaAyarlariController extends Controller
{

    /**
     * class modal Ayarlar
     */
    public function __construct(SiteAnasayfaAyarlariModel $ayarlar)
    {
        $this->Ayarlar = $ayarlar;
    }

    public function index() {
    $site_ayarlari_data = $this->Ayarlar->site_ayarlari_get_data();

    $result = [
        'data' => $site_ayarlari_data
    ];

    return view('admin.site_ayarlari_anasayfa')->with('result',$result);
    }

    public function siteAyarlariUpdate(Request $request){
       return $this->Ayarlar->site_ayarlari_update($request);
    }

}
