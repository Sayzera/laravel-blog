<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Core\IletisimModel;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
    private $Iletisim;

    public function __construct(IletisimModel $iletisim)
    {
        $this->Iletisim = $iletisim;
    }
    public function index() {
        $result =[];
        $result['data'] = $this->Iletisim->iletisim_data();
        return view('admin.iletisim.index')->with('result',$result);
    }

    public function iletisim_guncelle(Request $request) {
        return $this->Iletisim->iletisim_guncelle($request);
    }
}
