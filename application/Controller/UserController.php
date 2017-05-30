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

    public function index()
    {
        // load views
        $this->CheckUSER();

        $userinfo = new Userform();
        // getting all songs and amount of songs
        //$userinfos = $userinfo->getuserinfo();


        require APP . 'view/_templates/header.php';
        require APP . 'view/user/index.php';
        require APP . 'view/_templates/side_menu.php';
        require APP . 'view/_templates/footer.php';

    }

    public function userprofile(){

        $sql = "SELECT * FROM  account WHERE id = , artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();

    }

}