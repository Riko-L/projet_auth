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
        $this->logout();

    }


    public function logout()
    {
        if(isset($_GET['deconnection'])) {

        session_destroy();


        }

    }


}