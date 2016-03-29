<?php
/**
 * Created by PhpStorm.
 * User: oleksandrserdiuk
 * Date: 29.03.16
 * Time: 10:23 PM
 */

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Регистрация привязок в контейнере.
     *
     * @return void
     */
    public function boot()
    {
        // Если построитель реализуется при помощи класса...
        View::composer('profile', 'App\Http\ViewComposers\ProfileComposer');

        // Если построитель реализуется в функции-замыкании...
        View::composer('dashboard', function($view)
        {

        });
    }

    /**
     * Регистрация сервис-провайдера
     *
     * @return void
     */
    public function register()
    {
        //
    }

}