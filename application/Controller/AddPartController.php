<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 2-5-2017
 * Time: 14:36
 */

namespace Mini\Controller;

use Mini\Model\Addform;

class AddPartController
{
//check of er ingelogd is
    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }
//create index
    public function index()
    {
        $this->CheckUSER();
        // load views
        require APP . 'view/_templates/headerstart.php';
        require APP . 'view/addpart/index.php';
        require APP . 'view/_templates/footer.php';

    }

    public function sendform(){
        if (isset($_POST["submit"])) {

            $addpart = new Addform();
    //stuur post naar de addform
            $addpart->addpart($_POST["parttype"], $_POST["partserie"],  $_POST["other"],  $_POST["manufacturer"],  $_POST["barcode"],  $_POST["fru"],  $_POST["country"],
                $_POST["price"],  $_POST["year"],  $_POST["amount"] ,$_POST["location"]);

        }


        //header('location: ' . URL . 'home/index');


    }
}