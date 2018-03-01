<?php

namespace Src\Controller;


/**
 * Class LogoutController
 *
 * @package Src\Controller
 */
class LogoutController extends Controller
{


    public function __construct()

    {
        parent::__construct();
        $this->checkUser();
        $this->logout();
        $this->trashCookies();
        $_SESSION['message'] = $this->messUser;


    }


    public function logout()

    {

        if (!isset($_SESSION['is_connected']) || $_SESSION['is_connected'] === false) {

            header('Location: /');
            exit;
        }


        if (isset($_POST['logout']) && $_POST['logout']) {

            $_SESSION = array();
            session_destroy();

            header('Location: /');
            exit;

        }


    }

    public function trashCookies()
    {


        if (isset($_POST['nocookies']) && $_POST['nocookies']) {


            setcookie('login', '', time() - 3600, '/');
            setcookie('passwd', '', time() - 3600, '/');
            unset($_COOKIE['login']);
            unset($_COOKIE['passwd']);

            $_SESSION = array();
            session_destroy();

            header('Location: /');
            exit;

        }

    }

}