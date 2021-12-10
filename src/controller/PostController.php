<?php

namespace App\controller;

use App\repository\Repository;
use App\view\View;

class PostController
{
    private  $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function create()
    {
        var_dump("create");
    }

    public function accueil() 
    {
        return $this->view->render('/acceuil');
    }

    public function delete()
    {
        var_dump('suppresion');
    }
    public function read(int $id)
    {
        $postRepository = new PostRepository();
        $post = $postRepository->get($id);

        $this->view->render('/post/read', ['post' => $post, 'title' => 'réussir le projet']);
    }
}