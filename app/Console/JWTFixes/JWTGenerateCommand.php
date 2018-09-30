<?php
/**
 *  * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 16:03
 */

namespace App\Console\JWTFixes;


class JWTGenerateCommand extends \Tymon\JWTAuth\Commands\JWTGenerateCommand
{
    public function handle()
    {
        $this->fire();
    }
}