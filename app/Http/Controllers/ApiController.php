<?php
/**
 * 该应用中所有Api Controller的基类
 *
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:04
 */

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;

class ApiController extends AppController
{
    use Helpers;
}