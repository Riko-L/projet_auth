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
        $this->setLogin('eric');
        $this->setPasswd('1');
        $this->connection();


    }



    public function connection () {

        if(isset($_POST['login']) && isset($_POST['passwd'])) {

            if($_POST['login'] === $this->login && $_POST['passwd'] === $this->passwd ){

                $_SESSION['login'] = $_POST['login'];
                $_SESSION['passwd'] = $_POST['passwd'];
                $_SESSION['is_connected'] = true;

                header( 'Location: /?page=logout');
                exit;

            }


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