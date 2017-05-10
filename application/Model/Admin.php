<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 20-4-2017
 * Time: 09:36
 */

namespace Mini\Model;
use Mini\Core\Model;

class Admin extends Model
{
    public function checkUser($username, $password,  $email, $role) {
        $sql = "SELECT * FROM account WHERE email = :email";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // Check if the user already exists
        $count = $query->rowCount();
        if ($count == 0) {
            $this->addUser($username, $password, $email, $role);
        } elseif ($count >= 1) {
            echo "user already exsit";
            header('location: ' . URL . 'home/startpage');
        }
    }

    public function addUser($username, $password, $email, $role) {
        $sql = "INSERT INTO account (username, password, email, role) VALUES (:username, :password, :email, :role)";
        $query = $this->db->prepare($sql);

        // encrypt the password
        $password = hash('sha256', $password);
        $parameters = array(':username' => $username, ':password' => $password, ':email' => $email, ':role' => $role);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        //Send the user to the startpage
        header('location: ' . URL . 'home/startpage');
    }
}