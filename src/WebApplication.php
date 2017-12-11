<?php
/**
 * Created by PhpStorm.
 * User: Dano
 * Date: 10/12/2017
 * Time: 15:40
 */

namespace Itb;

class WebApplication
{
    private $mainController;
    public function __construct()
    {

        $this->mainController = new MainController();
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');


        if (empty($action))
        {
            $action = filter_input(INPUT_POST, 'action');
        }


        switch ($action) {
            case null:
                $this->mainController->home();
                break;

            case 'home':
                $this->mainController->home();
                break;

            case 'characters':
                $this->mainController->characters();
                break;

            case 'gallery':
                $this->mainController->gallery();
                break;

            case 'store':
                $this->mainController->store();
                break;
            //default:
             //   $this->mainController->home();
        }

    }

    public function tryLogin()
    {
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        switch ($username)
        {
            case 'user':
                if($password == 'pass')
                {
                    $_SESSION['username'] = 'user' ;
                    $this->mainController->login();
                }
                break;

            case 'staff':
                if($password == 'pass')
                {
                    $_SESSION['username'] = 'staff' ;
                    $this->mainController->login();
                }
                break;
            case 'admin':
                if($password == 'pass')
                {
                    $_SESSION['username'] = 'admin' ;
                    $this->mainController->login();
                }
                break;



        }
    }
    public function logout()
    {
        $_SESSION['loggedIn'] = false;
    }
}