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
        $this->accueil();
    }
    public function deleteTodo($id)
    {
       

        $this->repository->delete($id);
       $this->accueil();
    }

    public function accueil() 
    {
        $array = $this->repository->getAll();
        return $this->view->render('/acceuil', ['todos'=>$array]);
    }

    public function register()
    {
     return $this->view->render('/register');    
    }
    public function login()
    {
     return $this->view->render('/login');    
    }

    public function read(int $id)
    {
        $post = $this->repository->get($id);

        $this->view->render('/post/read', ['post' => $post, 'title' => 'réussir le projet']);
    }
}