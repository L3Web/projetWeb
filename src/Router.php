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
                var_dump('inscription');
                require_once 'view/register.php';
            } elseif ('update' === $route) {
                return $postController->update($_GET['id']);
            } elseif ('login' === $route) {
                var_dump('connexion');
                require_once 'view/login.php';
            } elseif ('contact' === $route) {
                var_dump('contact');
            }
        } else {

            require_once 'index.php';
        }
    }
}