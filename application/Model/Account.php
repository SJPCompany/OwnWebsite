<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 6-4-2017
 * Time: 10:01
 */

namespace Mini\Model;

use Mini\Core\Model;
use Mini\Libs\Helper;

class Account extends Model
{
    // get the user from the database
    public function getUsers($username, $password)
    {
        $password = hash('sha256', $password);
        $sql = "SELECT * FROM account WHERE username = :username AND password = :password";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':password' => $password);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters); echo '<br />';

        // Check if the user already exists
        $count = $query->rowCount();
        if ($count == 0) {
           die('user doesn`t exist');
        } elseif ($count == 1) {
            $this->checkRole($username, $password);
        } else {
            echo "You already exists";
        }

    }

    // Check the role of the user
    public function checkRole($username, $password) {
        $sql = "SELECT * FROM account WHERE username = :username AND password = :password";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':password' => $password);

        $query->execute($parameters);
        $role = $query->fetch();

        // check if role exist
        if (isset($role)) {
            // if the user is Admin then start a session
            if($role->role == 'admin') {
                $_SESSION['admin'] = true;
                $_SESSION['username'] = $role->username;
            } elseif ($role->role == 'owner') {
                $_SESSION['owner'] = true;
                $_SESSION['username'] = $role->username;
            } elseif ($role->role == 'member') {
                $_SESSION['member'] = true;
                $_SESSION['username'] = $role->username;
            } else {
                $_SESSION['student'] = true;
                $_SESSION['username'] = $role->username;
            }
        }
        // Redirect to the startpage
        header('location: ' . URL . 'home/startpage');
        return $role;
    }
}

