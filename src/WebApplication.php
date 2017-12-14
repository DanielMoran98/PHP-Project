<?php


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
                    $_SESSION['access'] = 1;
                    $_SESSION['username'] = 'user' ;
                    $this->mainController->login();
                }else{
                    header('Location: views/fail.php');
                }
                break;

            case 'staff':
                if($password == 'pass')
                {
                    $_SESSION['access'] = 2;
                    $_SESSION['username'] = 'staff' ;
                    $this->mainController->login();
                }else{
                    header('Location: views/fail.php');
                }
                break;
            case 'admin':
                if($password == 'pass')
                {
                    $_SESSION['access'] = 3;
                    $_SESSION['username'] = 'admin' ;
                    $this->mainController->login();
                }else{
                    header('Location: views/fail.php');
                }



                break;



        }
    }
    public function logout()
    {
        $_SESSION['access'] = 0;
        $_SESSION['loggedIn'] = false;
    }
}