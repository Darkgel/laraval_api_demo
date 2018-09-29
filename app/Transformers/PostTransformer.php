<?php
/**
 *  * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:18
 */

namespace app\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Db1\Post;


class PostTransformer extends TransformerAbstract
{
    public function transform(Post $post){
        return [
            'id' => '0'.$post->id,
            'title' => 'title:'.$post->title,
            'content' => 'content: '.$post->content,
        ];
    }
}