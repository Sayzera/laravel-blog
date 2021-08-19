<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServislerModel extends Model
{
    use HasFactory;

    public function servis_genel_veriler() {
       return DB::table('tbl_servisler')->where('id',1)->get()[0];
    }

    public function servis_page_update($request) {
        $imageName= '';

        $request->validate(
            array(
                'banner' => 'mimes:jpeg,jpg,png,gif',
                'servis_footer_banner' => 'mimes:jpeg,jpg,png,gif'
            ),
            array(
                'banner.mimes' => 'Girdiğiniz resim formati uygun değildir',
                'servis_footer_banner.mimes' => 'Girdiğiniz resim formati uygun değildir'
            )
        );

        if($request->banner) {
            $banner = time().'.'.$request->banner->extension();
            $request->banner->move(public_path('images/banner'),$banner);
        } else {
           $servis_page =  DB::table('tbl_servisler')->where('id',1)->get();
           $banner = $servis_page[0]->banner;
        }

        if($request->servis_footer_banner) {
            $servis_footer_banner = time().'.'.$request->servis_footer_banner->extension();
            $request->servis_footer_banner->move(public_path('images/banner'),$servis_footer_banner);
        } else {
           $servis_page =  DB::table('tbl_servisler')->where('id',1)->get();
           $servis_footer_banner = $servis_page[0]->servis_footer_banner;
        }

        DB::table('tbl_servisler')
        ->where('id',1)
        ->update(
            [
                'banner_title' => $request->banner_title,
                'banner_sub_title' => $request->banner_sub_title,
                'servis_footer_title' => $request->servis_footer_title,
                'banner' => $banner,
                'servis_footer_banner' => $servis_footer_banner
            ]
            );

        return back()
               ->with('success', 'Güncelleme işlemi başarıyla gerçekleşti');

    }

    public function servis_ekle($request) {
        DB::table('tbl_servis_detay')->insert(
            array(
                'servis_title' => $request->servis_title,
                'servis_description' => $request->servis_description
            )
            );
        return back()
               ->with('success', 'Hizmet başarıyla kayıt edildi');
    }

    public function servis_list() {
       return DB::table('tbl_servis_detay')->get();
    }

    public function servis_sil($request) {

        DB::table('tbl_servis_detay')->where('id', $request->servisid)->delete();
        return back()
        ->with('success','Servis başarıyla silindi');
    }

    public function servis_guncelle($request) {
        $servisid = $request->servisid;
        DB::table('tbl_servis_detay')->where('id',$servisid)
        ->update(
            array(
                'servis_title' => $request->servis_title,
                'servis_description' => $request->servis_description,
            )
            );
        return back()
        ->with('success', 'Değişiklikler başarıyla kayıt edildi');

    }

    public function servis_guncelle_data($request) {
        $servisid = $request->servisid;
        return DB::table('tbl_servis_detay')->where('id',$request->servisid)->get()[0];
    }



}
