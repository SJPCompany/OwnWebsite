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
use mysqli;

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
    public function getPartByID($id) {
        $sql = "SELECT * FROM parttype WHERE id=:id";
        $query = $this->db->prepare($sql);

        $parameters = array(':id' => $id);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function saveEditPart($id, $type, $barcode, $herkomst, $fabrikant) {
        $sql = "UPDATE parttype SET type= :type , barcode= :barcode , herkomst= :herkomst , fabrikant= :fabrikant WHERE id= :id ";
        $query = $this->db->prepare($sql);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $parameters = array(':type' => $type, ':barcode' => $barcode, ':herkomst' => $herkomst, ':fabrikant' => $fabrikant, ':id' => $id);
        $result = $query->execute($parameters);

        // Send user back
        header('location: ' . URL . 'part/viewpart');
    }

    public function deletePart($id) {
        $sql = "DELETE FROM parttype WHERE id= :id ";
        $query = $this->db->prepare($sql);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $parameters = array(':id' => $id);
        $query->execute($parameters);

        // Send user back
        header('location: ' . URL . 'part/viewpart');
    }
}