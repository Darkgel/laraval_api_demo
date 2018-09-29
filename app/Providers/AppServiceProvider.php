<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //解决jwt生成secret时的bug，见https://github.com/tymondesigns/jwt-auth/pull/1255,需要用到命令php artisan jwt:generate时打开注释
//        $this->app->singleton('tymon.jwt.generate', function ($app) {
//            return $app->make('App\Console\JWTFixes\JWTGenerateCommand');
//        });

        //dingo复杂配置：Authentication Providers，默认为：basic authentication
//        $this->app['Dingo\Api\Auth\Auth']->extend('oauth', function ($app) {
//            return new \Dingo\Api\Auth\Provider\JWT($app['Tymon\JWTAuth\JWTAuth']);
//        });

        //dingo复杂配置：Throttling / Rate Limiting，默认关闭
//        $this->app['Dingo\Api\Http\RateLimit\Handler']->extend(function ($app) {
//            return new \Dingo\Api\Http\RateLimit\Throttle\Authenticated;
//        });

        //dingo复杂配置：Response Transformer,默认是Fractal
//        $this->app['Dingo\Api\Transformer\Factory']->setAdapter(function ($app) {
//            $fractal = new \League\Fractal\Manager;
//
//            $fractal->setSerializer(new \League\Fractal\Serializer\JsonApiSerializer);
//
//            return new \Dingo\Api\Transformer\Adapter\Fractal($fractal);
//        });

        //dingo复杂配置：Error Format（应该放在bootstrap中？）
//        $this->app['Dingo\Api\Exception\Handler']->setErrorFormat([
//            'error' => [
//                'message' => ':message',
//                'errors' => ':errors',
//                'code' => ':code',
//                'status_code' => ':status_code',
//                'debug' => ':debug'
//            ]
//        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
