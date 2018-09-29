<?php
/**
 *  * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:09
 */

namespace app\Models\Db1;

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