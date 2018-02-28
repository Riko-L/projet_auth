<?php

    namespace Src\Base;

    use Src\Controller\LoginController;
    use Src\Controller\LogoutController;


    /**
     * Class Controller
     *
     * @package Src\Controller
     */
    class Controller
    {

        protected $_page = null;


        /**
         * BaseController constructor.
         */
        public function __construct()
        {
            $this->_page = (isset($_GET['page'])) ? $_GET['page'] : null;
        }

        /**
         *
         */
        public function initialize()
        {
            require_once 'Src/Controller/Controller.php';

            switch ($this->_page) {
                case 'logout':
                    require_once 'Src/Controller/LogoutController.php';
                    new LogoutController();
                    require_once 'Src/View/logout.php';
                    break;
                default:
                    require_once 'Src/Controller/LoginController.php';
                    new LoginController();
                    require_once 'Src/View/login.php';
                    break;
            }
        }

    }