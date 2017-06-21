<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 16-6-2017
 * Time: 10:52
 */

namespace Mini\Controller;


use Mini\Model\pricechecker;

class PriceController
{

    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }

    public function index(){

        $this->CheckUSER();

        require APP . 'view/_templates/header.php';
        require APP . 'view/price/index.php';
        require APP . 'view/_templates/side_menu.php';
        require APP . 'view/_templates/footer.php';

    }

    public function getprice(){

        if (isset($_POST["submit"])) {

            $partname = new pricechecker();



            $partname->partsearch($_POST["part"]);

        }



    }

}

