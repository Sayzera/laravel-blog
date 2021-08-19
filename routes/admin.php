<?php

use App\Http\Controllers\AdminControllers\SiteAnasayfaAyarlariController;

header('Content-Type: text/html; charset=utf-8');

/**
 * prefix /admin/{}
 * RouteServiceProivider kısmından ayarlandı
 */

Route::group(['middleware' => ['web','auth'], 'namespace' => 'AdminControllers'], function () {

       Route::get('/anasayfa', 'IndexController@index')->name('admin-anasayfa');
       Route::get('/siteAyarlariAnasayfa','SiteAnasayfaAyarlariController@index')->name('site-ayarlari-anasayfa');
       Route::post('/siteAyarlariAnasayfaUpdate',[SiteAnasayfaAyarlariController::class,'siteAyarlariUpdate'])->name('site-ayarlari-anasayfa-update');

       // Hakkimizda
       Route::get('/hakkimizda','HakkimizdaController@index')->name('hakkimizda');
       Route::post('/hakkimizdaGenelUpdate','HakkimizdaController@genel_update')->name('hakkimizda-genel-update');

       // Ekip üyeleri
       Route::get('/ekipUyeleriEkle', 'HakkimizdaController@ekip_uyesi_ekleme')->name('ekip-uyeleri');
       Route::post('/ekipUyesiEkle', 'HakkimizdaController@ekip_uyesi_ekle')->name('ekip-uyelesi-ekle');
       Route::get('/ekipUyeleri','HakkimizdaController@ekip_uyeleri_list')->name('ekip-uyeleri-list');
       Route::get('/ekip-uyeleri/uyeid/{uyeid}','HakkimizdaController@uye_sil')->name('uye.delete');
       Route::get('/ekip-uyeleri/uye-guncelle/{uyeid}','HakkimizdaController@uye_guncelle')->name('uye.guncelle');
       Route::post('/ekip-uyeleri/guncelle/{uyeid}','HakkimizdaController@guncelle')->name('uye.guncelleme');

       // hakkımızda yorum
       Route::get('/hakkimizda-yorum','HakkimizdaController@hakkimizda_yorum')->name('hakkimizda-yorum');
       Route::post('/hakkimizda-yorum-kayit','HakkimizdaController@hakkimizda_yorum_kayit')->name('yorum-kayit');
       Route::get('/hakkimizda-yorum-list', 'HakkimizdaController@hakkimizda_yorum_list')->name('yorum-list');
       Route::get('/yorumlar/delete/yorum-id/{yorumid}','HakkimizdaController@yorum_sil')->name('yorum.delete');
       Route::get('/yorumlar/update/yorum-id/{yorumid}','HakkimizdaController@yorum_guncelle_page')->name('yorum.guncelle');
       Route::post('/yorum-guncelle/yorum-id/{yorumid}','HakkimizdaController@yorum_guncelle')->name('yorumu.guncelle');

       // Servis Sayfasi
       Route::get('/servisler','ServisController@index')->name('servis-page');
       Route::post('/servisler/update','ServisController@servis_page_update')->name('servis-page-update');
       Route::get('/servis/ekleme','ServisController@servis_ekle_page')->name('hizmet-ekle');
       Route::post('/servis/ekle','ServisController@servis_ekle')->name('servis-ekle');
       Route::get('/servis/list','ServisController@servis_list')->name('servis-list');
       Route::get('/servis/sil/{servisid}','ServisController@servis_sil')->name('servis.delete');
       Route::get('/servis/guncelle/{servisid}','ServisController@servis_guncelle_page')->name('servis.guncelle.page');
       Route::post('/servis/update/{servisid}','ServisController@servis_guncelle')->name('servis.guncelle');

       // Portfolio
       Route::get('/portfolio','PortfolioController@index')->name('portfolio');
       Route::post('/portfolie/update','PortfolioController@portfolio_page_guncelle')->name('portfolio-guncelle');
       Route::get('/resim/ekleme-sayfasi','PortfolioController@resim_ekleme_sayfasi')->name('resim-ekle-page');
       Route::post('/resim-ekle','PortfolioController@resim_ekle')->name('resim-ekle');
       Route::get('/resim-list','PortfolioController@resim_list')->name('resim-list');
       Route::get('/resim/delete/{resimid}','PortfolioController@resim_delete')->name('resim.delete');
       Route::get('/resim/update/{resimid}','PortfolioController@resim_update_page')->name('resim.guncelle.page');
       Route::post('/resim-update/{resimid}','PortfolioController@resim_guncelle')->name('resim.guncelle');

       // iletisim
       Route::get('/iletisim','IletisimController@index')->name('iletisim');
       Route::post('/iletisim/guncelle','IletisimController@iletisim_guncelle')->name('iletisim-guncelle');

       // Blog
       Route::get('/blog','BlogController@index')->name('blog');
       Route::post('/blog-ekle','BlogController@blog_ekle')->name('blog-ekle');
       Route::get('/blog-list','BlogController@blog_list')->name('blog-list');

       Route::get('/blog/delete/{blogid}','BlogController@blog_delete')->name('blog.delete');
       Route::get('/blog/update/{blogid}','BlogController@blog_guncelle_page')->name('blog.guncelle.page');
       Route::post('/blog-guncelle/{blogid}','BlogController@blog_guncelle')->name('blog.guncelle');



    });


Route::group(['middleware' => ['web'], 'namespace' => 'AuthControllers'], function () {
    // User
    Route::get('/login','CustomAuthController@index')->name('login');
    Route::get('/user-profile','CustomAuthController@userProfile')->middleware('auth')->name('user-profile');
    Route::post('/custom-user-register','CustomAuthController@customRegistration')->middleware('auth')->name('custom-register');

    Route::post('/custom-login','CustomAuthController@customLogin')->name('custom-login');
    Route::get('/logout','CustomAuthController@logout')->name('logout');

    Route::get('/user-profil','CustomAuthController@profil')->middleware('auth')->name('user-profil');
    Route::post('/profil-update','CustomAuthController@profil_update')->middleware('auth')->name('profil-update');

});
