<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 1-5-2017
 * Time: 13:54
 */

namespace Mini\Model;


use Mini\Core\Model;

class Orderform extends Model
{

    public function emailorder($firstname, $lastname, $email, $parts , $other)
    {
        echo '<pre>'; var_dump($firstname ,$lastname,$email,$parts , $other); echo '</pre>';

    }
}