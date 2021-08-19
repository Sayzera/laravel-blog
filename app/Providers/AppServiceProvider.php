<?php

namespace App\Providers;

use App\Models\Web\IndexModel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $global_data['home'] = IndexModel::home_data();

        view()->composer(['web.layout','web.iletisim'],function($view) use ($global_data){
            $view->with('global_data',$global_data);
        });


    }
}
