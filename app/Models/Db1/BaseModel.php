<?php
/**
 * 某个数据库下所有model的基类，请在此处添加库层面相关的代码，如数据库连接
 *
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/30
 * Time: 11:05
 */

namespace App\Models\DbDemo;

use App\Models\AppModel;

class BaseModel extends AppModel
{
    protected $connection = 'db_demo';
}