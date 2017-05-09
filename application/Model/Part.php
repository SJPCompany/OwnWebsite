<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 8-5-2017
 * Time: 12:19
 */

namespace Mini\Model;
use Mini\Core\Model;

class Part extends Model
{

    public function getAllParts() {
        $sql = "SELECT * FROM parttype";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
    }
}