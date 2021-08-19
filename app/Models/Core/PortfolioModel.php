<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PortfolioModel extends Model
{
    use HasFactory;

    public function galeri_data() {
        return DB::table('tbl_portfolio')->where('id',1)->get()[0];
    }

    public function portfolio_page_guncelle($request){
        $imageName= '';

        $request->validate(
            array(
                'banner' => 'mimes:jpeg,jpg,png,gif',

            ),
            array(
                'banner.mimes' => 'Girdiğiniz resim formati uygun değildir',
            )
        );

        if($request->banner) {
            $banner = time().'.'.$request->banner->extension();
            $request->banner->move(public_path('images/banner'),$banner);
        } else {
           $servis_page =  DB::table('tbl_portfolio')->where('id',1)->get();
           $banner = $servis_page[0]->banner;
        }

        DB::table('tbl_portfolio')
        ->where('id',1)
        ->update(
            [
                'baslik' => $request->baslik,
                'banner' => $banner
            ]
            );

        return back()
               ->with('success', 'Güncelleme işlemi başarıyla gerçekleşti');
    }

    public function resim_ekle($request) {
        $request->validate(
            [
                'resim' => 'required|mimes:jpg,jpeg,png,gif'
            ],
            [
                'resim.mimes' => 'İzin verilen dosya turleri jpg,jpeg,png,gif harici kabul edilemez'
            ]
            );

            // üye resmi
            $image = time().rand(0,555).'.'.$request->resim->extension();
            $request->resim->move(public_path('images/portfolio'),$image);

            DB::table('tbl_galeri')->insert(
                [
                    'title' => $request->baslik,
                    'aciklama' => $request->aciklama,
                    'resim' => $image
                ]
                );

                return  back()
                ->with('success', 'Resim Başarıyla kayıt edildi');
    }

    public function resim_list() {
        return DB::table('tbl_galeri')->get();
    }

    public function resim_data($request){
        return DB::table('tbl_galeri')->where('id',$request->resimid)->get()[0];
    }

    public function resim_delete($request) {
         DB::table('tbl_galeri')->where('id',$request->resimid)->delete();
        return back()
         ->with('success','Resim Başarıyla Silindi');
    }

    public function resim_update($request) {
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
            $request->resim->move(public_path('images/portfolio'),$imageName);
        } else {
           $hakkimizda =  DB::table('tbl_galeri')->where('id',$request->resimid)->get();
           $imageName = $hakkimizda[0]->resim;
        }

        DB::table('tbl_galeri')
        ->where('id',$request->resimid)
        ->update(
            array(
              'resim' => $imageName,
              'title' => $request->title,
              'aciklama' => $request->aciklama,
            )
        );

       return  back()
        ->with('success', 'Değişiklikler başarıyla kayıt edildi');
    }
 }
