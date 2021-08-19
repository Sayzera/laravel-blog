<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HakkimizdaModel extends Model
{
    use HasFactory;

    public function hakkimizda_genel_data() {
        return DB::table('hakkimizda_genel')->where('id',1)->get()[0];
    }

    public function genel_update($request) {
        $request->validate(
            [
              'banner' => 'mimes:jpeg,jpg,png,gif'
            ],
            [
            'banner.mimes' => 'İzin verilen dosya tipleri:jpeg,jpg,png,gif bunlardır',
            'hakkimizda_resim.mimes' => 'İzin verilen dosya tipleri:jpeg,jpg,png,gif bunlardır'
            ]
        );


        if($request->banner) {
            $imageName = time().rand(0,999).'.'.$request->banner->extension();
            $request->banner->move(public_path('images/banner'),$imageName);
        } else {
           $hakkimizda =  DB::table('hakkimizda_genel')->where('id',1)->get();
           $imageName = $hakkimizda[0]->banner;
        }

        if($request->hakkimizda_resim) {
            $hakkimizda_resim = time().rand(0,555).'.'.$request->hakkimizda_resim->extension();
            $request->hakkimizda_resim->move(public_path('images/banner'),$hakkimizda_resim);
        } else {
           $hakkimizda =  DB::table('hakkimizda_genel')->where('id',1)->get();
           $hakkimizda_resim = $hakkimizda[0]->hakkimizda_resim;
        }

        DB::table('hakkimizda_genel')
        ->where('id',1)
        ->update(
            array(
              'banner' => $imageName,
              'biz_kimiz_baslik' => $request->biz_kimiz_baslik,
              'biz_kimiz_aciklama' => $request->biz_kimiz_aciklama,
              'misyon' => $request->misyon,
              'vizyon' => $request->vizyon,
              'yaklasim' => $request->yaklasim,
              'hakkimizda_resim' => $hakkimizda_resim
            )
        );

       return  back()
        ->with('success', 'Değişiklikler başarıyla kayıt edildi');
    }

    public function ekip_uyesi_ekle($request){
            $request->validate(
                [
                    'ad_soyad' => 'required',
                    'meslek' => 'required',
                    'image' => 'required|mimes:jpg,jpeg,png,gif'
                ],
                [
                    'ad_soyad.required' => 'Bu alanı doldurmanız gerek',
                    'meslek.required' => 'Bu alanı doldurmanız gerek',
                    'image.required' => 'Lütfen bir resim seçiniz',
                    'image.mimes' => 'İzin verilen dosya turleri jpg,jpeg,png,gif harici kabul edilemez'
                ]
                );

                // üye resmi
                $image = time().rand(0,555).'.'.$request->image->extension();
                $request->image->move(public_path('images/team'),$image);

                DB::table('tbl_hakkimizda_ekibimiz')->insert(
                    [
                        'instagram' => $request->instagram,
                        'twitter' => $request->twitter,
                        'facebook' => $request->facebook,
                        'linkedin' => $request->linkedin,
                        'image' => $image,
                        'ad_soyad' => $request->ad_soyad,
                        'meslek' => $request->meslek,
                    ]
                    );

                    return  back()
                    ->with('success', 'Üye Başarıyla kayıt edildi');

    }

    public function ekip_uyeleri_list() {
       return  DB::table('tbl_hakkimizda_ekibimiz')->get();
    }

    public function uye_sil($request) {
        DB::table('tbl_hakkimizda_ekibimiz')->where('id',$request->uyeid)->delete();
        return  back()
        ->with('success', 'Üye başarıyla silindi');
    }

    public function uye_verilerini_al($request) {
        $uyeId = $request->uyeid;
        return DB::table('tbl_hakkimizda_ekibimiz')->where('id', $uyeId)->get()[0];
    }

    public function guncelle($request) {
        $request->validate(
            [
              'image' => 'mimes:jpeg,jpg,png,gif'
            ],
            [
               'image.mimes' => 'İzin verilen dosya tipleri:jpeg,jpg,png,gif bunlardır',
            ]

        );

        if($request->image) {
            $imageName = time().rand(0,999).'.'.$request->image->extension();
            $request->image->move(public_path('images/team'),$imageName);
        } else {
           $uye = DB::table('tbl_hakkimizda_ekibimiz')->where('id',$request->uyeid)->get();
           $imageName = $uye[0]->image;
        }

        DB::table('tbl_hakkimizda_ekibimiz')->where('id',$request->uyeid)->update(
            [
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'image' => $imageName,
                'ad_soyad' => $request->ad_soyad,
                'meslek' => $request->meslek
            ]
            );

       return redirect()
        ->route('ekip-uyeleri-list')
        ->with('success', 'Üye bilgileri başarıyla güncellendi');

    }

    public function hakkimizda_yorum_kayit($request) {
        DB::table('tbl_hakkimizda_yorum')->insert(
            [
                'yorum_aciklama' => $request->yorum_aciklama,
                'ad_soyad' => $request->ad_soyad,
                'meslek' => $request->meslek
            ]
        );

        return back()
        ->with('success','yorumunuz basarıyla kayıt edildi');
    }

    public function yorumlari_al() {
        return DB::table('tbl_hakkimizda_yorum')->get();
    }

    public function yorum_sil($request) {

        DB::table('tbl_hakkimizda_yorum')->where('id', $request->yorumid)->delete();
        return back()
        ->with('success','Yorum başarıyla silindi');
    }

    public function yorum_data($yorumid) {
       return DB::table('tbl_hakkimizda_yorum')->where('id',$yorumid)->get()[0];
    }

    public function yorum_guncelle($request) {
        $yorumid = $request->yorumid;
        DB::table('tbl_hakkimizda_yorum')->where('id',$yorumid)
        ->update(
            array(
                'yorum_aciklama' => $request->yorum_aciklama,
                'ad_soyad' => $request->ad_soyad,
                'meslek' => $request->meslek
            )
            );
        return back()
        ->with('success', 'Değişiklikler başarıyla kayıt edildi');

    }
}
