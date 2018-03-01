<?php

namespace Src\Controller;


/**
 * Class LoginController
 *
 * @package Src\Controller
 */
class LoginController extends Controller
{

    public $login = null;
    public $passwd = null;


    public function __construct()
    {
        parent::__construct();
        $this->checkUser();
        $this->setLogin('eric');
        $this->setPasswd('1');
        $this->connection();
        $_SESSION['message'] = $this->messUser;


    }


    public function connection()
    {


        if (isset($_COOKIE['login']) && isset($_COOKIE['passwd'])) {
            if ($_COOKIE['login'] === $this->login && $_COOKIE['passwd'] === $this->passwd) {

                $_SESSION['login'] = $_COOKIE['login'];
                $_SESSION['passwd'] = $_COOKIE['passwd'];
                $_SESSION['is_connected'] = true;
            }


        } elseif (isset($_SESSION['is_connected']) && $_SESSION['is_connected'] === true) {

            //header( 'Location: /?page=logout');    Forcer la redirection sur la page du compte
            //  exit;

        } elseif (isset($_SESSION['is_connected'])) {
            if (isset($_POST['login']) && isset($_POST['passwd'])) {


                if ($_POST['login'] === $this->login && $_POST['passwd'] === $this->passwd) {

                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['passwd'] = $_POST['passwd'];
                    $_SESSION['is_connected'] = true;


                    if ($_POST['remember'] === 'on') {
                        setcookie('login', $_SESSION['login'], time() + 1 * 24 * 3600, null, null, false, true);
                        setcookie('passwd', $_SESSION['passwd'], time() + 1 * 24 * 3600, null, null, false, true);

                    }

                    header('Location: /?page=logout');
                    exit;
                }
            }


        } else {


            $_SESSION['is_connected'] = false;


        }


    }


    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param string $passwd
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }


}