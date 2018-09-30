<?php
/**
 * Service层
 * 职责：
 * 1.处理牵涉到的外部行为：如发送邮件，使用外部API（如使用队列，调用thrift，调用其他团队的服务等）
 * 2.业务逻辑：如根据当前请求是否为登录用户，进行不同的处理。service层是业务逻辑存在的主要地方，辅助Controller层
 *
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:15
 */

namespace App\Services\Blog;

use App\Repositories\Blog\PostRepository;
use App\Services\AppService;

class PostService extends AppService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function getTestPost(){
        $post = $this->postRepository->getTestPost();
        //业务逻辑处理
        $post->content .= 'service层业务处理';
        return $post;
    }
}