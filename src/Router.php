<?php

namespace App;

use App\controller\PostController;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;
        $id = $_GET['id'] ?? null;

        if (isset($_GET['route'])) {
            if ('accueil' === $route) {
                $postController = new PostController();
                if (isset($action)) {
                    if ('update' === $action) {
                        $postController->updatetodo($_GET['id']);
                    }
                    if ('delete' === $action && isset($id)) {
                        return $postController->deleteTodo($id);
                    } elseif ('create' === $action) {
                        return $postController->create();
                    } elseif ('updated' === $action) {
                        $postController->updated($_GET["id"]);
                    }elseif ('check' === $action && isset($id)){
                        $postController->check($id);
                    }
                }

                    $postController->accueil();
                
            } else {

                require_once 'index.php';
            }
        }
    }
}
