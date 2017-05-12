<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 8-5-2017
 * Time: 12:19
 */

namespace Mini\Model;
use Mini\Core\Model;
use Mini\Libs\Helper;

class Part extends Model
{

    public function getAllParts() {
        $sql = "SELECT * FROM parttype";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
    }

    public function createPart($type, $barcode, $herkomst, $fabrikant) {
        $sql = "INSERT INTO parttype(type, barcode, herkomst, fabrikant) VALUES(:type, :barcode, :herkomst, :fabrikant)";
        $query = $this->db->prepare($sql);

        $parameters = array(':type' => $type, ':barcode' => $barcode, ':herkomst' => $herkomst, ':fabrikant' => $fabrikant);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);

        //Send the user back
        header('location: ' . URL . 'part/viewpart');
    }
}