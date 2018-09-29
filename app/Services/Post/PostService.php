<?php
/**
 *  * Created by PhpStorm.
 * User: shiweihua
 * Date: 2018/9/29
 * Time: 17:15
 */

namespace app\Services\Post;

use App\Repositories\PostRepository;

class PostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function getTestPost(){
        return $this->postRepository->getTestPost();
    }
}