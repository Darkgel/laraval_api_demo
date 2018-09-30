<?php
/**
 * Repository层
 * 职责：
 * 1.增删改查操作（通常增删改的逻辑比较单一，而查则会有多种情况，将各种查询逻辑在此处实现），辅助Model层
 *
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:12
 */

namespace App\Repositories\Blog;

use App\Models\Db1\Post;
use App\Repositories\AppRepository;

class PostRepository extends AppRepository
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