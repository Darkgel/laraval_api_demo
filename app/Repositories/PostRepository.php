<?php
/**
 *  * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:12
 */

namespace app\Repositories;

use App\Models\Db1\Post;

class PostRepository
{
    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function getTestPost(){
        $post = $this->post;
        $post->id = 1;
        $post->title = 'darkgel title';
        $post->content = 'darkgel content';

        return $post;
    }
}