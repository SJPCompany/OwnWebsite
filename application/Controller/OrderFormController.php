<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-4-2017
 * Time: 09:41
 */

namespace Mini\Controller;


class OrderFormController
{
    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }

    public function index()
    {
        $this->CheckUSER();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/orderform/index.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';

    }

}