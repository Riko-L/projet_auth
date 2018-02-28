<?php

    namespace Src\Controller;


    /**
     * Bonjour je suis le Controller
     *
     * Class Controller
     */
    abstract class Controller
    {

        public function __construct()
        {

            session_start();
        }


    }