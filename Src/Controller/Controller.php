<?php

namespace Src\Controller;


/**
 * Bonjour je suis le Controller
 *
 * Class Controller
 */
abstract class Controller
{

    public $messUser;


    public function __construct()
    {

        session_start();

    }


    public function checkUser()
    {

        if (isset($_SESSION)) {


            if (!empty($_SESSION) && isset($_SESSION['is_connected'])) {

                $this->setMessUser("Bienvenue");

                if ($_SESSION['is_connected'] == false) {

                    $this->setMessUser("Non Connecté");


                } elseif ($_SESSION['is_connected'] === true) {


                    $this->setMessUser("Connecté");

                }

            }


        } else {

            $this->setMessUser("Bienvenue");
        }

    }


    /**
     * @return mixed
     */
    public
    function getMessUser()
    {
        return $this->messUser;
    }

    /**
     * @param mixed $messUser
     */
    public
    function setMessUser(
        $messUser
    ) {
        $this->messUser = $messUser;
    }


}