<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IletisimModel extends Model
{
    use HasFactory;

    public function iletisim_data(){
        return DB::table('tbl_iletisim')->where('id',1)->get()[0];
    }

    public function iletisim_guncelle($request) {
        $request->validate(
            [
              'banner' => 'mimes:jpeg,jpg,png,gif'
            ],
            [
            'banner.mimes' => 'İzin verilen dosya tipleri:jpeg,jpg,png,gif bunlardır',
            ]
        );

        if($request->banner) {
            $imageName = time().rand(0,999).'.'.$request->banner->extension();
            $request->banner->move(public_path('images/banner'),$imageName);
        } else {
           $hakkimizda =  DB::table('tbl_iletisim')->where('id',1)->get();
           $imageName = $hakkimizda[0]->banner;
        }

        DB::table('tbl_iletisim')
        ->where('id',1)
        ->update(
            array(
              'banner' => $imageName,
              'adres' => $request->adres,
              'email' => $request->email,
              'phone' => $request->phone,
              'title' => $request->title
            )
        );

       return  back()
        ->with('success', 'Değişiklikler başarıyla kayıt edildi');
    }
}
