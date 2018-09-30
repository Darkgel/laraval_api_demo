<?php
/**
 * Transformer层
 * 职责：
 * 1.处理显示逻辑
 * 2.管理API接口的输出（使接口的输出与底层的Service，Repository，Model等解耦，这样即使底层数据库表进行了修改，也可以不影响接口的使用）
 *
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:18
 */

namespace App\Transformers\Blog;

use App\Transformers\AppTransformer;
use App\Models\Db1\Post;


class PostTransformer extends AppTransformer
{
    public function transform(Post $post){
        return [
            'id' => '0'.$post->id,
            'title' => 'title:'.$post->title,
            'content' => 'content: '.$post->content,
        ];
    }
}