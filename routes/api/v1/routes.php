<?php
/**
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 16:47
 */

use Dingo\Api\Routing\Router;

/** @var Dingo\Api\Routing\Router $api*/
$api->version('v1', ['namespace' => 'App\Api\Controllers\V1'], function (Router $api) {
    $api->get('/', function () {
        return 'hello darkgel';
    });

    $api->get('test',function(){
        return 'hello world';
    });

    $api->group(['namespace' => 'Blog'], function (Router $api){
        $api->get('posts/{id}', 'PostController@show');
        $api->get('posts', 'PostController@index');
        $api->get('post/test', 'PostController@test');
    });
});