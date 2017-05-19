<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 20-4-2017
 * Time: 09:36
 */

namespace Mini\Model;
use Mini\Core\Model;
use Mini\Libs\Helper;

class Admin extends Model
{
    public function getAllUsers() {
        $sql = "SELECT * FROM account";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
    }

    public function checkUser($username, $password,  $email, $role) {
        $sql = "SELECT * FROM account WHERE username= :username";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // Check if the user already exists
        $count = $query->rowCount();
        if ($count == 0) {
            echo "new user";
            $this->addUser($username, $password, $email, $role);
        } elseif ($count >= 1) {
            echo "user already exsit";
            header('location: ' . URL . 'admin/viewUser');
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
        header('location: ' . URL . 'admin/viewUser');
    }

    public function getUserByID($id) {
        $sql = "SELECT * FROM account WHERE id=:id";
        $query = $this->db->prepare($sql);

        $parameters = array(':id' => $id);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function updateUser($id, $username, $role, $email) {
        $sql = "UPDATE account SET username= :username , role= :role , email= :email WHERE id= :id ";
        $query = $this->db->prepare($sql);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $parameters = array(':username' => $username, ':role' => $role, ':email' => $email, ':id' => $id);
        $result = $query->execute($parameters);

        // Send user back
        header('location: ' . URL . 'admin/viewUser');
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM account WHERE id= :id ";
        $query = $this->db->prepare($sql);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $parameters = array(':id' => $id);
        $query->execute($parameters);

        // Send user back
        header('location: ' . URL . 'admin/viewUser');
    }
}