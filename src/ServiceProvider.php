<?php
/**
 * Created by PhpStorm.
 * User: pengdancui
 * Date: 2019/4/4
 * Time: 2:11 PM.
 */

namespace Gaffey\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}
