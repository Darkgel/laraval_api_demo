<?php
/**
 * Controller层
 * 职责：
 * 1.校验输入（validate）
 * 2.处理请求与响应
 * 3.调用Transformer层，Service层（或Repository层），不会包含任何业务逻辑
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:08
 */

namespace App\Api\Controllers\V1\Blog;

use App\Services\Blog\PostService;
use App\Transformers\Blog\PostTransformer;


class PostController extends BaseController
{
    private $postService;

    public function __construct(PostService $postService){
        $this->postService = $postService;
    }

    public function test(){
        $user = $this->postService->getTestPost();
        return $this->response->item($user, new PostTransformer());
    }
}