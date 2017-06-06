<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 23-5-2017
 * Time: 14:34
 */

namespace Mini\Model;


use Mini\Core\Model;

class Userform extends model
{
// get user info from loged in account
    public function getuserinfo($id)
    {

        $sql = "SELECT id,email,firstname,lastname,streetname,housenumber,zip,city FROM account WHERE id = $id";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
    }

}