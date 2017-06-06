<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 23-5-2017
 * Time: 14:33
 */

namespace Mini\Controller;

use Mini\Model\Userform;



class UserController
{
    //check of er ingelogd is
    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }

    private $id;

    // Function to get the id out of the url
    public function getID()
    {
        if (isset($_GET['id'])) {
            $this->id = $_GET['id'];
            return $this->id;

        }
    }
// render index pagina
    public function index()
    {
        // load views
        $this->CheckUSER();

       $userinfo = new Userform();
       $id = $this->getID();
       $users = $userinfo->getuserinfo($id);


        require APP . 'view/_templates/header.php';
        require APP . 'view/user/index.php';
        require APP . 'view/_templates/side_menu.php';
        require APP . 'view/_templates/footer.php';

    }
// render edit pagina
public function edit(){
    $this->CheckUSER();

    $userinfo = new Userform();

    require APP . 'view/_templates/header.php';
    require APP . 'view/user/edit.php';
    require APP . 'view/_templates/side_menu.php';
    require APP . 'view/_templates/footer.php';

}

}