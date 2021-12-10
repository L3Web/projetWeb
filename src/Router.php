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
                    if ('delete' === $action) {
                        return $postController->delete();
                    } elseif ('create' === $action) {
                        return $postController->create();
                    }
                }
                $postController->accueil();
            } elseif ('register' === $route) {
                $postController = new PostController();
                $postController->register();
            }
             elseif ('login' === $route) {
                $postController = new PostController();
                $postController->login();
            }
        } else {

            require_once 'index.php';
        }
    }
}