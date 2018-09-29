<?php
/**
 * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:08
 */

namespace App\Api\Controllers\V1\Post;

use App\Services\Post\PostService;
use App\Transformers\PostTransformer;


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