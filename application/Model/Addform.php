<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 1-5-2017
 * Time: 13:54
 */

namespace Mini\Model;


use Mini\Core\Model;

class Addform extends Model
{

    public function addpart($parttype, $partserie, $other, $manufacturer, $barcode ,$fru , $country , $price ,$year , $amount)
    {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

                $sql = "INSERT INTO createform (parttype, partserie, other, manufacturer, barcode, fru , country, price, year, amount , image) VALUES (:parttype, :partserie, :other ,:manufacturer ,:barcode, :fru ,:counrty, :price, :year , :amount , :image) ";
                $query = $this->db->prepare($sql);
                $parameters = array(':parttype' => $parttype, ':partserie' => $partserie, ':other' => $other, ':manufacturer' => $manufacturer, ':barcode' => $barcode, ':fru' => $fru, ':country' => $country, ':price' => $price, ':year' => $year , ':amount' => $amount, ':image' => $target_file);

                $query->execute($parameters);


            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

    }



}