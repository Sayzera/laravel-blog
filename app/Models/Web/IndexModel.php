<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IndexModel extends Model
{
    use HasFactory;

    static public function home_data() {
        return DB::table('tbl_site_ayarlari')->where('id',1)->get()[0];
    }

    static public function servis_data() {
        return DB::table('tbl_servisler')->where('id',1)->get()[0];
    }

    static public function servis_detay() {
        return DB::table('tbl_servis_detay')->get();
    }

    static public function hakkimizda_uye_yorumlari() {
        return DB::table('tbl_hakkimizda_yorum')->get();
    }

    static public function blog($limit = 3) {
       if(is_int($limit)){
            return DB::table('tbl_blog')
            ->orderByDesc('id')
            ->limit(3)
            ->get();
       } else {
            return DB::table('tbl_blog')
            ->orderByDesc('id')
            ->get();
       }
    }

    static public function hakkimizda_genel() {
        return DB::table('hakkimizda_genel')->where('id',1)->get()[0];
    }

    static public function ekip() {
        return DB::table('tbl_hakkimizda_ekibimiz')->get();
    }

    static public function galeri_genel() {
        return DB::table('tbl_portfolio')->where('id',1)->get()[0];
    }

    static public function resimler() {
        return DB::table('tbl_galeri')->get();
    }

    static public function blog_single($blogid,$blogSearch = false) {
        if(!$blogSearch) {
            return DB::table('tbl_blog')->where('id',$blogid)->get()[0];
        }

    }

    static public function iletisim() {
        return DB::table('tbl_iletisim')->where('id',1)->get()[0];
    }

    static public function send_message($request) {
        $request->validate(
            [
                'name' => 'required|min:2|max:255',
                'email' => 'required|email:rfc,dns',
                'message' => 'required'
            ],
            [
                'name.required' => 'Bu alan bo?? b??rak??lamaz',
                'name.min' => 'l??tfen ge??erli bir isim giriniz',
                'email.email' => 'l??tfen ge??erli bir email giriniz',
                'email.required' => 'Bu alan bo?? b??rak??lamaz',
                'message.required' => 'Bu alan bo?? b??rak??lamaz'
            ]
            );

        DB::table('tbl_mesajlar')->insert(
            [
                'ad_soyad' => $request->name,
                'email' => $request->email,
                'mesaj' => $request->message
            ]
        );

        return back()
        ->with('success', 'Mesaj??n??z ba??ar??yla taraf??m??za iletilmi??tir en k??sa s??rede size geri d??n???? yap??lacakt??r');
    }


}
