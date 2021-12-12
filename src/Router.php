<?php

namespace App;

use App\controller\PostController;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;

        if (isset($_GET['route'])) {
            if ('accueil' === $route) {
                $postController = new PostController();           
                if (isset($action)) {
                    if ('update' === $action) {
                        $postController->updatetodo($_GET['id']);
                
                    } elseif ('create' === $action) {
                        return $postController->create();
                    }
                    elseif('updated' === $action){
                        $postController->updated($_GET["id"]);
                    }
                 }
                $postController->accueil();

        } else {

            require_once 'index.php';
        }
    }


}
}