<?php

namespace App\Models\Core;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteAnasayfaAyarlariModel extends Model
{
    use HasFactory;

    public function site_ayarlari_get_data() {
        return $site_ayarlari_data = DB::table('tbl_site_ayarlari')->where('id',1)->get()[0];
    }

    public function site_ayarlari_update(Request $request) {
        $imageName= '';

        $request->validate(
            array(
                'telefon' => 'regex:/0([0-9]{9})/',
                'logo' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'email' => 'email:rfc,dns',
            ),
            array(
                'telefon.regex' => 'lütfen geçerli bir telefon numarası giriniz',
                'logo.mimes' => 'jpeg,jpg,png bunların harici bir format kabul edilemez',
                'logo.max' => 'Yüklediğiniz resim 1mb boyutunu aşamaz',
                'email.email' => 'lütfen geçerli bir email adresi giriniz'
            )
        );

        if($request->logo) {
            $imageName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('images/logo'),$imageName);
        } else {
           $tbl_site_ayarlari =  DB::table('tbl_site_ayarlari')->where('id',1)->get();
           $imageName = $tbl_site_ayarlari[0]->logo;
        }

        if($request->banner) {
            $banner = time().'.'.$request->banner->extension();
            $request->banner->move(public_path('images/banner'),$banner);
        } else {
           $tbl_site_ayarlari =  DB::table('tbl_site_ayarlari')->where('id',1)->get();
           $banner = $tbl_site_ayarlari[0]->banner;
        }

        DB::table('tbl_site_ayarlari')
        ->where('id',1)
        ->update(
            [
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->telefon,
                'logo' => $imageName,
                'adres' => $request->adres,
                'telefon' => $request->telefon,
                'email' => $request->email,
                'banner' => $banner,
                'banner_yazisi' => $request->banner_yazisi,
                'banner_link'=> $request->banner_link
            ]
            );


        return back()
               ->with('success', 'Güncelleme işlemi başarıyla gerçekleşti');

    }

}
