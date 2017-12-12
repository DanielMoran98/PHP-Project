<?php

namespace Itb;

class MainController
{
    public function home()
    {
        require_once __DIR__ . '\..\web\views\home.php';
    }

    public function characters()
    {
        require_once __DIR__ . '\..\web\views\characters.php';
    }

    public function gallery()
    {
        require_once __DIR__ . '\..\web\views\gallery.php';
    }

    public function store()
    {
        require_once __DIR__ . '\..\web\views\store.php';
    }

    public function login()
    {
        $_SESSION['loggedIn'] = true;
        header('Location: views/success.php');

    }

    public function logout()
    {
        $_SESSION['loggedIn'] = false;
        header('Location: views/success.php');
    }
}