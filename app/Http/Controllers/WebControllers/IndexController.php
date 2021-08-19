<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Web\IndexModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $result = [];

    public function __construct()
    {
        $this->result['yorumlar']      = IndexModel::hakkimizda_uye_yorumlari();
        $this->result['servis_detay']  = IndexModel::servis_detay();
        $this->result['servis_page']   = IndexModel::servis_data();
        $this->result['blog']          = IndexModel::blog();
    }

    // Home
    public function index()
    {
        $result = [];
        $result['data']         = IndexModel::home_data();
        $result['servis_page']  = $this->result['servis_page'];
        $result['servis_detay'] = $this->result['servis_detay'];
        $result['yorumlar']     = $this->result['yorumlar'];
        $result['blog']         = $this->result['blog'];

        return view('web.home')->with('result', $result);
    }
    // hakkimizda
    public function hakkimizda()
    {
        $result = [];
        $result['hakkimizda_genel'] = IndexModel::hakkimizda_genel();
        $result['ekip']             = IndexModel::ekip();
        $result['yorumlar']         = $this->result['yorumlar'];


        return view('web.hakkimizda')->with('result', $result);
    }
    // Servisler
    public function servisler()
    {
        $result = [];
        $result['servis_page']  = $this->result['servis_page'];
        $result['servis_detay'] = $this->result['servis_detay'];

        return view('web.servisler')->with('result',$result);
    }

    //Galeri
    public function galeri() {
        $result = [];
        $result['galeri_genel'] = IndexModel::galeri_genel();
        $result['resimler'] = IndexModel::resimler();

        return view('web.galeri')->with('result',$result);
    }

    // Blog
    public function blog() {
        $result = [];
        $result['blog'] = IndexModel::blog('normal');
        return view('web.blog')->with('result',$result);
    }
    // Blog detay
    public function blogdetay(Request $request) {
        $result = [];
        // TODO: 2.parametre aranacak kelimeyi temsil ediyor.
        $result['blog_single'] = IndexModel::blog_single($request->blogid,false);
        $result['last3'] = $this->result['blog'];
        return view('web.blog_single')->with('result',$result);
    }

    // İletisim
    public function iletisim() {
        $result = [];
        $result['iletisim'] = IndexModel::iletisim();
        return view('web.iletisim')->with('result',$result);
    }

    // mesaj gönder
    public function mesaj(Request $request) {
        return IndexModel::send_message($request);
    }
}
