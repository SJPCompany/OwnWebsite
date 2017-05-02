<?php

namespace Mini\Controller;
use Mini\Model\Admin;

class AdminController
{
    public function CheckUSER()
    {
        if (!isset($_SESSION['username'])) {
            header('location: ' . URL . 'home/index');
        }
    }
    public function AddUser()
    {
        $this->CheckUSER();
        require APP . 'view/_templates/header.php';
        require APP . 'view/add/add.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function registerUser() {
        $this->CheckUSER();
        if ($_POST['username'] == '' || $_POST['password'] == '' || $_POST['email'] == '') {
            die("Some fields has been left empty");
        }

        if(isset($_POST)) {
            if(isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $role = $_POST['role'];
                $user = new Admin();
                $user->checkUser($username, $password,  $email, $role);
            } else {
                die("Submit is not working sorry");
            }
        } else {
            die("POST is not working sorry");
        }
    }
}