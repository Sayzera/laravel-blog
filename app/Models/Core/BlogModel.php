<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    use HasFactory;

    public function blog_ekle($request)
    {
        $request->validate(
            [
                'resim' => 'required|mimes:jpg,jpeg,png,gif'
            ],
            [
                'resim.mimes' => 'İzin verilen dosya turleri jpg,jpeg,png,gif harici kabul edilemez'
            ]
        );

        $image = time() . rand(0, 555) . '.' . $request->resim->extension();
        $request->resim->move(public_path('images/blog'), $image);

        DB::table('tbl_blog')->insert(
            [
                'konu_basligi' => $request->konu_basligi,
                'content' => $request->content,
                'resim' => $image,
                'konu' => $request->konu,
                'etiketler' => $request->etiketler,
            ]
        );
        return  back()
            ->with('success', 'Blog yazısı başarıyla kayıt edildi');
    }

    public function blog_list()
    {
        return DB::table('tbl_blog')->get();
    }

    public function blog_delete($request) {
        DB::table('tbl_blog')->where('id',$request->blogid)->delete();
        return  back()
        ->with('success', 'Blog yazısı başarıyla silindi');
    }

    public function blog_data($request) {
       return DB::table('tbl_blog')->where('id',$request->blogid)->get()[0];
    }

    public function blog_guncelle($request) {

        $request->validate(
            [
              'resim' => 'mimes:jpeg,jpg,png,gif'
            ],
            [
            'resim.mimes' => 'İzin verilen dosya tipleri:jpeg,jpg,png,gif bunlardır',
            ]
        );

        if($request->resim) {
            $imageName = time().rand(0,999).'.'.$request->resim->extension();
            $request->resim->move(public_path('images/blog'),$imageName);
        } else {
           $blog =  DB::table('tbl_blog')->where('id',$request->blogid)->get();
           $imageName = $blog[0]->resim;
        }

        DB::table('tbl_blog')
        ->where('id',$request->blogid)
        ->update(
            array(
              'resim' => $imageName,
              'konu_basligi' => $request->konu_basligi,
              'konu' => $request->konu,
              'content' => $request->content,
              'etiketler' => $request->etiketler
            )
        );

       return  back()->with('success', 'Değişiklikler başarıyla kayıt edildi');
    }


}
