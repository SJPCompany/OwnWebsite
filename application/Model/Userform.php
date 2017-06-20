<?php

namespace Mini\Model;

use Mini\Core\Model;

class Userform extends model
{
// get user info from loged in account
    public function getuserinfo($id)
    {
        $sql = "SELECT * FROM account WHERE id=:id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function updateuser($id,$email,$firstname,$lastname,$streetname,$housenumber,$zip,$city){
        $sql = "UPDATE account SET email= :email , firstname= :firstname , lastname= :lastname , streetname= :streetname , housenumber= :housenumber , zip= :zip , city= :city WHERE id= :id ";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email, ':firstname' => $firstname, ':lastname' => $lastname, ':streetname' => $streetname,':housenumber' => $housenumber,':zip' => $zip,':city' => $city, ':id' => $id);
        $result = $query->execute($parameters);

        // Send user back
        header('location: ' . URL . 'user/index');

    }

}