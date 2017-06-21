<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-4-2017
 * Time: 09:41
 */

namespace Mini\Controller;


use Mini\Model\Orderform;

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
    public function email()
    {
        if ($_POST['firstname'] == '' || $_POST['lastname'] == ''|| $_POST['email'] == ''|| $_POST['parts'] == '') {
            die("vul alles in");

        }

     if (isset($_POST["submit"])) {

            $order = new Orderform();
            $order->emailorder($_POST["firstname"], $_POST["lastname"],  $_POST["email"],  $_POST["parts"],  $_POST["other"]);

        }

    }

}