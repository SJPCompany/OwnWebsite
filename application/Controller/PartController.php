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
    private $id;

    public function getID() {
        if (isset($_GET['id'])) {
            $this->id = $_GET['id'];
            return $this->id;
        } else {
            die('Id has not been found');
        }
    }

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

    public function PostCheck() {
        if ($_POST['type'] == '' || $_POST['barcode'] == '' || $_POST['fabrikant'] == '') {
            die('fields has been left empty');
        }
        if (isset($_POST['submit'])) {
           $type = $_POST['type'];
           $barcode = $_POST['barcode'];
           $herkomst = $_POST['herkomst'];
           $fabrikant = $_POST['fabrikant'];
           $part = new Part();
           $part->createPart($type, $barcode, $herkomst, $fabrikant);
        }
    }

    public function editPart() {
        $item = new Part();
        $id = $this->getID();
        $partinfo = $item->getPartByID($id);

        require APP . 'view/_templates/header.php';
        require APP . 'view/part/edit.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function saveEditPart() {
        $type = NULL;
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            if (isset($_POST['type'])) {
                $type = $_POST['type'];
            }
            $barcode = $_POST['barcode'];
            $herkomst = $_POST['herkomst'];
            $fabrikant = $_POST['fabrikant'];

            if ($type === NULL) {
                $link_hippie = "viewpart";
                echo "<a class='item' href='" . $link_hippie . "'> No type has been given  </a>";
            } else {
                $save = new Part();
                $save->saveEditPart($id, $type, $barcode, $herkomst, $fabrikant);
            }
        }
    }

    public function deletePart() {
        $item = new Part();
        $id = $this->getID();
        $partinfo = $item->getPartByID($id);

        require APP . 'view/_templates/header.php';
        require APP . 'view/part/delete.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function removePart() {
        if (isset($_POST['yes'])) {
            $id = $_POST['id'];
            $remove = new Part();
            $remove->deletePart($id);
        } elseif ($_POST['no']) {
            echo "You will be redirected";
            header('location: ' . URL . 'part/viewpart');
        }
    }
}