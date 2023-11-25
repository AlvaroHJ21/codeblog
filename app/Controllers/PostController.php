<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;
use Config\Twig;

class PostController extends BaseController
{
    public function index()
    {

        // $twig = Twig::twig();
        $parser = \Config\Services::parser();

        $postModel = new Post();
        $posts = $postModel->findAll();
        // return view('posts/index', compact("posts"));
        // echo $twig->render('posts/index.html', compact("posts"));
        echo $parser->setData(compact("posts"))->render('posts/index');
    }
}
