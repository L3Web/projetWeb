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

    public function update()
    {
        var_dump('update');

       
    }

    public function accueil() 
    {
        $array = $this->repository->getAll();
        return $this->view->render('/acceuil', ['todos'=>$array]);
    }

    public function read(int $id)
    {
        $post = $this->repository->get($id);

        $this->view->render('/post/read', ['post' => $post, 'title' => 'réussir le projet']);
    }


    public function updatetodo($id)
    {
        
        $title = $this->repository->get($id);
        $this->view->render('/update',[
            "title" => $title
        ]);
        
    }

    public function updated($id){
        $this->repository->buildUpdate($id, $_POST['title']);
        $this->accueil();


    }
}