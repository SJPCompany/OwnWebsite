<?php

namespace Mini\Controller;
use Mini\Model\Admin;

class AdminController
{
    private $id;

    // Function to get the id out of the url
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
    public function AddUser()
    {
        $this->CheckUSER();
        require APP . 'view/_templates/header.php';
        require APP . 'view/add/add.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function editUser() {
        $this->CheckUSER();
        // Get the id for user search
        $user = new Admin();
        $id = $this->getID();
        $usersinfo = $user->getUserByID($id);

        require APP . 'view/_templates/header.php';
        require APP . 'view/add/edit.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function viewUser() {
        $this->CheckUSER();

        $user = new Admin();
        $usersinfo = $user->getAllUsers();

        require APP . 'view/_templates/header.php';
        require APP . 'view/add/index.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function saveEditUser() {
        $this->CheckUSER();
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $role = $_POST['role'];
            $email = $_POST['email'];
            $user = new Admin();
            $user->updateUser($id, $username, $role, $email);
        }
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

    public function deleteUser() {
        $users = new Admin();
        $id = $this->getID();
        $usersinfo = $users->getUserByID($id);

        require APP . 'view/_templates/header.php';
        require APP . 'view/add/delete.php';
        require APP . 'view/_templates/footer.php';
        require APP . 'view/_templates/side_menu.php';
    }

    public function deleteUserCheck() {
        if(isset($_POST['yes'])) {
            $id = $_POST['id'];
            $user = new Admin();
            $user->deleteUser($id);
        } else {
            echo "you pressed no";
            // Send the user back
            header('location: ' . URL . 'admin/viewUser');
        }
    }
}