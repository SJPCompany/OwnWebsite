<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 6-4-2017
 * Time: 10:01
 */

namespace Mini\Model;

use Mini\Core\Model;

class Account extends Model
{
    // get the user from the database
    public function getUsers($username, $password, $role)
    {
        $sql = "SELECT * FROM account WHERE username = :username";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // Check if the user already exists
        $count = $query->rowCount();
        if ($count == 0) {
<<<<<< HEAD
            echo "Nothing has been found";
            $user = new Account();
            $user->registerUser($username, $password, $role);
=======
           die('user doesn`t exist');
>>>>>>> 2af31625a6bee9a5854181b042e532c1813ce117
        } elseif ($count == 1) {
            $this->checkRole();
        } else {
            echo "You already exists";
        }

    }

    // if the user doesn`t exist then save them to the database
    public function registerUser($username, $password, $role) {
        $sql = "INSERT INTO account (username, password, role) VALUES (:username, :password, :role)";
        $query = $this->db->prepare($sql);
        // encrypt the password
        $password = password_hash($password, PASSWORD_BCRYPT);
        $parameters = array(':username' => $username, ':password' => $password, ':role' => $role);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        //Send the user to the startpage
        header('location: ' . URL . 'home/startpage');
    }

    // Check the role of the user
    public function checkRole() {
        $sql = "SELECT * FROM account";
        $query = $this->db->prepare($sql);

        $query->execute();
        $role = $query->fetch()->role;

        // check if role exist
        if (isset($role)) {
            // if the user is Admin then start a session
            if($role == 'Admin') {
                $_SESSION['admin'] = true;
            }
        }
        // Redirect to the startpage
        header('location: ' . URL . 'home/startpage');
        return $role;
    }
}

