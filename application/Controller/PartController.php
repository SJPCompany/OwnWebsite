<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 8-5-2017
 * Time: 12:14
 */

namespace Mini\Controller;


use Mini\Model\Part;

class PartController
{
    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }
    public function ViewPart()
    {
        $part = new Part();
        $types = $part->getAllParts();

        $this->CheckUSER();
        require APP . 'view/_templates/header.php';
        require APP . 'view/part/index.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function CreatePart() {
        $this->CheckUSER();
        require APP . 'view/_templates/header.php';
        require APP . 'view/part/create.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }
}