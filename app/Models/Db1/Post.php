<?php
/**
 * Model层
 * 仅当做一个 Eloquent class使用
 * 职责：
 * 1.处理property ，如$db, $table，$fillable等
 * 2.Accessors & Mutators : 在从model实例中获取或存储属性时对其进行格式化
 * 3.关联关系配置： 使用hasMany()、belongsTo()等
 *
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:09
 */

namespace App\Models\Db1;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'content'
    ];
}