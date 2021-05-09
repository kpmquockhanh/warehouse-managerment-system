<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::share('menus', [
            [
                'label' => 'Trang chủ',
                'route' => 'test',
            ],
            [
                'label' => 'Mamamy\'s Story',
                'route' => 'story',
            ],
            [
                'label' => 'Sản phẩm',
                'route' => '',
            ],
            [
                'label' => 'Mua hàng',
                'route' => '',
            ],
            [
                'label' => 'Góc của mẹ',
                'route' => '',
            ],
            [
                'label' => 'Đổi quà',
                'route' => '',
            ],
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
