<?php

namespace App\controller;

use App\repository\Repository;
use App\view\View;

class PostController
{
    private $repository;
    private  $view;

    public function __construct()
    {
        $this->view = new View();
        $this->repository = new Repository();
    }

    public function create()
    {
        if('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->repository->create($_POST);
        }
        $this->view->render('/acceuil');
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
        $post = $this->repository->get($id);

        $this->view->render('/post/read', ['post' => $post, 'title' => 'réussir le projet']);
    }
}